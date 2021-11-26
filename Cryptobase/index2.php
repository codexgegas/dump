<?php include "parts/config.php"; ?>
<html>
<head>
    <title> </title>
    <style type=text/css> table{ boder: 2px solid red; background-color: #FFC; } th{ border-bottom:5px solid #000; } td{
        border-bottom:2px solid #666; } </style> </head> <body>
        <h1>Coin Table</h1>
        
<?php 
$sql="SELECT * from `coin_table`;";
$result= mysqli_query($conn, $sql) or die("error getting info");
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<table class= "table table-dark">
<tr> 
    <th>ID</th>
    <th>coin name</th>
    <th>coin symbol</th>
    <th>Current_Price</th> 
    <th>Persent Change 24h</th>
    <th>total volume</th>
    <th>Market Cap</th>

</tr>
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
</body>
<footer>
<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,5426,2010,52,74,5994,1839" currency="INR" theme="dark" transparent="false" show-symbol-logo="true"></div>
</footer>
</html>