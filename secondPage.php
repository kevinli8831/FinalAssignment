<?php
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
$selectedProduct=array(1,5);
$_SESSION['globalProduct']=$product;
$_SESSION['selectedProduct']=$selectedProduct;


?>


<!DOCTYPE html>
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
	
	<section class="food">
	<div class="container">
		<div class="box1">
		<h2>Snacks</h2>
		</div>	
		<div class="product-top">

		<table>
		<tr>	
			<td> <img src="food1.jpg" ></br>
			
			<img src="secondPageFood1.jpg" alt="">
			<div class="info">

				<button> Add to Cart</button>
				   <?php echo "<h3>".$product[0][0]."</h3>"?>

                <?php
                echo "<h5>$".$product[0][1]."</h5>"
                ?>
			</td>
		</div>
		<td></td><td></td><td></td><td></td><td></td><td></td>

		<div class="product-top">

			<td><img src="food2.jpeg"></br>
				<button> Add to Cart</button></br>
				<h3>Corn Soup</h3></br>
				<h3>$36.00</h3>
			</td>
		</tr>

			<img src="secondPageFood2.jpeg" alt="">
			<div class="info">
				<button> Add to Cart</button>
			</div>
			<div>
				<h3>Bourbon Cookie</h3>
				<h5>$30.00</h5>
			</div>

		
		</div>
		
		<div class="product-top">

		<table>
		<tr>	
			<td> <img src="food3.jpg" ></br>
			

			<img src="secondPageFood3.jpg" alt="">
			<div class="info">

				<button> Add to Cart</button>
				<h3>Fries 3 brothers</h3>
				<h3>$100.00</h3>
			</td>
		</div>
		<td></td><td></td><td></td><td></td><td></td><td></td>
		<div class="product-top">

			<td><img src="food4.jpg"></br>
				<button> Add to Cart</button></br>
				<h3>Calbee Potato Chip</h3>
				<h3>$36.00</h3>
			</td>
		</tr>

			<img src="secondPageFood4.jpg" alt="">
			<div class="info">
				<button> Add to Cart</button>
			</div>
			<div>
				<h3>Bourbon Cookie</h3>
				<h5>$30.00</h5>
			</div>

		
		</div>

		<div class="product-top">

		<table>
		<tr>	
			<td> <img src="food5.jpg" ></br>
			
			<img src="secondPageFood5.jpg" alt="">
			<div class="info">

				<button> Add to Cart</button>
				<h3>Curry Cup Noodle</h3>
				<h3>$30.00</h3>
			</td>
		</div>
		<td></td><td></td><td></td><td></td><td></td><td></td>
		<div class="product-top">

			<td><img src="food6.jpg"></br>
				<button> Add to Cart</button></br>
				<h3>Cheese Curry Cup Noodle</h3>
				<h3>$36.00</h3>
			</td>
		</tr>
		</table>

			<img src="secondPageFood6.jpg" alt="">
			<div class="info">
				<button> Add to Cart</button>
			</div>
			<div>
				<h3>Bourbon Cookie</h3>
				<h5>$30.00</h5>
			</div>
		

		</div>
	</div>
	</section>
secondPage !!!!!!!@#

</body>
<script src="jquery.js">
    var xmlhttp;
    function AJAXData()
    {
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = HandleData;
        xmlhttp.open("GET","selectedCart.php", true);
        xmlhttp.send();
    }

    function HandleData() {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {

        }
    }


    function addCart() {

    console.log('hello');

    <?php
        $isbn='165463';
        $name='Webbasdasdaasdasd123';
        $quantity='6';
        $insert="INSERT into book values(\"".$isbn."\",\"".$name. "\",\"".$quantity. "\")";
        $database=new mysqli("localhost","u1","a1","hkbookshop");

        if ($database->connect_error)
            die("Could not connect to database:".$database->connect_error);

        if($database->query($insert)===TRUE)
            print("Record inserted success");
        else
            die("Could not execute insetion!".mysqli_error($database));

        $database->close();
        ?>
    }
</script>
<style>
	.top-bar{
	height: 57px;
	top:0;
	position: #fff;
	margin-bottom" 20px;
	border-bottom: 3px solid orange;
	z-index: 2;}

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