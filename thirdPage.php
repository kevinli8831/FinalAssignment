<?php
session_start();

foreach($_SESSION['selectedProduct'] as $key=>$value)
{
    // and print out the values
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
}

?>
<!DOCTYPE html>
<html>
<head>
<title>thirdPage</title>
</head>


<body>
thirdPage !!!

<?php
// echo "selected=". $_SESSION['selectedFood'];
?>
</body>

<style>

</style>
</html>