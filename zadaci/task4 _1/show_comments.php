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
    <title><?php echo $page ?>></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>

    <style>
        .green {
            background-color: green;
        }

        .red {
            background-color: red;
            color: white;
        }

        .orange {
            background-color: orange;
        }

        .yellow {
            background-color: yellow;
        }

        .blue {
            background-color: blue;
            color: white;
        }

        .lightblue {
            background-color: lightblue;
        }

        .pink {
            background-color: pink;
        }
    </style>

</head>
<body>
<div class="m-2">
    <table class="table">

        <thead class="table table-striped text-white border-white bg-dark">
        <tr>
            <?php
            $data = selectData($connection);
            for ($i = 0; $i <= 0; $i++) {
                foreach ($data[$i] as $key => $value) {
                    echo '<th scope="col">' . $key . '</th>';
                }
            }
            ?>
        </tr>
        </thead>

        <tbody>

        <?php
        $data = selectData($connection);

        foreach ($data as $item) {
            echo '<tr class="' . get_bad_level($item['bad_level']) . '">
                         <td>' . $item['id_comment'] . '</td>
                         <td>' . $item['name'] . '</td>
                         <td>' . $item['email'] . '</td>
                         <td>' . nl2br($item['comment']) . '</td>
                         <td>' . $item['filtered_comment'] . '</td>
                         <td>' . $item['total_bad_words'] . '</td>
                         <td>' . $item['total_words'] . '</td>
                         <td>' . $item['bad_level'] . '</td>
                         <td>' . $item['date_time'] . '</td>
                         <td><a href="./comment_images/' . $item['image'] . '">' . $item['image'] . '</a></td>
                         <td>' . $item['status'] . '</td>
                         <td>' . $item['id_bad_word'] . '</td>
                         <td>' . $item['word'] . '</td>
                         <td>' . $item['number'] . '</td>
                    </tr>';
        }
        ?>

        </tbody>
    </table>
</div>

</body>
</html>