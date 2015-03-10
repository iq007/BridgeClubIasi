<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php';?>
    <?php include './db/db.php';?>
</head>
<body role="document">
<?php include 'menu.php';?>

<?
    $database->insert("jucator", [
        "nume" => "foo",
        "email" => "foo@bar.com",
        "telefon" => "1234123"
    ]);

?>

<?php include 'footer.php';?>

</body>
</html>