<?php
session_set_cookie_params(0);
session_start();


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
        <img src="beatycare.png">
    </div>
</div>

<div>
    <div class="row" >
        <div class="display-inlineBlock products" >
            <img src="product7.jpg" >
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
            <img src="product8.jpg" >
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
            <img src="product9.jpg">
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
            <img src="product10.jpg">
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
            <img src="product11.jpg">
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
            <img src="product12.jpg">
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
        <a href="secondPage.php"><i class="fas fa-arrow-circle-left changeColor" style="color: black;font-size: 35px"></i></a>
    </div>


    <div class="next">
        <a href="fourthPage.php"><i class="fas fa-arrow-circle-right changeColor" style="color: black;font-size: 35px"></i></a>
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
        width: 105px;
        height: 35px;
        border-radius: 10px;
        border-color: #AF7255;
    }
    .title img{
		width: 250px;
        height: 125px;
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
	.myMOUSE:hover {
	background-color: coral;
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
    .changeColor:hover{
        color: #ffc111 !important;
    }
</style>

</html>