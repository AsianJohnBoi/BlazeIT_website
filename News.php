<!DOCTYPE html>
<html>
    <head>
    	<title>BlazeIT - News</title>
        <link rel="stylesheet" type="text/css" href="/Blazeit.css" />
    </head>
    <body>
		<nav class="navbar">
		  		<a href="Home.html">
		  			<img class="logo" alt="logo" src="/photos/logo.png">
		  		</a>
		  		<br />
			  	<a class="navbar-brand" href="Home.html">BLAZEIT</a>
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
		<div class="container">
			<div id="directory">
				<a href="Home.html" class="color-link">Home</a>
				/ News
			</div>
			<div>
				<h1>News</h1>
				<hr>
				<p>
					<strong>Our News are up to date...</strong>
				</p>
	        	<table class="table">
	            <tr>
	            	<th>Date</th>
	            	<th>Description</th>
	            </tr>
			    <div id="phptable">
				    <?php
		    			$datas = array (
		    				array("Date" => "16 July 2036", "Description" => "Football League Live 1 announced. Release date 5/10/2036"),
		    				array("Date" => "14 May 2036", "Description" => "Go Fast Racing Live 1 announced. Release date 12/8/2036"),
		    				array("Date" => "21 January 2036", "Description" => "Volleyball Live 2036 released"),
		    				array("Date" => "23 December 2035", "Description" => "Volleyball Live 2036 demo relased on Xbox Three, PS6"),
		    				array("Date" => "21 December 2035", "Description" => "Volleyball Live 2036 demo released on Xbox Two, PS5, PC, and WiiTendo"),	    		
							array("Date" => "21 October 2035", "Description" => "Volleyball Live 2036 announced"),
							array("Date" => "10 April 2035", "Description" => "BlazeIT was founded")
						);
		    	
		    			foreach ($datas as $data)
		    			{
		    				echo "<tr>";
		    				echo "<td>".$data["Date"]."</td>";
		    				echo "<td>".$data["Description"]."</td>";
		    				echo "</tr>";
		    			}
		   			?>  
		   		</div>
	   		</div>
		</div>
    </body>
</html>