<?php
ob_start(); session_start();
include("ayarlar.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title;?></title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css"> 
    <link rel="stylesheet" href="css/templatemo-ocean-vibes.css"> 
<!--
    
TemplateMo 554 Ocean Vibes

https://templatemo.com/tm-554-ocean-vibes

-->
</head>
<body>

<div id="wrap">

<?php
if(isset($_POST['submit'])){

$user=$_POST['user'];
$pass=$_POST['pass'];
$pass_md5=md5($pass);

$sql=mysqli_query($connection, "SELECT * FROM ayarlar WHERE username='$user' AND password='$pass_md5'");
$varmi=mysqli_num_rows($sql);

if($varmi>0) {
$_SESSION['admin']="Admin";
header("Location:yonetim.php");

} else{
echo "<h2>Kullanıcı Adınız veya Şifreniz Yanlış</h2>";

}


}else{

?>


<form action="login.php" method="post">
<br>
<table align="center">
<tr>
<td>Username :</td>
<td><input type="text" name="user"></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Gönder"></td>
</tr>

</table>
</form>
<?php
}
?>

</div>
</body>
</html>