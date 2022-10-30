<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 74</title>
</head>

<body>
<?php
var_dump($_FILES);
if ($_FILES['file']["error"] > 0) {
    echo "Something went wrong during file upload!";
} else {
    if (isset($_FILES["file"]) and is_uploaded_file($_FILES['file']['tmp_name'])) {

        $fileName = $_FILES['file']["name"];
        $fileTemp = $_FILES["file"]["tmp_name"];
        $fileSize = $_FILES["file"]["size"];
        $fileType = $_FILES["file"]["type"];
        $fileError = $_FILES['file']["error"];

        echo "Ime poslate datoteke / A feltöltött fájl neve: $fileName <br />";
        echo "Privremena lokacija datoteke / Az ideiglenes fájl eljárási útja: $fileTemp <br />";
        echo "Veličina poslate datoteke u bajtovima / A feltöltött fájl mérete bájtban: $fileSize <br />";
        echo "Tip poslate datoteke / A feltöltött fájl típusa: $fileType <br />";
        echo "Kod greške / Hibakód: $fileError <br />";

        /*
                 if(exif_imagetype($fileTemp)  2  OR 3
                if size <=102400

                 if jpg and png images
                 <= 100kb -> images/small/
                 else
                 others


                 */

        $directory = "files";

        $upload = "$directory/$fileName";


        if (!is_dir($directory))
            mkdir($directory);

        if (!file_exists($upload)) {
            if (move_uploaded_file($fileTemp, $upload)) {
                echo "Upload of $fileName was successful!";
            } else
                echo "<p><b>Error!</b></p>";
        } else
            echo "<p><b>File with this name already exists!</b></p>";
    }

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
    IMAGETYPE_XBM = 16
    IMAGETYPE_ICO = 17
    IMAGETYPE_WEBP = 18

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