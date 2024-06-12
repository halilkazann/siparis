<?php
session_start();
if(empty($_SESSION["site_dili"])){
    include("tr.php");
}
else{
    if ($_SESSION["site_dili"]=="tr"){
        include("tr.php");
    }
    else{
        include("en.php");
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body.a {
        color:black;
        text-decoration: none;
    }
</style>
<body>
    <table width="1000" align="center">
        <tr >
            <td>  <?php echo ANASAYFA; ?></td>
            <td>  <?php echo HAKKIMIZDA; ?></td>
            <td>  <?php echo ILETISIM; ?></td>
            <td>  <?php echo FORUM; ?></td>
            <td>  <?php echo KATEGORILER; ?></td>
            <td> <a href="dil.php?lang=en" style=" color:black;text-decoration: none;">EN </a><a href="dil.php?lang=tr" style=" color:black; text-decoration: none;">TR</a></td>
        </tr>
    </table>
</body>
</html>