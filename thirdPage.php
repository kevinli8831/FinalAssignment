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
    array_push($selectedProduct,$temp);

}
if(isset($_SESSION['selectedProduct'])&& isset($_POST['value']))
{
    array_push($_SESSION['selectedProduct'],$temp);
}


foreach($_SESSION['selectedProduct'] as $key=>$value)
{
    // and print out the values
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
}

?>


<!DOCTYPE html>

<html>
<head>
<title>ThirdPage</title>
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
<div >
    <h2 style="text-align: center;">Daily Consumables</h2>

    <div class="row">
        <div class="display-inlineBlock" style="margin: 0px 10% 0px 25%">
            <img src="ThirdPageDaily1.jpg">
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="7">
                    <input type="submit" value="Add to cart">
                    <a href="secondPage.php">2 page</a>
                </form>
                <?php echo "<h3>".$product[0][0]."</h3>"?>
                <?php echo "<h5>$".$product[0][1]."</h5>"?>
            </div>
        </div>
        <div class="display-inlineBlock">
            <img src="ThirdPageDaily2.jpg" >
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="8">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <?php echo "<h3>".$product[1][0]."</h3>"?>
                <?php echo "<h5>$".$product[1][1]."</h5>"?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="display-inlineBlock"  style="margin: 0px 10% 0px 25%">
            <img src="ThirdPageDaily3.jpg">
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="9">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <h3>Shampoo</h3>
                <h5>$55.00</h5>
            </div>
        </div>

        <div class="display-inlineBlock">
            <img src="ThirdPageDaily4.jpg">
            <div class="info">
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="10">
                    <input type="submit" value="Add to cart">
                </form>
            </div>
            <div>
                <h3>Conditioner</h3>
                <h5>$55.00</h5>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="display-inlineBlock"  style="margin: 0px 10% 0px 25%">
            <img src="ThirdPageDaily5.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <h3>Face Wash</h3>
                <h5>$50.00</h5>
            </div>
        </div>

        <div class="display-inlineBlock">
            <img src="ThirdPageDaily6.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <h3>Papaer Mask</h3>
                <h5>$50.00</h5>
            </div>
        </div>

    </div>
</div>
</body>

<script src="jquery.js">
//    testing
//    function addCart(value) {
//        <?php
//        $isbn='165463';
//        $name='Webbasdasdaasdasd123';
//        $quantity='123';
//        $insert="INSERT into book values(\"".$isbn."\",\"".$name. "\",\"".$quantity. "\")";
//        $database=new mysqli("localhost","u1","a1","hkbookshop");
//        $database->close();
//        ?>
//    }

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