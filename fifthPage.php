<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>fifthPage</title>
</head>


<body>
<div class="container">
    <h1>Shopping Cart <?php echo sizeof($_SESSION['selectedProduct']) ?> items</h1>

    <?php
    for($i=0;$i<sizeof($_SESSION['globalProduct']);$i++)
    {
        for($a=0;$a<sizeof($_SESSION['selectedProduct']);$a++)
        {
            if ($_SESSION['selectedProduct'][$a]==$_SESSION['globalProduct'][$i][2]){
                echo '<div class="row">';
                echo '<span style="display: inline-block;min-width: 320px">'.$_SESSION['globalProduct'][$i][0].'</span>';
                echo "<span style='color: #E5483F'>".'$'.$_SESSION['globalProduct'][$i][1].'</span><br>';
                echo '<hr></div>';
            }
        }
    }
    ?>
    <div>
        <span style="display: inline-block;min-width: 316px">Total Money:</span>
        <?php
        $temp=0;
        for($i=0;$i<sizeof($_SESSION['globalProduct']);$i++)
        {
         for($a=0;$a<sizeof($_SESSION['selectedProduct']);$a++)
        {
            if ($_SESSION['selectedProduct'][$a]==$_SESSION['globalProduct'][$i][2])
           $temp=$temp+$_SESSION['globalProduct'][$i][1];
            }
        }
        $_SESSION['totalPrice']=$temp;
        echo '<span style="color: #E5483F">'.'$'.$_SESSION['totalPrice'].'</span><br>';
        ?>
    </div>
</div>


</body>

<style>
.container{
    margin: 0px 25%;
}
</style>
</html>