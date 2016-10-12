<?php
  
  // responsible for sending data entered on the forms to url
  
  // gets variables from slider form saving them to php
  $name_ = "name$dealer";
  $number_ = "number$dealer";
  $account_ = "account$dealer";
  $password_ = "password$dealer";
  $operator_ = "radio1$dealer";
  $amount_ = "username$dealer";
  
  
  // variables given new names in php
  $name =  $_POST["$name_"];
  $number =  $_POST["$number_"];
  $account =  $_POST["$account_"];
  $password =  $_POST["$password_"];
  $operator =  $_POST["$operator_"];
  $amount =  $_POST["$amount_"];
  
	// url to UPG
	header("Location: http://localhost:8000/merchant/4/method/1/client/$number/amount/$amount");
	exit;
 

?>