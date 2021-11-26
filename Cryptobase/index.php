<?php include "parts/config.php"; ?>
<html>
<head>
    <title> </title>
    <style type=text/css> table{ boder: 2px solid red; background-color: #FFC; } th{ border-bottom:5px solid #000; } td{
        border-bottom:2px solid #666; } </style> </head> <body>
        <h1>Coin Table</h1>
        
<?php 
$sql="SELECT * from `coins`;";
$result= mysqli_query($conn, $sql) or die("error getting info");
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<table class ="table table-dark">
<tr> 
    <th>ID</th>
    <th>coin name</th>
    <th>coin symbol</th>
    <th>Current_Price</th> 
    <th>High 24</th>
    <th>low 24</th>
    <th>Market Cap</th>

</tr>
<?php
while ($row = mysqli_fetch_assoc($result)){ 
?>
<tr><td> <?php echo  $row['ID']; ?></td>
<td>
    <?php echo  $row['Coin_name']; ?>
    </td>
    <td>
    <?php echo  $row['Coin_symbol']; ?>
    </td>
    <td>
    <?php echo  $row['Current_Price']; ?>
    </td>
    <td>
    <?php echo  $row['High_24h']; ?>
    </td>
    <td>
    <?php echo  $row['Low_24h']; ?>
    </td>
    <td>
    <?php echo $row['Market_cap']; ?>
    </td>
    <td>
</tr>
<?php }?>
</table>
</body>
<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinPriceBlock.js"></script><div id="coinmarketcap-widget-coin-price-block" coins="1,1027,825,1839,5426,2010,52,74,5994" currency="INR" theme="light" transparent="true" show-symbol-logo="true"></div>
