<?php
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
	
	<div class="logo">
	<img src="logo.png">
	</div>
	
	<div class="menu-bar">
	
	<a href="fifth.php"> <img src="shoppingcart.jpg"></a>
		
	</div>
	</div>
	
<div >

	<div class="header">
    <p><b>Snacks</b></p>
	</div>
	
    <div class="row">
        <div class="display-inlineBlock" style="margin: 0px 10% 0px 25%; margin-bottom: 30px;">
            <img src="secondPageFood1.jpg">
            <div class="info">
                <button> Add to Cart</button>
                <?php echo "<h2>".$product[0][0]."</h2>"?>
                <?php echo "<h3>$".$product[0][1]."</h3>"?>
            </div>
        </div>
        <div class="display-inlineBlock">
            <img src="secondPageFood2.jpeg" >
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <?php echo "<h2>".$product[1][0]."</h2>"?>
                <?php echo "<h3>$".$product[1][1]."</h3>"?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="display-inlineBlock"  style="margin: 0px 10% 0px 25%; margin-bottom: 30px;">
            <img src="secondPageFood3.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <?php echo "<h2>".$product[2][0]."</h2>"?>
                <?php echo "<h3>$".$product[2][1]."</h3>"?>
            </div>
        </div>

        <div class="display-inlineBlock">
            <img src="secondPageFood4.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <?php echo "<h2>".$product[3][0]."</h2>"?>
                <?php echo "<h3>$".$product[3][1]."</h3>"?>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="display-inlineBlock"  style="margin: 0px 10% 0px 25%; margin-bottom: 30px;">
            <img src="secondPageFood5.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <?php echo "<h2>".$product[4][0]."</h2>"?>
                <?php echo "<h3>$".$product[4][1]."</h3>"?>
            </div>
        </div>

        <div class="display-inlineBlock">
            <img src="secondPageFood6.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <?php echo "<h2>".$product[5][0]."</h2>"?>
                <?php echo "<h3>$".$product[5][1]."</h3>"?>
            </div>
        </div>

    </div>
	
	<div class="previous"> 
	<a href="firstPage.php"> <img src="arrowleft.jpg"></a>
	</div>
	
	<div class="next"> 
	<a href="thirdPage.php"> <img src="arrowright.jpg"></a>
	</div>
	
</div>
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

    //<?php
//        $isbn='165463';
  //      $name='Webbasdasdaasdasd123';
    //    $quantity='6';
 //      $insert="INSERT into book values(\"".$isbn."\",\"".$name. "\",\"".$quantity. "\")";
  //      $database=new mysqli("localhost","u1","a1","hkbookshop");

    //   if ($database->connect_error)
     //       die("Could not connect to database:".$database->connect_error);

  //     if($database->query($insert)===TRUE)
//            print("Record inserted success");
    //    else
      //      die("Could not execute insetion!".mysqli_error($database));

       //$database->close();
    //    ?>
    }
</script>

<style>
	body{
		background-image: url("background.jpg");
		background-repeat: no-repect;
		background-size: auto;
		}
		
    .display-inlineBlock{
        display: inline-block;
		background-color: #fff;
    }
	.top-bar{
	height: 70px;
        background-color: aqua;
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
	.menu-bar img{
		width: 70px;
		height: 70px;
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
	
	.previous img{
		width: 50px;
		height: 50px;
	}
	
	.next{
		float: right;
	}
	.next img{
		width: 50px;
		height: 50px;
	}
	
	img {
	width: 300px;
	height: 300px;
	}
		
</style>

</html>