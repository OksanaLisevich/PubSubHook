<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">

</head>

<body>
<?php


if (isset($_GET) && ($_SERVER['HTTP_X_HTTP_METHOD'] == 'GET'))
{
  $data = $_GET;
  $http_data = http_build_query(array($_GET));
  $status = array(
            200 => 'OK');
  http_response_code(200);
  $opts = array(
    'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n".
              "Content-type: application/json\r\n",
    'content' => $http_data
  )
);

$url = "https://www.corezoid.com/api/1/json/public/672129/aeb696d85d651ad493c48e1a5ee8beb617eb5cbf";

$context = stream_context_create($opts);


$fp = fopen($url, 'r', false, $context);
fpassthru($fp);
fclose($fp);
}
	
	echo $context;
	echo $opts;
	echo $http_data;
	echo $data;
	

?>


</body>

</html>
