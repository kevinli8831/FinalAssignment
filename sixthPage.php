<?php
//session_set_cookie_params(0);
//session_start();
//
//$servername = "localhost";
//$username = "u1";
//$password = "a1";
//$dbname = "jp";
//$name="";
//$price=0;
//$id=0;
//
//$connect = new mysqli($servername, $username, $password);
//
//
//$sql = "CREATE DATABASE jp";
//// 本身佢無DB 就會CREATE
//if ($connect->query($sql) === TRUE) {
//    echo "Created DATABASE jp";
//    $sql = "CREATE TABLE product (
//            name VARCHAR(30),
//            price INT(30),
//            id INT(30)
//            )";
//    $connectDB = new mysqli($servername, $username, $password,$dbname);
//
//    if ($connectDB->query($sql) === TRUE) {
//        echo "Table product created successfully";
//
//        if(isset($_POST['pay']))
//            $pay=$_POST['pay'];
//
//        if(isset($pay))
//        {
//            if(isset($_SESSION['globalProduct'])&&$_SESSION['selectedProduct'])
//                for($i=0;$i<sizeof($_SESSION['globalProduct']);$i++)
//                {
//                    for($a=0;$a<sizeof($_SESSION['selectedProduct']);$a++)
//                    {
//
//                        if ($_SESSION['selectedProduct'][$a]==$_SESSION['globalProduct'][$i][2])
//                        {
//                            $name=$_SESSION['globalProduct'][$i][0];
//                            $price=$_SESSION['globalProduct'][$i][1];
//                            $id=$_SESSION['globalProduct'][$i][2];
//                            $sql = "INSERT INTO product (name, price, id) VALUES ('$name', '$price', '$id')";
//
//                            if ($connectDB->query($sql) === TRUE) {
//                                echo "新记录插入成功";
//                            } else {
//                                echo "Error: " . $sql . "<br>" . $connectDB->error;
//                            }
//                        }
//                    }
//                }
//            else
//                echo "globalProduct and selectedProduct not exists.";
//
//        }
//
//
//
//
//
//
//
//
//
//    } else {
//        echo "Table product created failed: " . $connect->error;
//    }
//}
//// 如果佢有DB 就DELETED 再CREATED
//else {
//    $sql = 'DROP DATABASE jp';
//    if ($connect->query($sql) === TRUE) {
//        echo "deleted DATABASE jp"."<br>";
//        $sql = "CREATE DATABASE jp";
//
//
//        if ($connect->query($sql) === TRUE){
//            echo "Created DATABASE jp";
//            $sql = "CREATE TABLE product (
//                    name VARCHAR(30),
//                    price INT(30),
//                    id INT(30)
//                    )";
//            $connectDB = new mysqli($servername, $username, $password,$dbname);
//
//            if ($connectDB->query($sql) === TRUE) {
//                echo "Table product created successfully";
//                if(isset($_POST['pay']))
//                    $pay=$_POST['pay'];
//
//                if(isset($pay))
//                {
//                    if(isset($_SESSION['globalProduct'])&&$_SESSION['selectedProduct'])
//                        for($i=0;$i<sizeof($_SESSION['globalProduct']);$i++)
//                        {
//                            for($a=0;$a<sizeof($_SESSION['selectedProduct']);$a++)
//                            {
//
//                                if ($_SESSION['selectedProduct'][$a]==$_SESSION['globalProduct'][$i][2])
//                                {
//                                    $name=$_SESSION['globalProduct'][$i][0];
//                                    $price=$_SESSION['globalProduct'][$i][1];
//                                    $id=$_SESSION['globalProduct'][$i][2];
//                                    $sql = "INSERT INTO product (name, price, id) VALUES ('$name', '$price', '$id')";
//
//                                    if ($connectDB->query($sql) === TRUE) {
//                                        echo "新记录插入成功";
//                                    } else {
//                                        echo "Error: " . $sql . "<br>" . $connectDB->error;
//                                    }
//                                }
//                            }
//                        }
//                    else
//                        echo "globalProduct and selectedProduct not exists.";
//
//                }
//
//            } else {
//                echo "Table product created failed: " . $connect->error;
//            }
//        }
//
//    } else {
//        echo "Error" . $connect->error;
//    }
//}

//    if(isset($_POST['pay']))
//        $pay=$_POST['pay'];
//
//    if(isset($pay))
//    {
//        if(isset($_SESSION['globalProduct'])&&$_SESSION['selectedProduct'])
//            for($i=0;$i<sizeof($_SESSION['globalProduct']);$i++)
//            {
//                for($a=0;$a<sizeof($_SESSION['selectedProduct']);$a++)
//                {
//
//                    if ($_SESSION['selectedProduct'][$a]==$_SESSION['globalProduct'][$i][2])
//                    {
//                        $name=$_SESSION['globalProduct'][$i][0];
//                        $price=$_SESSION['globalProduct'][$i][1];
//                        $id=$_SESSION['globalProduct'][$i][2];
//                        $sql = "INSERT INTO product (name, price, id) VALUES ('$name', '$price', '$id')";
//
//                        if ($connect->query($sql) === TRUE) {
//                            echo "新记录插入成功";
//                        } else {
//                            echo "Error: " . $sql . "<br>" . $connect->error;
//                        }
//                    }
//                }
//            }
//        else
//            echo "globalProduct and selectedProduct not exists.";
//
//}

//$connect->close();

?>

<html>
<head>
    <title>sixthPage</title>
</head>
<body>

<div class="top-bar">
    <div class="logo">
        <a href="firstPage.php">
            <img src="logo2.png">
        </a>
    </div>
    </div>

<div style='text-align:center; line-height:20px'>
<br/>
<img src="thankyou.gif"><br/>
<br/>
<form action="secondPage.php" method="post">
            <input type="submit" value="continue shopping" style="width:180px;height:50px;font-size:20px;">
        </form><br/>
<img src="continueshopping.gif">
</div>





</body>


<script>

</script>


<style>
    body{
        background-image: url("thankpage.jpg");
        background-size: auto;
        margin: 0px;
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
	


</style>
</html>
