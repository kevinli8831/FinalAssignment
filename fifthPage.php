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
    <h1>Shopping Cart <?php
        if (isset($_SESSION['selectedProduct']))
        echo sizeof($_SESSION['selectedProduct']);
        else
            echo '0';
        ?>
        items</h1>

    <?php
    if(isset($_SESSION['globalProduct'])&&$_SESSION['selectedProduct'])
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
        if (isset($_SESSION['globalProduct'])&&$_SESSION['selectedProduct'] )
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
	<div class="pay"> 
	<input type="submit" value="Pay">
        <form action="fifthPage.php" method="post">

            <?php
            if (isset($_POST['reset']))
            $reset=$_POST['reset'];

            if(isset($reset))
                session_destroy();
            ?>
            <input type="hidden" name="reset" value="reset">
            <input type="submit" value="reset" name="reset" >
        </form>
</div>


</body>

<style>
	.container{
    margin: 0px 25%;
	padding: 10px;
        background-color: cornsilk;
        border-radius: 15px;
        border: 5px solid #AF7255;
	}
	
	body{
		background-image: url("background.jpg");
		background-size: auto;
		}
		
	
	
</style>
</html>