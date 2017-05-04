<?php
$client = new SoapClient('http://webservice.correios.com.br/service/rastro/Rastro.wsdl');
 
$function = 'buscaEventosLista';
 
$params= array('buscaEventosLista' => array(
						
						'usuario' => '',
						'senha' => '',
						'tipo' => 'L',
						'resultado' => 'T',
						'lingua' => '101',
						'objetos' => 'OC081999205BR',
					
						
                ));
$options = array('location' => 'http://webservice.correios.com.br/service/rastro/Rastro.wsdl');
 
$result = $client->__soapCall($function, $params, $options);
 
//echo 'Response: ';
print_r($result);

//print_r(json_encode($params));
?>
