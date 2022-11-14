<?php 

include "db.php";

?>

<table style="text-align:center;" border="1" >
    <tbody>
    <tr>
        <th>Currency ID</th>
        <th>Country</th>
        <td>Currency Code</th>
        <th>Price</th>
        <th>Currency Symbol</th>
    </tr>

<?php 

$sql="SELECT * FROM currency";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){

    $currecy_id=$row['currency_id'];
    $country=$row['country'];
    $currency_code =$row['country_code'];
    $price=$row['price'];
    $currency_symbol = $row['currency_symbol'];

?>
<tr>
    <td><?php echo $currecy_id; ?></td>
    <td><?php echo  $country; ?></td>
    <td><?php echo $currency_code; ?></td>
    <td><?php echo $price; ?></td>
    <td><?php echo $currency_symbol; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
