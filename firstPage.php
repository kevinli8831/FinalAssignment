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

if(isset($_POST['value']))//check the value
{
    $temp=$_POST['value'];

}
if(isset($_SESSION['selectedProduct'])&& isset($_POST['value']))//check the selectedProduct and show the value
{
    array_push($_SESSION['selectedProduct'],$temp);
}
else
    if(empty($_SESSION['selectedProduct']))//show 0
        $_SESSION['selectedProduct']=array();

?>



<!DOCTYPE html>
<html>
<head>
    <title>firstPage</title>
</head>













<body>
<div class="top-bar">
    <div class="logo">
        <a href="firstPage.php">
            <img src="logo2.png">
        </a>
    </div>
    <div class="menu">
        <a href="fifthPage.php" class="cart"><ion-icon name="cart-outline" style="font-size: 25px;align-self: end;" ></ion-icon>
            &nbsp;<span id="cartItems" > Cart <?php if(isset($_SESSION['selectedProduct']))
                    echo sizeof($_SESSION['selectedProduct']) ;
                else echo '0';
                ?></php></span></a>
    </div>
</div>
<div>
    <img style = "width: 100%;height: 726px;filter: brightness(60%);" src = "main.jpg">
</div>
<div class ="container">

    <H1 style="text-align: center">
        About Us
    </H1>
    <div><table style= "width:90%">
            <tr>
                <td style= "text-align: center;min-width: 792px"><img style="width: 520px" src = "main1.jpeg"></td>
                <td>
                    <div class = "text-indent text" style="width: 520px;text-align: justify;">JP Station, is the latest retail store rise up currently. The product that made by Japan is well-known by the world due to it’s quality and practicality.</div>
                </td>
            </tr>

            <tr>
                <td style="text-align: center"><div class = "text-indent text" style="width: 520px;display: inline-block;text-align: justify">We discovered that many people would like to go to Japan for shopping. And they are targeted at purchasing snacks and daily necessities. Therefore, we decided to open up a retail store for them to buy all these related products therefore they can also buy japan’s products in Hong Kong without going out for a trip.</div></td>
                <td style= "text-align: center"><img style="width: 520px" src = "main2.jpg"></td>
            </tr>

            <tr>
                <td style= "text-align: center"><img style="width: 520px" src = "main3.jpg"></td>
                <td><div class = "text-indent text" style="width: 520px;text-align: justify;"">For the purpose of providing the best service for the customer. We will offer direct interaction with customers and we will treat customer as our vital character. The principal of our operation is “Customers Matters Most”! This is the unchanging principle.</div></td>
            </tr>
        </table></div>

    <div style="margin-top: 50px;" class = "text-indent text">We hope that we could provide the best shopping experience for all customers. Please do enjoy your shopping and able to purchase your goods.</div>
    <div style ="text-align: center;margin-top: 120px;">
        <a style="text-decoration: none;" href="secondPage.php">
            <div class="leftbutton">
                Start Shopping
            </div>
            <div class="rightbutton">
                Go!!!
                <img src="bg_click01.jpg" style="position: absolute;right: -101px;height: 70px;}">
            </div>

        </a>
    </div>
</div>
</div>

</body>

<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

<style>
    body{
        background-color: #EEECC6;
        margin: 0px;
        color: #874A44;
        font-size: 25px;
        font-weight: bold;
        text-align: justify;
    }

    .text-indent{
        text-indent: 60px;
    }

    .text{
        line-height: 35px;
        margin-bottom: 20px;

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

    .cart{
        color: #ffc111;
        display: inline-flex;
        align-items: baseline;
        font-size: 25px;
        text-decoration: none;
    }

    .container{
        margin:9px 150px 90px;
    }

    .leftbutton{
        display: inline-block;
        background-color: #111111;
        color: white;
        width: 670px;
        height: 70px;
        text-align: center;
        line-height: 63px;
        font-size: 40px;
    }

    .rightbutton{
        display: inline-block;
        background-color: #FFC112;
        color: #111111;
        width: 270px;
        height: 70px;
        text-align: center;
        line-height: 63px;
        position: relative;
        font-size: 40px;
        margin-left: -8px;
    }
</style>
</html>