
<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" href="code.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--**************************Header******************************-->
<header>
  <input type="checkbox" name="" id="toggler">
  <label for="toggler" class="fa fa-bars"></label>
  <a href="#" class="logo">CRYPTObase<span>.</span></a>
  

  <nav class="navbar">
      <a href="homepage.html">Home</a>
      <a href="index2.php">Live Price</a>
      <a href="about.html">About</a>
      <a href="watchlist.html">watchlist</a>
      <a href="contact.html">Contact</a>
      <a href="hotcoins.html">Hot Coins</a>
      <a href="login.php">Sign in|Login</a>
    <a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
  </nav>
  
</header>
<br><br><br><br><br><br><br><br><br>

<?php
include "parts/config.php"; ?>
<html>
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <h1>Coin Table</h1> 
<?php 
$sql="SELECT * from `coin_table`;";
$result= mysqli_query($conn, $sql) or die("error getting info");
?>

<div class="container">
    <table class ="table table-dark">

    <thread>
    <tr> 
    <th>ID</th>
    <th>coin name</th>
    <th>coin symbol</th>
    <th>Current_Price</th> 
    <th>Persent Change 24h</th>
    <th>total volume</th>
    <th>Market Cap</th>

    </tr>
</tread>

<?php
while ($row = mysqli_fetch_assoc($result)){ 
?>
<tr><td> <?php echo  $row['id']; ?></td>
<td>
    <?php echo  $row['coin_id']; ?>
    </td>
    <td>
    <?php echo  $row['symbol']; ?>
    </td>
    <td>
    <?php echo  $row['price']; ?>
    </td>
    <td>
    <?php echo  $row['percent_change_24h']; ?>
    </td>
    <td>
    <?php echo  $row['total_volume']; ?>
    </td>
    <td>
    <?php echo $row['market_cap']; ?>
    </td>
    <td>
</tr>
<?php }?>
</table>
</div>

</body>

<br>

<br>
<br>
<br>

<footer>
<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,5426,2010,52,74,5994,1839" currency="INR" theme="dark" transparent="false" show-symbol-logo="true"></div>
</footer>
</html>"
<!--**************************Footer******************************-->
<footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fa fa-bitcoin"></i>
          <span class="logo-name">CRYPTObase.co.in</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fa fa-facebook-f"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <br>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Links</li>
          <br>
          <li><a href="#">Wishlist</a></li>
          <li><a href="#">Coin info.</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">My wallet</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <br>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">About</li>
          <br>
          <li><a href="#">Our Services</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms&Conditions</a></li>
          <li><a href="#">Help</a></li>
        </ul>
        <ul class="box input-box">
          <li class="link_name">For more news&updates</li>
          <br>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2021 <a href="#">CRYPTObase.co.in</a>All rights reserved</span>
      </div>
    </div>
  </footer>