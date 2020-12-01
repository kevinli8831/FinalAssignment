<html><head><title>sixthPage</title></head><body>

<div class="top-bar">
    <div class="logo">
        <a href="firstPage.php">
            <img src="logo2.png">
        </a>


    </div>
    <div class="menu">
        <a href="firstPage.php" style="color: #ffc111;font-size: 25px;text-decoration: none">Home</a>
        <a href="fifthPage.php" class="cart"><ion-icon name="cart-outline" style="font-size: 25px;align-self: end;" role="img" class="md hydrated" aria-label="cart outline"></ion-icon>
            &nbsp;<span id="cartItems"> Cart 3</span></a>
    </div>


</div>


<br>
<b>Warning</b>:  mysqli::__construct(): (HY000/2002): 無法連線，因為目標電腦拒絕連線。
 in <b>C:\xampp\htdocs\WebFinalAssignment\sixthPage.php</b> on line <b>18</b><br>
<br>
<b>Warning</b>:  mysqli::query(): Couldn't fetch mysqli in <b>C:\xampp\htdocs\WebFinalAssignment\sixthPage.php</b> on line <b>23</b><br>
<br>
<b>Warning</b>:  mysqli::query(): Couldn't fetch mysqli in <b>C:\xampp\htdocs\WebFinalAssignment\sixthPage.php</b> on line <b>81</b><br>
<br>
<b>Warning</b>:  main(): Couldn't fetch mysqli in <b>C:\xampp\htdocs\WebFinalAssignment\sixthPage.php</b> on line <b>134</b><br>
Error<br>
<b>Warning</b>:  mysqli::close(): Couldn't fetch mysqli in <b>C:\xampp\htdocs\WebFinalAssignment\sixthPage.php</b> on line <b>169</b><br>



    

<div style="text-align:center; line-height:600px">
<b><font size="7" ;="" color="#0000FF">
Thank You</font></b></div>

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
		width: 200px;
        height: 100px;
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
</style>

</body></html>