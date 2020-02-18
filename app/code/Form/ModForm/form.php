<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
<form 
id="eazzycheckout-payment-form"
action="home.php" method="POST">
Token:<input class="form-control"  id="token" name="token"> <br>
Amount:<input class="form-control"  id="amount" name="amount"> <br>
orderReference:<input class="form-control"  id="orderReference" name="orderReference"><br>
merchantCode:<input class="form-control"  id="merchantCode" name="merchantCode"><br>
yourMerchantName:<input class="form-control"  id="merchant" name="merchant"><br>
currency:<input class="form-control"  id="currency" name="currency"><br>
custName:<input class="form-control"  id="custName" name="custName"><br>
outletCode:<input class="form-control"  id="outletCode" name="outletCode"><br>
extraData:<input class="form-control"  id="extraData" name="extraData" ><br>
popupLogo:<input class="form-control"  id="popupLogo" name="popupLogo"><br>
ez1:<input class="form-control"  id="ez1_callbackurl" name="ez1_callbackurl"><br>
ez2:<input class="form-control"  id="ez2_callbackurl" name="ez2_callbackurl"><br>
expiry:<input class="form-control"  id="expiry" name="expiry">
<input type="submit" id="submit-cg" role="button" class="btn btn-outline-primary col-md-4"
   value="Checkout"/>
</form>
</body>
</html>
