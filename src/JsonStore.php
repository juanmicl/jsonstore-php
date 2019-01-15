<?php
namespace juanmicl\jsonstorePHP;

function curl_request($request, $url, $body, $header){
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_CUSTOMREQUEST => $request,
		CURLOPT_POSTFIELDS => json_encode($body),
		CURLOPT_HTTPHEADER => $header,
	));
	return curl_exec($curl);
	curl_close($curl);
}

/**
 * Clase para manejo de jsonstore.io
 */
class JsonStore
{

  public function getToken()
  {
    $body = array();
    $header = array();
    $response = json_decode(curl_request('GET', 'https://www.jsonstore.io/get-token', $body, $header), true);
    return $response['token'];
  }

  public function insert($token, $table, $row, $body)
  {
		if ($row == null) {
	    $response = json_decode(curl_request('GET', 'https://www.jsonstore.io/'.$token.'/'.$table, array(), array()), true);
	    $row = count($response['result']);
		}
		$header = array(
      'Content-type: application/json'
    );
		$response = json_decode(curl_request('POST', 'https://www.jsonstore.io/'.$token.'/'.$table.'/'.$row, $body, $header), true);
    return $response['ok'];
  }

	public function edit($token, $table, $row, $field, $body)
  {
    $header = array(
      'Content-type: application/json'
    );
    $response = json_decode(curl_request('PUT', 'https://www.jsonstore.io/'.$token.'/'.$table.'/'.$row.'/'.$field, $body, $header), true);
    return $response['ok'];
  }

	public function get($token, $table, $row)
	{
		$body = array();
		$header = array();
    $response = json_decode(curl_request('GET', 'https://www.jsonstore.io/'.$token.'/'.$table.'/'.$row, $body, $header), true);
    return $response;
	}
}

?>
