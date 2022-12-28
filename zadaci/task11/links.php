<p>
    <?php
    $letters = range('A', 'Z');
    foreach ($letters as $letter) {
        echo '<a href="index.php?letter=' . $letter . '">' . $letter . '</a> ';
    }
    ?>
</p>