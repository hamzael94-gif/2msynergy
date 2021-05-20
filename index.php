<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="../Admin/admins/style.css">
	<style>
		body {
	background: #1690A7;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
	animation: ani 10s infinite;
	
}
	</style>
</head>
<body>
     <form action="admins/login.php" method="post" autocomplete="off">
     	<img src="admins/2msynergy- 2ms.png" style="height:150px;witdh:50px">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="uname" placeholder="User Name"><br>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>