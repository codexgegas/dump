<?php 
include_once 'parts/config.php';
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Email</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="change-E.php" method="post">
    <h2>Change Email</h2>
    <?php if (isset($_GET['error'])) { ?>
     	<p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <label>Old Email</label>
    <input type="Email" 
           name="oe" 
           placeholder="Old Email">
           <br>

    <label>New Email</label>
    <input type="Email" 
           name="ne" 
           placeholder="New email">
           <br>

    <label>Confirm New Email</label>
    <input type="Email" 
           name="c_ne" 
           placeholder="Confirm New Email">
           <br>

    <button type="submit">Change</button>
        <a href="home.php" class="ca">Home</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>