<?php include("adminHeader.php");?>

<html>
	<head>
		<title>Tienda De Floris</title>
	</head>
	<body>
		
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<table border="1" cellpadding="10px" width="100%">
						<tr>
							<td>
				
							<h3 align="center"><b>Account</b></h3><hr/>
								<table border="1" cellpadding="10px">
											<tr><td><a href="adminHome.php.php">Dashboard</a></td></tr>
											<tr><td><a href="adminProfile.php">Profile</a></td></tr>
											
											<tr><td><a href="editAdminProfile.php">Edit Profile</a></td></tr>
											<tr><td><a href="changeAdminPic.php">Change Profile Picture</a></td></tr>
											<tr><td><a href="changePass.php">Change Password</a></td></tr>
											
											<tr><td><a href="../Home/home.php">Log out</a></td>	</tr>										
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
				
							<h3 align="center"><b>Orders</b></h3><hr/>
								<table border="1" cellpadding="10px"width="100%">
											<tr><td><a href="pendingOrder.php">Pending Orders</a></td></tr>
											<tr><td><a href="revenue.php">Month's History</a></td></tr>
											<tr><td><a href="OrderHistory.php">All Orders</a></td></tr>
																				
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
				
							<h3 align="center"><b>Users</b></h3><hr/>
								<table border="1" cellpadding="10px" width="100%">
											<tr><td><a href="userList.php">Userlist</a></td></tr>
											<tr><td><a href="addUser.php">Add New User</a></td></tr>
											<tr><td><a href="BlackList.php">BlackListed Users</a></td></tr>																				
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
				
							<h3 align="center"><b>Books</b></h3><hr/>
								<table border="1" cellpadding="10px" width="100%">
											<tr><td><a href="bookList.php">Booklist</a></td></tr>											
											<tr><td><a href="AddBook.php">Add New Book</a></td></tr>
																				
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td>
								<table border='1' width="100%" cellpadding="15px">
						<tr><td><a href="myOrders.php"><b>Orders<b></a><br/>Total Order : <hr/></td></tr>
						<tr><td><a href="myList.php"><b> WishList<b></a><br/>Total Item : <hr/></td></tr>
						<tr><td><a href="myReviews.php"><b>Reviews<b></a><br/>Total Review : <hr/></td></tr>
						<tr><td><a href="myReviews.php"><b>New Orders<b></a><br/>order : <hr/></td></tr>
						<tr><td><a href="myReviews.php"><b>Total Order<b></a><br/>Total order : <hr/></td></tr>
						<tr><td><a href="myReviews.php"><b>profit<b></a><br/>profit : <hr/></td></tr>
						
					</table>
				</td>
			</tr>
		</table>
			
	</body>
	

</html>
