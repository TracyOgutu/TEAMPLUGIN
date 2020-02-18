<?php
        $url='https://api-test.equitybankgroup.com/v1/token/';
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Basic VHJ2azY2MXRkUnNDQ01kUm0ydTM2M2ZtZk9BcHhNdTA6SFVNNjdsOGV5Tk5YdWJEcw==',
            'Content-Type: application/x-www-form-urlencoded',
        ));
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,'merchantCode=4188171122&password=TGvBoRGAcdzuhCs1l0NW2219IsgXQvLU&grant_type=password');
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $html=curl_exec($ch);
        // echo $html;
        $token = json_decode($html,true);
        // numeric/associative array access
        echo $token['payment-token'];
        // $_POST['token']=$token['payment-token'];
        curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Form</title>
</head>
<body>
<form
   id="eazzycheckout-payment-form"
   action=" https://api-test.equitybankgroup.com/v2/checkout/launch" method="POST">
   <input type="hidden" id="token" name="token" value="<?php  echo $token['payment-token'];?>">
   <input type="hidden" id="amount" name="amount" value="1000">
    <input type="hidden" id="orderReference" name="orderReference" value="4345rt43">
    <input type="hidden" id="merchantCode" name="merchantCode" value="4188171122">
    <input type="hidden" id="merchant" name="merchant" value="Jumia">
    <input type="hidden" id="currency" name="currency" value="KES">
    <input type="hidden" id="custName" name="custName" value="Jumia">
    <input type="hidden" id="outletCode" name="outletCode" value="0000000000">
    <input type="hidden" id="extraData" name="extraData" value="N/A" >
    <input type="hidden" id="popupLogo" name="popupLogo" value="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQaWmE9OLh4KHerCwUehjx1ZWHMIRY6IapeLVCC_deFzbzYfL27(13 kB)
https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQaWmE9OLh4KHerCwUehjx1ZWHMIRY6IapeLVCC_deFzbzYfL27
">
    <input type="hidden" id="ez1_callbackurl" name="ez1_callbackurl" value="http://localhost/finshop/index.php/checkout/order-received/58/?key=wc_order_NLpxa7N6EPUPG">
    <input type="hidden" id="ez2_callbackurl" name="ez2_callbackurl" value="http://localhost/finshop/index.php/checkout/order-received/58/?key=wc_order_NLpxa7N6EPUPG">
    <input type="hidden" id="expiry" name="expiry" value="2025-02-17T19:00:00">
    <input type="submit" id="submit-cg" role="button" class="btn btn-primary col-md-4"
       value="Checkout"/>
</form>
</body>
</html>