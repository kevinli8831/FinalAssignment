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

	<div class="logo">
	<img src="logo.png">
	</div>
	
	<div class="menu-bar">
	<nav>
	<ul>
		<li> <a href="firstPage.php">Home</a></li>
		<li><a href="fifthPage.php"> <ion-icon name="cart-outline"></ion-icon> Cart <span>0</span></a></li>
	</ul>
	</nav>
	</div>
	</div>

<div >

	<div class="header">
    <p><b>Snacks</b></p>
	</div>

</div>
<div>
    <h2 style="text-align: center;">Snacks</h2>
    <div class="row">
        <div class="display-inlineBlock" style="margin: 0px 10% 30px 25%">
            <img src="secondPageFood1.jpg">
            <div class="info">
                <button> Add to Cart</button>
                <?php echo "<h2>".$_SESSION['globalProduct'][0][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][0][1]."</h3>"?>
                <form action="secondPage.php" method="post">
                    <input type="hidden" name="value" value="1">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
        </div>
        <div class="display-inlineBlock">
            <img src="secondPageFood2.jpeg" >
            <div class="info">
                <form action="secondPage.php" method="post">
                    <input type="hidden" name="value" value="2">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h2>".$product[1][0]."</h2>"?>
                <?php echo "<h3>$".$product[1][1]."</h3>"?>
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
                <?php echo "<h2>".$_SESSION['globalProduct'][2][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][2][1]."</h3>"?>
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
                <?php echo "<h2>".$_SESSION['globalProduct'][3][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][3][1]."</h3>"?>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="display-inlineBlock"  style="margin: 0px 10% 30px 25%">
            <img src="secondPageFood5.jpg">
            <div class="info">
                <form action="secondPage.php" method="post">
                    <input type="hidden" name="value" value="5">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h2>".$_SESSION['globalProduct'][4][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][4][1]."</h3>"?>
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
                <?php echo "<h2>".$_SESSION['globalProduct'][5][0]."</h2>"?>
                <?php echo "<h3>$".$_SESSION['globalProduct'][5][1]."</h3>"?>
            </div>
        </div>

    </div>

	<div class="previous">
	<a href="firstPage.php"> <span><ion-icon name="arrow-back-outline"></ion-icon>Previous Page</span></a>
	</div>

	<div class="next">
	<a href="thirdPage.php"> <span>Next Page<ion-icon name="arrow-forward-outline"></ion-icon></span></a>
	</div>

</div>
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
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
	body{
		background-image: url("background.jpg");
		background-repeat: no-repeat;
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
	}
	
	.previous a{
		padding: 5px;
		background-color: #fff;
		text-decoration: none;
	}

	.next{
		float: right;
	}
	.next a{
		padding: 5px;
		background-color: #fff;
		text-decoration: none;
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
	}
		
</style>

</html>