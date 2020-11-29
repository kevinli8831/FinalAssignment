<?php
session_set_cookie_params(0);
session_start();
$product=array
(
    array("Biscuit",25,1),
    array("Corn Soup",30,2),
    array("Fries Three Brothers",100,3),
    array("Calbee Chip",16,4),
    array("Curry Cup Noodle",10,5),
    array("Cheese Curry Cup Noodle",20,6),
    array("Hand Wash",40,7),
    array("Body Wash",50,8),
    array("Shampoo",55,9),
    array("Conditioner",55,10),
    array("Face Wash",50,11),
    array("Paper Mask",50,12),
    array("Green Tea",10,13),
    array("Red Tea",15,14),
    array("Coffee",27,15),
    array("Tomato Juice",14,16),
    array("Earl Grey Tea",115,17),
    array("Soy Milk",21,18),
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

    // Testing shopping cart items array
//if(isset($_SESSION['selectedProduct']))
//foreach($_SESSION['selectedProduct'] as $key=>$value)
//{
//    // and print out the values
//    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
//}

?>

<html>
<head>
<title>ThirdPage</title>
</head>

<body>

    <div class="top-bar">

    <div class="logo">
        <a href="firstPage.php">
            <img src="logo.png">
        </a>

    </div>
    
    <div class="menu-bar">
    <nav>
    <ul>
        <li> <a href="firstPage.php">Home</a></li>
        <li><a href="fifthPage.php"> <ion-icon name="cart-outline" ></ion-icon> Cart
                <span id="cartItems"    ><?php echo sizeof($_SESSION['selectedProduct']) ?></php></span></a></li>
    </ul>
    </nav>
    </div>
    </div>

<div >

    <div class="header">
    <p><b>Daily Consumables</b></p>
    </div>

</div>
<div>
    <div class="row">
        <div class="display-inlineBlock products" >
            <img src="ThirdPageDaily1.jpg">
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="7">
                    <input type="submit" value="Add to cart">
                </form>
                <div>
                    <?php echo "<h2>".$_SESSION['globalProduct'][6][0]."</h2>"?>
                    <?php echo "<h3>$".$_SESSION['globalProduct'][6][1]."</h3>"?>
                </div>
            </div>
        </div>
        <div class="display-inlineBlock products" >
            <img src="ThirdPageDaily2.jpg" >
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="8">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h2>".$_SESSION['globalProduct'][7][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][7][1]."</h3>"?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="display-inlineBlock products" >
            <img src="ThirdPageDaily3.jpg">
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="9">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h2>".$_SESSION['globalProduct'][8][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][8][1]."</h3>"?>
            </div>
        </div>

        <div class="display-inlineBlock products" >
            <img src="ThirdPageDaily4.jpg">
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="10">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h2>".$_SESSION['globalProduct'][9][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][9][1]."</h3>"?>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="display-inlineBlock products" >
            <img src="ThirdPageDaily5.jpg">
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="11">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h2>".$_SESSION['globalProduct'][10][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][10][1]."</h3>"?>
            </div>
        </div>

        <div class="display-inlineBlock products" >
            <img src="ThirdPageDaily6.jpg">
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="12">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h2>".$_SESSION['globalProduct'][11][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][11][1]."</h3>"?>
            </div>
        </div>

    </div>

    <div class="previous">
    <a href="secondPage.php"> <i class="fas fa-arrow-circle-left" style="color: black;font-size: 35px"></i></a>
    </div>

    <div class="next">
    <a href="fourthPage.php"> <i class="fas fa-arrow-circle-right" style="color: black;font-size: 35px"></i></a>
    </div>

</div>

</body>

<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<script src="jquery.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"    ></script>
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
	body{
		background-image: url("background.jpg");
		background-size: auto;
		}

    .display-inlineBlock{
        display: inline-block;
		background-color: #fff;
    }
	.top-bar{
	height: 70px;
	margin-bottom: -35px;
	border-bottom: 3px solid orange;
    }

	.logo img{
		width: 160px;
		height: 70px;
		float: left;
	}
	.menu-bar {
		float: right;
	}
	.menu-bar ico-icon{
		vertical-align: bottom;
		font-size: 20px;
		float: right;
	}

	.header{
		display: flex;
		justify-content: center;
		color: white;
		font-size: 40px;
	}
	
	.header p{
		display: block;
		padding:5px;
		background-color: orange;
	}

	.previous{
		float: left;
        margin-left: 20px;
	}

	.next{
		float: right;
        margin-right: 20px;
	}

	.menu-bar li{
		list-style: none;
		display: inline-block;
		padding-right: 10px;
		padding-left: 10px;
	}
	
	.menu-bar spna{
		padding-left: 5px;
	}

	.menu-bar a{
		padding: 5px;
		background-color: #fff;
		text-decoration: none;
	}

	img {
	width: 300px;
	height: 300px;
        margin-bottom: 10px;
	}

    .products{

        padding: 10px;
        background-color: cornsilk;
        border-radius: 15px;
        border: 5px solid #AF7255;
    }
    .row {
        display: flex;
        justify-content: space-evenly;
        margin-bottom: 30px;
    }
        
</style>

</html>