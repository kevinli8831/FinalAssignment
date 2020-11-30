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
<div style = "background-color: black;">
	<img style = "width: 100%;height: 726px;opacity: 60%;" src = "main.jpg">
</div>
<div class ="container">
    <div class = "text-indent text">JP Station, is the latest retail store rise up currently. The product that made by Japan is well-known by the world due to it’s quality and practicality. As a result, more and more consumer among the world are more willing to purchase products that made in Japan. Which the quantity of Japanese goods upsurge in order to satisfy the demand from society.</div>
    <div class = "text-indent text">Especially, as we discovered that many people would like to go to Japan for shopping. And they are targeted at purchasing snacks and daily necessities. Therefore, we decided to open up a retail store for them to buy all these related products therefore they can also buy japan’s products in Hong Kong without going out for a trip. Especially for the situation of Hong Kong, which the pandemic is still not under control. Thus, people are not able to go for a flight. Hence, a temporary shopping experience can ease their desire of going out for a flight.</div>
    <div class = "text-indent text">For the purpose of providing the best service for the customer. We will offer direct interaction with customers and we will treat customer as our vital character. The principal of our operation is “Customers Matters Most”! This is the unchanging principle. It motivates and defines each and every action this company takes and it requires strict adherence to our management philosophy.</div>
    <div class = "text-indent text">We shall acquire a good management for ourselves before providing the service to our customers. The following is the six precepts of our management philosophy:</div>
    <div>
        <ul>
            <li style = "margin-bottom: 11px">We commit ourselves to doing business in a manner that is unselfish, 100% honest, and grounded in a strong sense of morality and purpose.</li>
            <li style = "margin-bottom: 11px">In every age, we create shop floors that evoke the anticipation and excitement of finding astonishingly cheap goods.</li>
            <li style = "margin-bottom: 11px">Boldly granting authority to those at the center of things, we are always ready to move people around, to make sure they are in the best possible position.</li>
            <li style = "margin-bottom: 11px">We are committed to creative destruction and the ability to adapt; we reject pre-established harmony and the hesitancy to do anything that might rock the boat.</li>
            <li style = "margin-bottom: 11px">We are unhesitant in the face of daunting challenges, and unafraid to beat a rapid retreat when a cold, hard look at reality tells us this is the best course.</li>
            <li style = "margin-bottom: 11px">Undistracted by easy profits, we hone to perfection the strengths that form our core business.</li>
        </ul>
    </div>
    <div class = "text-indent text">We hope that we could provide the best shopping experience for all customers. Please do enjoy your shopping and able to purchase your goods.</div>
    <div class="next">
        <a href="secondPage.php"> <span>Next Page<ion-icon name="arrow-forward-outline"></ion-icon></span></a>
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
		margin:0px 150px;
	}
</style>
</html>