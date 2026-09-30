<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']))  {
    include("config.php");
    include("User.php");
    include("Artist.php");
    include("Album_class.php");
    include("Song.php");
    include("Playlist.php");

    if(isset($_GET['userLoggedIn'])) {
        $userLoggedIn = new User($con, $_GET['userLoggedIn']);
    }
    else {
        echo "Username variable was not passed into page . Check the openPage JS function";
    }
} 
else {
    include("header.php");
    include("footer.php");

    $url = $_SERVER['REQUEST_URI'];
    echo "<script>openPage('$url')</script>";
    exit();
}

?>