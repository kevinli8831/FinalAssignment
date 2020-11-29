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

}
if(isset($_SESSION['selectedProduct'])&& isset($_POST['value']))
{
    array_push($_SESSION['selectedProduct'],$temp);
}
else
    if(empty($_SESSION['selectedProduct']))
        $_SESSION['selectedProduct']=array();

?>

<html>
<head>
    <title>thirdPage</title>
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
        <a href="fifthPage.php" class="cart"><ion-icon name="cart-outline" style="font-size: 25px;align-self: end;" ></ion-icon>
            &nbsp;<span id="cartItems" > Cart <?php echo sizeof($_SESSION['selectedProduct']) ?></php></span></a>
    </div>


</div>

<div class="header">
    <div class="title">
        Daily Consumable
    </div>
</div>

<div>
    <div class="row" >
        <div class="display-inlineBlock products" >
            <img src="thirdPageDaily1.jpg" >
            <div class="info">
                <div>
                    <?php echo "<h2>".$_SESSION['globalProduct'][6][0]."</h2>"?>
                    <?php echo "<h3>$".$_SESSION['globalProduct'][6][1]."</h3>"?>
                </div>
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="7">
                    <input  type="submit" class="button myMOUSE" value="Add to cart">
                </form>
            </div>
        </div>
        <div class="display-inlineBlock products">
            <img src="thirdPageDaily2.jpg" >
            <div class="info">
                <div>
                    <?php echo "<h2>".$_SESSION['globalProduct'][7][0]."</h2>"?>
                    <?php echo "<h3>$".$_SESSION['globalProduct'][7][1]."</h3>"?>
                </div>
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="8">
                    <input type="submit" class="button myMOUSE" value="Add to cart">
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="display-inlineBlock products" >
            <img src="thirdPageDaily3.jpg">
            <div class="info">
                <div>
                    <?php echo "<h2>".$_SESSION['globalProduct'][8][0]."</h2>"?>
                    <?php echo "<h3>$".$_SESSION['globalProduct'][8][1]."</h3>"?>
                </div>
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="9">
                    <input type="submit" class="button myMOUSE" value="Add to cart">
                </form>
            </div>

        </div>

        <div class="display-inlineBlock products">
            <img src="thirdPageDaily4.jpg">
            <div class="info">
                <div>
                    <?php echo "<h2>".$_SESSION['globalProduct'][9][0]."</h2>"?>
                    <?php echo "<h3>$".$_SESSION['globalProduct'][9][1]."</h3>"?>
                </div>
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="10">
                    <input type="submit" class="button myMOUSE" value="Add to cart">
                </form>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="display-inlineBlock products"  >
            <img src="thirdPageDaily5.jpg">
            <div class="info">
                <div>
                    <?php echo "<h2>".$_SESSION['globalProduct'][10][0]."</h2>"?>
                    <?php echo "<h3>$".$_SESSION['globalProduct'][10][1]."</h3>"?>
                </div>
                <form action="thirdPage.php" method="post">
                    <input  type="hidden" name="value" value="11">
                    <input type="submit" class="button myMOUSE" value="Add to cart">
                </form>
            </div>

        </div>

        <div class="display-inlineBlock products">
            <img src="thirdPageDaily6.jpg">
            <div class="info">
                <div>
                    <?php echo "<h2>".$_SESSION['globalProduct'][11][0]."</h2>"?>
                    <?php echo "<h3>$".$_SESSION['globalProduct'][11][1]."</h3>"?>
                </div>
                <form action="thirdPage.php" method="post">
                    <input type="hidden" name="value" value="12">
                    <input type="submit" class="button myMOUSE" value="Add to cart">
                </form>
            </div>

        </div>

    </div>

    <div class="previous">
        <a href="secondPage.php"><i class="fas fa-arrow-circle-left" style="color: black;font-size: 35px"></i></a>
    </div>


    <div class="next">
        <a href="fourthPage.php"><i class="fas fa-arrow-circle-right" style="color: black;font-size: 35px"></i></a>
    </div>


</div>

</body>

<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<script src="jquery.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
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
    .header{
        text-align: center;
        margin: 5px 0px;
    }
    .button{
        border-radius: 10px;
        border-color: #AF7255;
    }
    .title{
        border-radius: 20px;
        color: white;
        text-align: center;
        display: inline-block;
        padding: 0px 5px;
        font-size: 40px;
        background-color: #ffc111;
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
    .myMOUSE {
        cursor: pointer;
    }
    .menu-bar spna{
        padding-left: 5px;
    }

    .menu-bar a{
        padding: 5px;
        color: #ffc111;
        text-decoration: none;
    }

    img {
        width: 300px;
        height: 300px;
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