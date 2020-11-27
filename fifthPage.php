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
    foreach($_SESSION['selectedProduct'] as $key=>$value)
    {
        if ($_SESSION['globalProduct'][$key][2]==$value)
        {
            echo '<div class="row">';
         echo '<span style="display: inline-block;min-width: 320px">'.$_SESSION['globalProduct'][$key][0].'</span>';
          echo "<span style='color: #E5483F'>".'$'.$_SESSION['globalProduct'][$key][1].'</span><br>';
        echo '<hr></div>';
        }
    }
    ?>
    <div>
        <span style="display: inline-block;min-width: 316px">Total Money:</span>
        <?php
        $temp=0;
        foreach ($_SESSION['selectedProduct'] as $key=>$value)
        {
            if ($_SESSION['globalProduct'][$key][2]==$value)
            {
                $temp=$temp+$_SESSION['globalProduct'][$key][1];
            }
        }
        echo '<span style="color: #E5483F">'.'$'.$temp.'</span>';
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