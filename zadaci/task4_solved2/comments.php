<?php

require_once 'config.php';
require_once 'functions.php';

$required = ['name', 'email', 'comment', 'day', 'month', 'year'];
$missing = [];

foreach ($required as $field) {
    if (!isset($_POST[$field]) || !strlen(trim($_POST[$field]))) {
        $missing[] = $field;
    }
}

if (!empty($missing)) {
    $_SESSION['missing'] = $missing;
    header('Location: index.php');
    exit;
}

array_walk($_POST, function ($value) use ($mysql) {
    return $mysql->real_escape_string($value);
});

$data = getFilteredCommentData($_POST['comment']);
$sql = "INSERT INTO comments SET name = '{$_POST['name']}', email = '{$_POST['email']}', comment = '{$_POST['comment']}', filtered_comment = '{$data['filteredComment']}', total_bad_words = '{$data['totalBadWords']}', total_words = '{$data['totalWords']}'";
if ($data['suggestedBadLevel']) {
    $sql .= " bad_level = '{$data['suggestedBadLevel']}'";
}
$mysql->query($sql);
$comment_id = $mysql->insert_id;

foreach ($data['words'] as $word => $count) {
    $mysql->query("INSERT INTO bad_words SET id_comment = $comment_id, word = '$word', number = $count");
}
?>
<a href="index.php">Go back</a>