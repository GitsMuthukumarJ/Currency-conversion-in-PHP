<?php 

include "db.php";

$sql = "SELECT * FROM currency";
$result = $db->query($sql);
while($row=$result->fetch_assoc()){

    $currency_code = $row['country_code'];
    echo $currency_code;

$req_url = "https://api.exchangerate.host/convert?from=USD&to=$currency_code";
$response_json = file_get_contents($req_url);
if(false !== $response_json) {
    try {
        $response = json_decode($response_json);
        if($response->success === true) {
            print_r($response);
           $price = $response->result;
           $currency_code2 = $response->query->to;

           date_default_timezone_set('Asia/Kolkata');
           $datetime = date('d/m/Y h:i:s a');
           
           $sql2 = "UPDATE currency set price='$price', updated_datetime='$datetime' WHERE country_code='$currency_code2'";
           print_r($sql2);
           $result2=$db->query($sql2);
           
        }
    } catch(Exception $e) {
        // Handle JSON parse error...
    }
}  
}


?>