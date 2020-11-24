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
<title>fourthPage</title>
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
    <h2 style="text-align: center;">Drink</h2>
    <div class="row">
        <div class="display-inlineBlock" style="margin: 0px 10% 0px 25%">
            <img src="FourthPageDrink1.jpg">
            <div class="info">
                <button> Add to Cart</button>
                <?php echo "<h3>".$product[0][0]."</h3>"?>
                <?php echo "<h5>$".$product[0][1]."</h5>"?>
            </div>
        </div>
        <div class="display-inlineBlock">
            <img src="FourthPageDrink2.jpg" >
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <?php echo "<h3>".$product[1][0]."</h3>"?>
                <?php echo "<h5>$".$product[1][1]."</h5>"?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="display-inlineBlock"  style="margin: 0px 10% 0px 25%">
            <img src="FourthPageDrink3.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <h3>Coffee</h3>
                <h5>$27.00</h5>
            </div>
        </div>

        <div class="display-inlineBlock">
            <img src="FourthPageDrink4.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <h3>Tomato Juice</h3>
                <h5>$14.00</h5>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="display-inlineBlock"  style="margin: 0px 10% 0px 25%">
            <img src="FourthPageDrink5.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <h3>Earl Grey Tea</h3>
                <h5>$115.00</h5>
            </div>
        </div>

        <div class="display-inlineBlock">
            <img src="FourthPageDrink6.jpg">
            <div class="info">
                <button> Add to Cart</button>
            </div>
            <div>
                <h3>Soy Milk</h3>
                <h5>$21.00</h5>
            </div>
        </div>

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

    <?php
//        $isbn='165463';
//        $name='Webbasdasdaasdasd123';
//        $quantity='6';
//        $insert="INSERT into book values(\"".$isbn."\",\"".$name. "\",\"".$quantity. "\")";
//        $database=new mysqli("localhost","u1","a1","hkbookshop");
//
//        if ($database->connect_error)
//            die("Could not connect to database:".$database->connect_error);
//
//        if($database->query($insert)===TRUE)
//            print("Record inserted success");
//        else
//            die("Could not execute insetion!".mysqli_error($database));
//
//        $database->close();
        ?>
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

    .box1   {
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