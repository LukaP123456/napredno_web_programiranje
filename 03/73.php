<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 73</title>
</head>

<body>
<?php

echo "<pre>";
var_dump($_FILES);
echo "</pre>";


if ($_FILES['file']["error"] > 0) {
    echo "Something went wrong during file upload!";
} else {
    if (isset($_FILES["file"]) and is_uploaded_file($_FILES['file']['tmp_name'])) {

        $file_name = $_FILES['file']["name"];
        $file_temp = $_FILES["file"]["tmp_name"];
        $file_size = $_FILES["file"]["size"];
        $file_type = $_FILES["file"]["type"];
        $file_error = $_FILES['file']["error"];
        $full_path = $_FILES['file']["full_path"]; // The full path as submitted by the browser.
        // This value does not always contain a real directory structure, and cannot be trusted. Available as of PHP 8.1.0.


        // http://en.wikipedia.org/wiki/Exchangeable_image_file_format
        // http://www.php.net/manual/en/book.exif.php


        echo exif_imagetype($file_temp) . "<br>";

        if (!exif_imagetype($file_temp))
            exit("File is not a picture!");


        echo "Ime poslate datoteke / A feltöltött fájl neve: $file_name <br />";
        echo "Privremena lokacija datoteke / Az ideiglenes fájl eljárási útja: $file_temp <br />";
        echo "Veličina poslate datoteke u bajtovima / A feltöltött fájl mérete bájtban: $file_size <br />";
        echo "Tip poslate datoteke / A feltöltött fájl típusa: $file_type <br />";
        echo "Kod greške / Hibakód: $file_error <br />";
        // subotica.jpg
        // vts.subotica.jpg
        // strrpos
        // substr
        // explode

        //vts.subotica.jpg
        /*
        $ext_temp[0] = "vts";
        $ext_temp[1] = "subotica";
        $ext_temp[2] = "jpg";


        $path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');

        echo $path_parts['dirname'], "\n";
        echo $path_parts['basename'], "\n";
        echo $path_parts['extension'], "\n";
        echo $path_parts['filename'], "\n"; // since PHP 5.2.0

        $path_parts = pathinfo($_FILES["file"]["name"]);
        $extension = $path_parts['extension'];

        http://php.net/manual/en/function.pathinfo.php




        */

        $ext_temp = explode(".", $file_name); //
        $extension = end($ext_temp);

        if (isset($_POST['alias'])) {
            $alias = $_POST['alias'];
        } else {
            $alias = "";
        }

        $new_file_name = Date("YmdHis") . "-$alias.$extension";
        // 20171110084338.jpg
        // 20191112134305-vts.jpg
        $directory = "images";

        $upload = "$directory/$new_file_name"; // images/20191112134305-vts.jpg

        /*

        201711289282.extension

        */

        if (!is_dir($directory)) //is_dir("images")
            mkdir($directory);

        if (!file_exists($upload)) //images/back.png
        {
            if (move_uploaded_file($file_temp, $upload)) {

                $size = getimagesize($upload);
                var_dump($size);
                foreach ($size as $key => $value)
                    echo "$key = $value<br>";

                echo "<img src=\"$upload\" $size[3] border=\"0\" alt=\"$file_name\">";

                // width="1000" height="669"
                // <img src="pic.gif" width="1000" height="669" alt="pic" />
            } else
                echo "<p><b>Error!</b></p>";
        } else
            echo "<p><b>File with this name already exists!</b></p>";
    }

//foreach(get_defined_constants() as $key=>$value)

//echo "$key = $value<br />";

    /*

     if(!exif_imagetype($file_temp))
     exit("File is not a picture!");

    the order of the .dll file name in php.ini file are very important.
    like this:
    extension=php_mbstring.dll
    extension=php_exif.dll

    php_mbstring.dll file must be before php_exif.dll in Windows.

    IMAGETYPE_GIF = 1
    IMAGETYPE_JPEG = 2
    IMAGETYPE_PNG = 3
    IMAGETYPE_SWF = 4
    IMAGETYPE_PSD = 5
    IMAGETYPE_BMP = 6
    IMAGETYPE_TIFF_II = 7
    IMAGETYPE_TIFF_MM = 8
    IMAGETYPE_JPC = 9
    IMAGETYPE_JP2 = 10
    IMAGETYPE_JPX = 11
    IMAGETYPE_JB2 = 12
    IMAGETYPE_SWC = 13
    IMAGETYPE_IFF = 14
    IMAGETYPE_WBMP = 15
    IMAGETYPE_JPEG2000 = 9
    IMAGETYPE_XBM = 16
    IMAGETYPE_ICO = 17




    0 - UPLOAD_ERR_OK / Sve je u redu / Minden rendben
    1 - UPLOAD_ERR_INI_SIZE / Datotetka je veća od podešavanja u php.ini fajlu za parametar upload_max_filesize / A fájl mérete meghaladja a php.ini upload_max_filesize beállításban megadottat
    2 - UPLOAD_ERR_FORM_SIZE / Datoteka je veća od vrednosti skrivenog polja MAX_FILE_SIZE / A fájl mérete meghaladja a MAX_FILE_SIZE rejtett elemben megadottat
    3 - UPLOAD_ERR_PARTIAL / Postavljen je samo deo datoteke / A fájl csak részben töldódött fel
    4 - UPLOAD_ERR_NO_FILE / Datoteka nije postavljena / A fájl nem töldődött fel


    upload_max_filesize = 2M php.ini
    getimagesize

    */
}
?>
</body>
</html>