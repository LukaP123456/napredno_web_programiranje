<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 71</title>
</head>

<body>
<?php
$get_vars = ["error", "fname", "lname", "email", "password", "os", "year", "month", "day", "comment"];

foreach ($get_vars as $var) {
    if (isset($_GET["$var"])) // isset($_GET["error"])
        $$var = $_GET["$var"]; // $error = $_GET["error"];
    else
        $$var = ""; // $error = "";
}
/*

64.php?error=1&fname=terv&lname=byerere&email=3434&year=2004&month=null&day=null&os=windows&comment=


 64.php?error=1&fname=vts&lname=vts&email=vts@vts.com&year=2000&month=null&day=null&os=linux&comment=

if(isset($_GET["error"]))
$error = $_GET["error"];

$fname = $_GET["fname"];
$lname = $_GET["lname"]; 
$email = $_GET["email"];
$year = $_GET["year"];
$month = $_GET["month"];
$day = $_GET["day"];
$comment = $_GET["comment"];
$os = $_GET["os"];
*/

if ($error == "1")
    echo "<b>You didn't fill the required fields!</b><br><br>";

?>
<form name="register" method="post" action="71-register.php">
    <br>
    <fieldset>
        <legend><strong>Personal data</strong></legend>
        <label for="fname">firstname:</label>
        <input type="text" name="fname" id="fname" value="<?php echo $fname ?>" required> *
        <br><br>
        <label for="lname">lastname:</label>
        <input type="text" name="lname" id="lname" value="<?php echo $lname ?>" required> *
        <br><br>
        <label for="email">e-mail:</label>
        <input type="email" name="email" id="email" value="<?php echo $email ?>" required> *
        <br><br>
        <label for="password">password:</label>
        <input type="password" id="password" name="password" required> *
        <br><br>
        <label>OS:</label>
        <?php
        $os1 = "checked";
        $os2 = "";

        if ($os == "linux") {
            $os1 = "";
            $os2 = "checked";
        }


        echo "<input type=\"radio\" name=\"os\" value=\"windows\" $os1 >windows";
        echo "<input type=\"radio\" name=\"os\" value=\"linux\" $os2  >linux";
        ?>
        <br>
        <br>
        <label>Birthday:</label><br><br>
        <?php

        echo "year : <select name=\"year\" size=\"1\">\n";
        echo "<option value=\"null\">- choose -</option>\n";
        for ($i = 2008; $i >= 1908; $i--) {
            if ($year == $i)
                echo "<option value=\"$i\" selected>$i</option>\n";
            else
                echo "<option value=\"$i\">$i</option>\n";
        }
        echo "</select>\n *";

        echo " month : <select name=\"month\" size=\"1\">\n";
        echo "<option value=\"null\">- choose -</option>\n";
        for ($j = 1; $j <= 12; $j++) {
            if ($month == $j)
                echo "<option value=\"$j\" selected>$j</option>\n";
            else
                echo "<option value=\"$j\">$j</option>\n";
        }

        echo "</select>\n *";

        echo " day : <select name=\"day\" size=\"1\">\n";
        echo "<option value=\"null\">- choose -</option>\n";
        for ($k = 1; $k <= 31; $k++) {
            if ($day == $k)
                echo "<option value=\"$k\" selected>$k</option>\n";
            else
                echo "<option value=\"$k\">$k</option>\n";
        }
        echo "</select>\n *";

        ?>
        <br><br>
        <label for="comment">comment</label>
        <br><br>
        <textarea name="comment" rows="3" cols="20" id="comment"><?php echo $comment ?></textarea>
        <br>
        <br>
        <b>Fields with * are required!</b>
        <br><br>
        <input type="submit" name="sb" value="send">
        <input type="reset" name="rb" value="cancel">
        <br>
        <br>
    </fieldset>
</form>
</body>
</html>
