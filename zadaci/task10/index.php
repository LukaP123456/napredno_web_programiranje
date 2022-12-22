<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: #111;
            color: #fff;
            font-family: Arial,sans-serif;
        }
        a {
            color: #0077cc;
        }
        a:hover {
            color: #004f80;
        }

        form {
            width: 500px;
            margin: 0 auto;
            border: 1px solid #444;
            border-radius: 5px;
            padding: 30px;
            background-color: #111;
            color: #fff;
        }
        label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        input[type="text"],input[type="email"],
        textarea {
            width: 100%;
            border: 1px solid #444;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            background-color: #111;
            color: #fff;
        }
        input[type="checkbox"] {
            vertical-align: middle;
        }
        input[type="submit"],
        input[type="reset"] {
            width: 100px;
            height: 40px;
            border: none;
            border-radius: 5px;
            background-color: #0077cc;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #004f80;
        }

    </style>
    <title>Document</title>
</head>
<body>

<form action="send.php" method="post" enctype="multipart/form-data">
    <label for="subject">Subject:</label><br>
    <input type="text" id="subject" name="subject"><br>
    <br>
    <label for="to">To:</label><br>
    <input type="email" id="to" name="to"><br>
    <br>
    <label for="cc">CC:</label><br>
    <input type="text" id="cc" name="cc"><br>
    <br>
    <label for="bcc">BCC:</label><br>
    <input type="text" id="bcc" name="bcc"><br>
    <br>
    <label for="is-html">Is HTML?:</label><br>
    <input type="checkbox" id="is-html" name="is-html"><br>
    <br>
    <label for="text">Text:</label><br>
    <textarea id="text" name="text"></textarea><br>
    <br>
    <label for="file">File:</label><br>
    <input type="file" id="file" name="file"><br>
    <br>
    <input type="submit" value="Send">
    <input type="reset" value="Cancel">
</form>

</body>
</html>