</footer>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>JS FE tööde</title>
    <link rel="stylesheet" href="stile/stile.css">
    <link rel="stylesheet" href="stile/joonis_stile.css">
    <script src="js/joonis_script.js"></script>
    <script src="js/muusika_ankeet_script.js"></script>
    <link rel="stylesheet" href="stile/stile_flags.css">
</head>
<body>
<!--sisu header.php failist-->
<?php include('header.php'); ?>
<!--sisu nav.php failist-->
<?php include('nav.php'); ?>
<!--sisu content kaustast-->
<?php
if(isset($_GET["veebileht"])){
    include('content/'.$_GET["veebileht"]);
}
else{
    echo "ERROR 404";
}
?>
<!--sisu footer.php failist-->
<?php include('footer.php'); ?>
</body>
</html>