<!DOCTYPE html>
<html>
    <head>
    	<title>BlazeIT - Data</title>
        <link rel="stylesheet" type="text/css" href="/Blazeit.css" />
        <?php
                foreach($products as $product) {
                echo"<tr>";
                echo"<td>".$product[PRODUCTNAME]."</td>";
                echo"<td>".$product[DESCRIPTION]."</td>";
                echo"<td>".$product[PRICE]."</td>";
                echo"</tr>";
                }
            ?>
    </head>
    <body>
		<body>
		<nav class="navbar">
		  		<a href="Home.html">
		  			<img class="logo" alt="logo" src="/photos/logo.png">
		  		</a>
		  		<br />
			  	<a class="navbar-brand" href=""Home.html>BLAZEIT</a>
			  		<br />
			  	<a class="navtext" href="Home.html">Bringing players together since 2035...</a>
			<br />
			  	<ul class="navbar-right">
			        <li><a href="Home.html">Home</a></li>
			        <li><a href="About.html">About</a></li>
			       	<li><a href="Products.html">Products</a></li>
			       	<li><a href="News.php">News</a></li>
			       	<li><a href="Data.php">Data</a></li>
			       	<li><a href="Contact.html">Contact</a></li>
			    </ul>
		</nav>
		<?php
            foreach($customer as $customers)
            {
                echo"<tr>";
                echo"<td>".$customer["CUSTID"]. "</td>";
                echo"<td>".$customer["FIRSTNAME"]. "</td>";
                echo"<td>".$customer["LASTNAME"]. "</td>";
                echo"<td>".$customer["ADDRESS"]. "</td>";
                echo"<td>".$customer["PHONE"]. "</td>";
                echo"</tr>";
            }
        ?>
	</body>
</html>