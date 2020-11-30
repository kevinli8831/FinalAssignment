<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>fifthPage</title>
</head>


<body>
	<div class="top-bar" >
    <div class="logo">
        <a href="firstPage.php">
            <img src="logo2.png">
        </a>


    </div>
    <div class="menu">
        <a href="firstPage.php" style="color: #ffc111;font-size: 25px;text-decoration: none">Home</a>
    </div>
	</div>
	
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
                echo '<div class="row" style="display: flex;align-items: center">';
                $photo=$_SESSION['globalProduct'][$i][2];
                echo '<img class="imgSize" src="product' . $photo . '.jpg">';
                echo '<span style="display: inline-block;min-width: 320px;margin-left: 30px;font-size: 22px">'.$_SESSION['globalProduct'][$i][0].'</span>';
                echo "<span style='color: #E5483F;font-size: 22px'>".'$'.$_SESSION['globalProduct'][$i][1].'</span><br>';
                echo '</div>';
                echo '<hr>';

            }
        }
    }
    ?>
    <div>
        <span style="display: inline-block;min-width: 316px;margin-left: 130px;font-size: 22px">Total Money:</span>
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
        echo '<span style="color: #E5483F;font-size: 22px">'.'$'.$_SESSION['totalPrice'].'</span><br>';
        ?>
    </div>
	
        <form action="sixthPage.php" method="post">
            <input type="submit" class="button myMOUSE" value="pay" name="pay">
        </form>
        <form action="fifthPage.php" method="post">

            <?php
            if (isset($_POST['reset']))
            $reset=$_POST['reset'];

            if(isset($reset))
            {
                session_destroy();
                header('Location:fifthPage.php');
            }

            ?>
            <input type="hidden" name="reset" value="reset">
            <input type="submit" class="button myMOUSE" value="reset" name="reset" >
        </form>
</div>
	<div class="previous">
        <a href="fourthPage.php"><i class="fas fa-arrow-circle-left" style="color: black;font-size: 35px"></i></a>
    </div>

</body>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"    ></script>
<style>
	.container{
    margin: 0px 25%;
	padding: 10px;
        background-color: cornsilk;
        border-radius: 15px;
        border: 5px solid #AF7255;
	}
	.imgSize{
        border: 1px solid #AF7255;
        width: 100px;
        height: 100px;
    }
	body{
        background-image: url("background.jpg");
        background-size: auto;
        margin: 0px;
    }
    .display-inlineBlock{
        display: inline-block;
        background-color: #fff;
    }
    .menu{
        align-self: center;
        margin-right: 30px;

    }
    .top-bar{
        background-color: #111111;
        height: 70px;
        border-bottom: 3px solid #ffc111;
        display: flex;
        justify-content: space-between;
    }

    .logo img{
        width: 160px;
        height: 70px;
        float: left;
    }
	.previous{
        float: left;
        margin-left: 20px;

    }
	
    .cart{
        color: #ffc111;
        display: inline-flex;
        align-items: baseline;
        font-size: 25px;
        text-decoration: none;
    }
    .menu-bar {
        float: right;
    }
    .menu-bar ico-icon{
        vertical-align: bottom;
        font-size: 20px;
        float: right;
    }
	.button{
        width: 105px;
        height: 35px;
        border-radius: 10px;
        border-color: #AF7255;
    }
	.myMOUSE {
        cursor: pointer;
    }
    .myMOUSE:hover {
       background-color: coral;
    }	
	
	
</style>
</html>