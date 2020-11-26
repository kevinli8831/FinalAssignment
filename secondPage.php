<?php
session_set_cookie_params(0);
session_start();
$product=array
(
    array("biscuit",20,1),
    array("orange",30,2),
    array("cola",8,3),
    array("apple",10,4),
    array("chicken",80,5),
    array("pork",100,6),
    array("cookie",100,7),
    array("calbee",100,8),
    array("cupDoodle",100,9),
    array("cheese",100,10),
    array("fishball",100,11),
    array("icecream",100,12),
    array("salt",100,13),
    array("watermelon",100,14),
    array("melon",100,15),
    array("fish",100,16),
);
$_SESSION['globalProduct']=$product;

$selectedProduct=array();

if(isset($_POST['value']))
{
    $temp=$_POST['value'];
//    array_push($selectedProduct,$temp);

}
if(isset($_SESSION['selectedProduct'])&& isset($_POST['value']))
{
   array_push($_SESSION['selectedProduct'],$temp);
}
else
    if(empty($_SESSION['selectedProduct']))
    $_SESSION['selectedProduct']=array();

if(isset($_SESSION['selectedProduct']))
foreach($_SESSION['selectedProduct'] as $key=>$value)
{
    // and print out the values
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
}

?>

<html>
<head>
<title>secondPage</title>
</head>

<body>
	<div class="top-bar">
	<!-----logo img---->
	
	<div class="menu-bar">
	<ul>
	<!----<li><img src="shoppingcart.jpg"></li> 要再改--->
	</ul>	
	</div>
</div>
<div>
    <h2 style="text-align: center;">Snacks</h2>
    <div class="row">
        <div class="display-inlineBlock" style="margin: 0px 10% 0px 25%">
            <img src="secondPageFood1.jpg">
            <div class="info">
                <form action="secondPage.php" method="post">
                    <input type="hidden" name="value" value="1">
                    <input type="submit" value="Add to cart">
                </form>
                <?php echo "<h3>".$_SESSION['globalProduct'][0][0]."</h3>"?>
                <?php echo "<h5>$".$_SESSION['globalProduct'][0][1]."</h5>"?>
            </div>
        </div>
        <div class="display-inlineBlock">
            <img src="secondPageFood2.jpeg" >
            <div class="info">
                <form action="secondPage.php" method="post">
                    <input type="hidden" name="value" value="2">
                    <input type="submit" value="Add to cart">
                    <a href="thirdPage.php">3 page</a>
                </form>
            </div>
            <div>
                <?php echo "<h3>".$_SESSION['globalProduct'][1][0]."</h3>"?>
                <?php echo "<h5>$".$_SESSION['globalProduct'][1][1]."</h5>"?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="display-inlineBlock"  style="margin: 0px 10% 0px 25%">
            <img src="secondPageFood3.jpg">
            <div class="info">
                <form action="secondPage.php" method="post">
                    <input type="hidden" name="value" value="3">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h3>".$_SESSION['globalProduct'][2][0]."</h3>"?>
                <?php echo "<h5>$".$_SESSION['globalProduct'][2][1]."</h5>"?>
            </div>
        </div>

        <div class="display-inlineBlock">
            <img src="secondPageFood4.jpg">
            <div class="info">
                <form action="secondPage.php" method="post">
                    <input type="hidden" name="value" value="4">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h3>".$_SESSION['globalProduct'][3][0]."</h3>"?>
                <?php echo "<h5>$".$_SESSION['globalProduct'][3][1]."</h5>"?>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="display-inlineBlock"  style="margin: 0px 10% 0px 25%">
            <img src="secondPageFood5.jpg">
            <div class="info">
                <form action="secondPage.php" method="post">
                    <input type="hidden" name="value" value="5">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h3>".$_SESSION['globalProduct'][4][0]."</h3>"?>
                <?php echo "<h5>$".$_SESSION['globalProduct'][4][1]."</h5>"?>
            </div>
        </div>

        <div class="display-inlineBlock">
            <img src="secondPageFood6.jpg">
            <div class="info">
                <form action="secondPage.php" method="post">
                    <input type="hidden" name="value" value="6">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h3>".$_SESSION['globalProduct'][5][0]."</h3>"?>
                <?php echo "<h5>$".$_SESSION['globalProduct'][5][1]."</h5>"?>
            </div>
        </div>

    </div>
</div>
</body>

<script src="jquery.js"></script>
<script>
    // Testing
    //function addCart(value) {
    //
    //    <?php
    //    $isbn='165463';
    //    $name='Webbasdasdaasdasd123';
    //    $quantity='123';
    //    $insert="INSERT into book values(\"".$isbn."\",\"".$name. "\",\"".$quantity. "\")";
    //    $database=new mysqli("localhost","u1","a1","hkbookshop");
    //    $database->close();
    //    ?>
    //}
    //
    // preventing resend the form when f5
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<style>
    .display-inlineBlock{
        display: inline-block;
    }
	.top-bar{
	height: 57px;
        background-color: aqua;
	margin-bottom: 20px;
	border-bottom: 3px solid orange;
    }

	.logo{
	height: 40px;
	margin: 5px 10px;
	}

	.box1	{
	background: #ff9999; 
	color: #fff;
	width: 180px;
	padding: 4px 10px;
	height: 40px;
	margin-bottom: 30px;
	display: flex;
	}
	
	.box1 h2{
	font-size: 24px;
	}

	.container{
	width: 900px;
	margin: 0 auto; 
	}
	
	.box1 {
	position: relative;
  	
	}
	
	
	
	img {
	width: 300px;
	height: 300px;
	}
		
</style>

</html>