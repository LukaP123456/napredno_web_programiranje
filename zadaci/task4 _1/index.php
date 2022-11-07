<?php
require 'functions.php';
$page = getCurrentPage();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <title><?php echo $page ?></title>
</head>
<body class="bg-black text-white">

<?php
if (isset($_GET['m']) and array_key_exists($_GET['m'], $messages[$page])) {
    echo '<div class="alert alert-' . $messages[$page][$_GET['m']]['style'] . ' alert-dismissible fade show m-5" role="alert" id="message">' .
        $messages[$page][$_GET['m']]['text'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}
?>

<form class="px-5" method="post" id="data" name="data" action="comments.php" enctype="multipart/form-data">
    <br>
    <div class="form-group w-25">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
               placeholder="Enter name">
    </div>
    <br>
    <div class="form-group w-25">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
               placeholder="Enter email">
    </div>
    <br>
    <div class="form-group w-25">
        <label for="img">Upload image</label>
        <input type="file" class="form-control" id="image" name="image" aria-describedby="imageHelp">
    </div>
    <br>

    <div class="form-check w-25">
        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="private">
        <label class="form-check-label" for="flexRadioDefault1">
            private
        </label>
    </div>
    <div class="form-check w-25">
        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="public" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            public
        </label>
    </div>
    <br>

    <div class="form-group">
        <?php
        getDropdownMenu(label: 'days', start: 0, end: 7, name: 'days');
        getDropdownMenu(label: 'months', start: 1, end: 12, name: 'months');
        getDropdownMenu(label: 'years', start: 2021, end: 1945, name: 'years');
        ?>
    </div>
    <br>
    <div class="form-group">
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
</form>
</body>
</html>