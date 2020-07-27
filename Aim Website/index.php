
<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "aimdb");
if($mysqli === false){
    die("Couldn't connect!" . $mysqli->connect_error);
} else {
    echo "Connection successful!";
}


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['prod1']))
    {
        $sql = "INSERT INTO cartProduct (cartID, prodID) VALUES (1, 1)";
    }
    else if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['prod2']))
    {
        $sql = "INSERT INTO cartProduct (cartID, prodID) VALUES (1, 2)";
    }
    else if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['prod3']))
    {
        $sql = "INSERT INTO cartProduct (cartID, prodID) VALUES (1, 3)";
    }
?>




<!DOCTYPE html>

<!-- Christiaan Bouwer  -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mainCSS.css">


<head>
    <title>Home</title>
    
</head>

<header>
    <div class="division">
        <div class="heading">
            <img id="logo" alt="AIMlogo_image" src="images/AIM_Logo.png" />
        </div>

        <nav>
            <ul>
                <li class="selected"><a href="Cart.php">Shopping Cart</a></li>
            </ul>
        </nav>
    </div>
</header>

<body>

<section id="subscribe">
    <div class="division">        
        <form name="login" action="call validate()"  onsubmit="return validate();" method="post">
            <input id="pass" type="password" name="pass" placeholder="Password">
            <input name="emailAdd" placeholder="Email">
            <button type="submit" value="submit" class="Btn" >Login</button>
        </form>
    </div>
</section>

<section id="backgroundImg">
    <div class="division">
        <h1 id="main">What we AIM for</h1>
    
        <p id="homeTxt">
            African Information Management strives to provide our clients with the leading business process modelling and analysis software on the market. Our consultants will look into your business fo find the right software for your needs then implement and train your staff with the aim of improving your business processes.
        </p>
    </div>
</section>

<section class="products">
    
    <div class="division">
    <article class="third">
        <form action="index.php" method="post">
        <img id="productImg" alt="Product_1_image" src="images/prod1_flowcharter.png" />
        <br>
        <p id="productTxt">FlowCharter is advanced analysis and business process modelling  tool.</p><p>Price: R700</p>
        <input type="submit" name='prod1' value="Add to Cart" class="Btn">
        </form>
    </article>
    
    <article class="third">
        <form method="post" action="index.php"> 
        <img id="productImg" alt="Product_2_image" src="images/prod2_process.png" />
        <br>
        <p id="productTxt">Process is a process simulation and modelling tool used to map functionality.</p><p>Price: R1800</p>
        <input type="submit" name='prod2' value="Add to Cart" class="Btn">
        </form>
    </article>
    
     
    <article class="third">
        <form method="post" action="index.php"> 
        <img id="productImg" alt="Product_3_image" src="images/prod3_process6Sigma.png" />
        <br>
        <p id="productTxt">Process for Six Sigma most sophisticated simulation tool that assists with Six Sigma.</p><p>Price: R2300</p>
        <input type="submit" name='prod3' value="Add to Cart" class="Btn" />
        </form>
    </article>
    </div>

</section>

<section class="about">
    <div class="division">
        <h2>What AIM does</h2>
        <table>
            <tr>
                <td>
                    <img style="display:block;" width="100%" height="100%" alt="Product_3_image" src="images/functImg.png" />
                </td>
                <td>
                    <p id="about">AIM is a consulting business based in Cape Town, South Africa. Opened in 2013 in partnership with iGrafx as the South African representative.<br>We focus on SAP ERP consulting & the sales and implementation of Business Process Architecture software.</p>
                </td>
            </tr>
        </table>
    </div>
</section>

<section class="contact">
    <div class="division">
        <h2>Contact AIM</h2>
        <ul>
            <li>12 Dorp Street</li>
            <li>Cape Town</li>
            <li>info@aim.co.za</li>
            <li>021 876 3327</li>
        </ul>
    </div>
</section>
   
</body>

    
<footer>
    AIM © - Created by Christiaan Bouwer
</footer>






