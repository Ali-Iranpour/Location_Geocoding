<?php
//getting the url from client
$url = $_REQUEST["url"];
require_once 'HTTP/Request2.php';
// if url is set
if(isset($url)){
  $url = urldecode($url);
  //making http get request to Geocoding API
  $request = new HTTP_Request2();
  $request->setUrl(strval($url));
  $request->setMethod(HTTP_Request2::METHOD_GET);
  $request->setConfig(array(
    'follow_redirects' => TRUE
  ));
  $request->setHeader(array(
    'Api-Key' => 'service api key'
  ));
  try {
    $response = $request->send();
    if ($response->getStatus() == 200) {
      echo $response->getBody();
    }
    else {
      echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
      $response->getReasonPhrase();
    }
  }
  catch(HTTP_Request2_Exception $e) {
    echo 'Error: ' . $e->getMessage();
  }
}else{
  echo "nope";
}

?>