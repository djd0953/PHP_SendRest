<?php
	$url = $_POST['url'];

	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
		  'Cookie: ipmsperf_uuid=8997223626887326508'
		),
	));
	  
	$response = curl_exec($ch);
	if( curl_errno($ch) )
	{
		curl_close($ch);
		echo curl_error($ch);
	}
	else
	{
		echo json_encode($response);
	}
?>