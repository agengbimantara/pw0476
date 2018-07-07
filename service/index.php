<?php 

$data[0] = array('vendor' => 'Samsung','type' => 'A6', 'price'=>'$406');;
$data[1] = array('vendor' => 'Xiaomi','type' => 'Mi8', 'price'=>'$980');;
$data[2] = array('vendor' => 'LG','type' => 'V40', 'price'=>'$1032');;

$json['sum'] = count($data);
$json['info'] = 'Phone Market Data';
$json['data'] = $data;

echo json_encode($data)
?>