<?php




$connection = mysqli_connect('localhost', 'root', '123456', 'oceanblank');
if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error());
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, 'oceanblank');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}

$site_logo  ="Adem Adem";
$site_slogan="İnterneti Bir Amaç Kullananlardan";
$site_title ="Kişisel Site";
$hakkimizda ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, cupiditate perferendis fugiat, harum explicabo tenetur ratione, ipsum adipisci aliquid amet repellat repellendus. Eligendi ipsam, facilis consequuntur dolor officia earum quia!";

//türkçe karakter düzenleme
//mysqli_query("SET NAMES 'latin5'");





?>
