<?php  
include("config.php");
include("Artist.php");
include("Album_class.php");
include("Song.php");

// session_destroy(); it's just to log oyt manually

if (isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];
	echo "<script>userLoggedIn = '$userLoggedIn';</script>";

	
}
else {
	header("Location: register.php");
}

?>
<html>
<head>
	<title>Welcome to Slotify!</title>
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>

<body>
	
	<div id="mainContainer">

		<div id="topContainer">
			<?php include("navBarContainer.php"); ?>

			<div id="mainViewContainer">
				<div id="mainContent">