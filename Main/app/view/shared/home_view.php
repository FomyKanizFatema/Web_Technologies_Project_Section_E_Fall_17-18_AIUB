<?php 

//include(dirname(__DIR__).'/../Controller/shared/dept_course_fetcher.php');


?>


<html>
	<head>
		<title>Tienda De Floris</title>
	</head>
	<body>
		
		
		<header>
			<table width="100%" align="center" border="0">
			
				<tr id="row1" >
					<td  width="100%" height="40px" align="right">
                         					
						<a href="home.php" id="home"><img src="home2.png" width="45px" height="45px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="app/controller/shared/log.php"id="log"><img src="loginn.png" width="45px" height="45px"/></a> &nbsp;&nbsp; &nbsp;&nbsp;
						<a href="app/controller/shared/contact.php" id="contact"><img src="contactus.png"  height="43px" /></a> &nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</table>
			
			<table border="0" width="100%">
				
				<tr>
					<td width="25%" align="center"><img src="logo.jpg" height="150px" width="120"</td>
					<td width="50%" align="center">
						<form>
							<input type="text" height="31" placeholder=" Search By Book/Author/Course" size="35" id="searchBox"/>
							<a href="../../../App/Controller/Home/search_controller.php"><img src="searchIcon.png" id="searchIcon"/></a>
							
						</form>
					</td>
					<td>
						<a href="../../../App/Controller/Home/wishlist_controller.php" id="wishlist"><img src="wishlist.png"width="30px" height="30px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="../../../App/Controller/Home/cart_controller.php" id="cart"><img src="cart.png" width="30px" height="30px"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="../../../App/Controller/Home/log_controller.php" id="log"><img src="loginn.png" width="75px" height="75px"/></a>
					</td>
				</tr>
				
			</table>
			
			<table width=70% align="center">
				<tr id="row2" height="30px" width="100%">
				
							<td>
								<table width="100%"><tr/>
									<?php include(dirname(__DIR__).'/../controller/shared/dept_course_fetcher.php');?>
								</tr></table>
							
								
							</td>									
							
				</tr>
			</table>
		</header>
	
		<!--Body-->
		
		<br/>		
		<table align="center" width="100%">
			<tr>
				<td>
				
				<?php include(dirname(__DIR__).'/../Controller/shared/Hbooks.php');?>
				
				</td>
				
			</tr>
			
		</table>
			
	</body>
	
	<script type="text/javascript">
	
	
	//Header JS
	
	document.getElementById('searchBox').style.height="36px";
			document.getElementById('searchIcon').style.height="41px";
			document.getElementById('searchIcon').style.width="45px";
			document.getElementById('searchBox').style.fontSize="17px";
			document.getElementById("searchIcon").style.marginBottom = "-16px"
			document.getElementById("row1").style.backgroundColor = "4889F3";
			document.getElementById("row2").style.backgroundColor = "4889F3";
			document.getElementById("searchButton").style.backgroundColor = "ffffff";
			document.getElementById("wishlist").style.backgroundColor = "ffffff";
			document.getElementById("cart").style.backgroundColor = "ffffff";
			document.getElementById("log").style.marginTop = "30px";
			
			document.getElementById("log").style.textDecorationColor = "red";
			
			/*document.getElementById("home").style.backgroundColor = "ffffff";
			document.getElementById("home").style.height = "30px";
			document.getElementById("home").style.width = "30px";
			document.getElementById("log").style.backgroundColor = "ffffff";
			document.getElementById("contact").style.backgroundColor = "ffffff";*/
			
			
			var wishlistButton = document.getElementById("wishlist");
			wishlistButton.innerHTML = '<img src="../Images/wishlist.png" / width="31px">';
			
			var cartButton = document.getElementById("cart");
			cartButton.innerHTML = '<img src="../Images/cart1.png" / width="31px">';
			
			var userButton = document.getElementById("user");
			userButton.innerHTML = '<img src="../Images/user.png" / width="51px">';
			
			document.getElementById('searchBox').style.height="35px";
			document.getElementById('searchBox').style.fontSize="17px";
	
	//Header JS Ends Here
			
			document.getElementById("wishlist1").style.backgroundColor = "ffffff";
			document.getElementById("cart1").style.backgroundColor = "ffffff";
			
			var wishlistButton1 = document.getElementById("wishlist1");
			wishlistButton1.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton1 = document.getElementById("cart1");
			cartButton1.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			document.getElementById("wishlist2").style.backgroundColor = "ffffff";
			document.getElementById("cart2").style.backgroundColor = "ffffff";
			
			var wishlistButton2 = document.getElementById("wishlist2");
			wishlistButton2.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton2 = document.getElementById("cart2");
			cartButton2.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			document.getElementById("wishlist3").style.backgroundColor = "ffffff";
			document.getElementById("cart3").style.backgroundColor = "ffffff";
			
			var wishlistButton3 = document.getElementById("wishlist3");
			wishlistButton3.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton3 = document.getElementById("cart3");
			cartButton3.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			document.getElementById("wishlist4").style.backgroundColor = "ffffff";
			document.getElementById("cart4").style.backgroundColor = "ffffff";
			
			var wishlistButton4 = document.getElementById("wishlist4");
			wishlistButton4.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton4 = document.getElementById("cart4");
			cartButton4.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			document.getElementById("wishlist5").style.backgroundColor = "ffffff";
			document.getElementById("cart5").style.backgroundColor = "ffffff";
			
			var wishlistButton5 = document.getElementById("wishlist5");
			wishlistButton5.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton5 = document.getElementById("cart5");
			cartButton5.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			document.getElementById("wishlist6").style.backgroundColor = "ffffff";
			document.getElementById("cart6").style.backgroundColor = "ffffff";
			
			var wishlistButton6 = document.getElementById("wishlist6");
			wishlistButton6.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton6 = document.getElementById("cart6");
			cartButton6.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			document.getElementById("wishlist7").style.backgroundColor = "ffffff";
			document.getElementById("cart7").style.backgroundColor = "ffffff";
			
			var wishlistButton7 = document.getElementById("wishlist7");
			wishlistButton7.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton7 = document.getElementById("cart7");
			cartButton7.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
			document.getElementById("wishlist8").style.backgroundColor = "ffffff";
			document.getElementById("cart8").style.backgroundColor = "ffffff";
			
			var wishlistButton8 = document.getElementById("wishlist8");
			wishlistButton8.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton8 = document.getElementById("cart8");
			cartButton8.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
			document.getElementById("wishlist9").style.backgroundColor = "ffffff";
			document.getElementById("cart9").style.backgroundColor = "ffffff";
			
			var wishlistButton9 = document.getElementById("wishlist9");
			wishlistButton9.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton9 = document.getElementById("cart9");
			cartButton9.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
			document.getElementById("wishlist10").style.backgroundColor = "ffffff";
			document.getElementById("cart10").style.backgroundColor = "ffffff";
			
			var wishlistButton10 = document.getElementById("wishlist10");
			wishlistButton10.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton10 = document.getElementById("cart10");
			cartButton10.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
			document.getElementById("wishlist11").style.backgroundColor = "ffffff";
			document.getElementById("cart11").style.backgroundColor = "ffffff";
			
			var wishlistButton11 = document.getElementById("wishlist11");
			wishlistButton11.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton11 = document.getElementById("cart11");
			cartButton11.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			document.getElementById("wishlist12").style.backgroundColor = "ffffff";
			document.getElementById("cart12").style.backgroundColor = "ffffff";
			
			var wishlistButton12 = document.getElementById("wishlist12");
			wishlistButton12.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton12 = document.getElementById("cart12");
			cartButton12.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
			document.getElementById("wishlist13").style.backgroundColor = "ffffff";
			document.getElementById("cart13").style.backgroundColor = "ffffff";
			
			var wishlistButton13 = document.getElementById("wishlist13");
			wishlistButton13.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton13 = document.getElementById("cart13");
			cartButton13.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			document.getElementById("wishlist14").style.backgroundColor = "ffffff";
			document.getElementById("cart14").style.backgroundColor = "ffffff";
			
			var wishlistButton14 = document.getElementById("wishlist14");
			wishlistButton14.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton14 = document.getElementById("cart14");
			cartButton14.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
			document.getElementById("wishlist15").style.backgroundColor = "ffffff";
			document.getElementById("cart15").style.backgroundColor = "ffffff";
			
			var wishlistButton15 = document.getElementById("wishlist15");
			wishlistButton15.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton15 = document.getElementById("cart15");
			cartButton15.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
			
			document.getElementById("wishlist16").style.backgroundColor = "ffffff";
			document.getElementById("cart16").style.backgroundColor = "ffffff";
			
			var wishlistButton16 = document.getElementById("wishlist16");
			wishlistButton16.innerHTML = '<img src="../Images/wishlist.png" / width="17px">';
			
			var cartButton16 = document.getElementById("cart16");
			cartButton16.innerHTML = '<img src="../Images/cart1.png" / width="17px">';
			
			
			
	</script>
</html>

