<?php
$dalTablepedidosugrights = array();
$dalTablepedidosugrights["TableName"] = array("type"=>200,"varname"=>"TableName", "name" => "TableName", "autoInc" => "0");
$dalTablepedidosugrights["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablepedidosugrights["AccessMask"] = array("type"=>200,"varname"=>"AccessMask", "name" => "AccessMask", "autoInc" => "0");
$dalTablepedidosugrights["Page"] = array("type"=>201,"varname"=>"Page", "name" => "Page", "autoInc" => "0");
$dalTablepedidosugrights["TableName"]["key"]=true;
$dalTablepedidosugrights["GroupID"]["key"]=true;

$dal_info["pedidos_at_localhost__pedidosugrights"] = &$dalTablepedidosugrights;
?>