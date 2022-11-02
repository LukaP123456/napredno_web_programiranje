<?php

/**
 * Filters the given string and returns it with additional data
 * 
 * @param string $text
 * @return array
 */
function getFilteredCommentData(string $text) : array {
    global $badWords;
    $text = trim($text);
    $filtered_text = strtr(
        $text,
        array_combine(
            $badWords,
            array_map(function($word) {
                return preg_replace('/(?!^).(?!$)/', '*', $word);
            }, $badWords)
        )
    );
    $words = array_filter(preg_split('/\W+/', $text));
    $occurences = array_intersect_key(array_count_values($words), array_flip($badWords));
    [$total_bad, $total_words] = [array_sum($occurences), count($words)];
    return [
        'filteredComment' => $filtered_text,
        'words' => $occurences,
        'totalBadWords' => $total_bad,
        'totalWords' => $total_words,
        'suggestedBadLevel' => suggestedBadLevel($total_bad, $total_words),
    ];
}

/**
 * Get "bad" level of a text based on total bad word and total word count
 * I modified the logic a bit so it makes sense
 * 
 * @param int $total_bad
 * @param int $total
 * @return ?int
 */
function suggestedBadLevel(int $total_bad, int $total) : ?int {
    $percent = floor($total_bad / $total * 100);
    $percents = [
        6 => 100,
        5 => 80,
        4 => 60,
        3 => 40,
        2 => 20,
        1 => 2,
    ];
    foreach ($percents as $level => $min) {
        if ($percent >= $min) {
            return $level;
        }
    }
    return null;
}

/**
* Prints label and select field
*
* @param string $label  Visible label text
* @param int $start     Range start number
* @param int $end       Range end number
* @param string $name   Name attribute of select
* @param int $default   The selected value
* @return void
*/
function getDropDownMenu(string $label, int $start, int $end, string $name, int $default = null) : void {
    $data = $start < $end ? range($start, $end) : range($end, $start);
    
    $data = array_map(function ($val) use ($default) {
        $selected = $val === $default ? 'selected' : '';
        return "<option $selected>$val</option>";
    }, $data);
    
    $data = join(PHP_EOL, $data);
    
    echo <<< HTML
        <label for="$name">$label</label>
        <select name="$name">
            <option selected disabled>...</option>
            $data
        </select><br>
    HTML;
}