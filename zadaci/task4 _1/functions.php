<?php
$badWords = ['drop', 'delete', 'kill', 'destroy', 'fool'];
require 'config.php';

/**
 * Generates a dropdown menu based on the data inputted. If the user enters month as the name parameter, a select list with months will be generated,
 * if years is inputted as the name parameter a select list with years will be generated
 * @param string $label
 * @param int $start
 * @param int $end
 * @param string $name
 * @param string $default
 * @return void
 */
function getDropdownMenu(string $label, int $start, int $end, string $name, string $default = 'optional'): void
{
    echo '<label for="' . $label . '">' . $label . '</label><br>';
    echo '<select name="' . $name . '">';

    if ($start > $end) {
        [$start, $end] = [$end, $start];
    }

    if ($name === 'months') {
        for ($i = 0; $i < $end; $i++) {
            $time = strtotime(sprintf('first day of +%d month', $i));
            $value = date('M', $time);
            echo '<option> ' . $value . ' </option>';
        }
    }

    if ($name === 'days') {
        for ($i = 1; $i <= 31; $i++) {
            echo '<option> ' . $i . ' </option>';
        }
    }

    if ($name === 'years') {
        foreach (range($start, $end) as $x) {
            echo '<option> ' . $x . ' </option>';
        }
    }
    echo '</select><br>';
}

/**
 * Function filters bad words from the array $badWords.If a bad word is detected in the inputted comment the word will be
 * censored. Based on the amount of bad words that are in the comment a bad level parameter will be generated,
 * at the end the comment is inserted into the DB
 * @param string $comment
 * @param array $badWords
 * @param mysqli $connection
 * @return array
 */
function getFilteredCommentData(string $comment, array $badWords, mysqli $connection,string $file_name,string $status): array
{
    $trimmed_comment = trim(strip_tags($comment));
    $exploded_comment_array = explode(" ", $trimmed_comment);

    $bad_words_array = array_intersect($exploded_comment_array, $badWords);
    foreach ($bad_words_array as $key => $value) {
        $item_first_char = $value[0];
        $item_last_char = $value[strlen($value) - 1];
        $censored_word = $item_first_char . str_repeat('*', strlen($value) - 2) . $item_last_char;

        $exploded_comment_array[$key] = $censored_word;
    }

    $total_word_count = count($exploded_comment_array);
    $bad_word_count = count($bad_words_array);

    $data = [
        'filtered_comment' => implode(" ", $exploded_comment_array),
        'words' => array_count_values($bad_words_array),
        'total_bad_words' => count($bad_words_array),
        'total_words' => count($exploded_comment_array),
        'suggested_bad_level' => getSuggestedBadLevel($total_word_count, $bad_word_count)
    ];
    insertComment($data, $trimmed_comment, $connection,$file_name,$status);
    return $data;
}

/**
 * Inserts comment into the DB
 * @param array $comment_data
 * @param string $dirty_comment
 * @param mysqli $connection
 * @return bool
 */
function insertComment(array $comment_data, string $dirty_comment, mysqli $connection, string $file_name, string $status): bool
{
    $word = 0;
    $filtered_comment = $comment_data['filtered_comment'];
    foreach ($comment_data['words'] as $item) {
        $word = $item;
    }
    $total_bad_words = $comment_data['total_bad_words'];
    $total_words = $comment_data['total_words'];
    $suggested_bad_level = $comment_data['suggested_bad_level'];

    if (!empty($file_name)) {
        $sql = "INSERT INTO comment(comment,filtered_comment,total_bad_words,total_words,bad_level,date_time,name,status)
                VALUES('$dirty_comment','$filtered_comment',$total_bad_words,$total_words,$suggested_bad_level,NOW(),$file_name,$status)";
    } else {
        $sql = "INSERT INTO comment(comment,filtered_comment,total_bad_words,total_words,bad_level,date_time,status)
                VALUES('$dirty_comment','$filtered_comment',$total_bad_words,$total_words,$suggested_bad_level,NOW(),$status)";
    }

    if ($total_bad_words != 0) {
        $bad_words_sql = "INSERT INTO bad_word(id_comment, word, number)
                VALUES(LAST_INSERT_ID(),$word,$total_bad_words)";

        if (mysqli_query($connection, $bad_words_sql)) {
            echo 'bad words inserted';
        } else {
            echo 'error bad words';
        }
    }

    if (mysqli_query($connection, $sql)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Generates the bad level of a comment based on the amount of bad words used
 * @param $total_words
 * @param $total_bad_words
 * @return int|null
 */
function getSuggestedBadLevel($total_words, $total_bad_words): int|null
{
    if ($total_bad_words == $total_words) {
        return 1;
    } else {
        $result = $total_bad_words / $total_words;
        $percent = round((float)$result * 100) . '%';
        var_dump($percent);
        return match ($percent) {
            $percent > 2 && $percent < 19 => 2,
            $percent > 20 && $percent < 39 => 3,
            $percent > 40 && $percent < 59 => 4,
            $percent > 60 && $percent < 79 => 5,
            $percent > 80 && $percent < 99 => 6,
            default => null,
        };
    }
}

/**
 * Function returns actual script name with extension
 * @return string
 */
function getCurrentPage(): string
{
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}


