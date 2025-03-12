<?php
$dalTablepedidosugmembers = array();
$dalTablepedidosugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablepedidosugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablepedidosugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablepedidosugmembers["UserName"]["key"]=true;
$dalTablepedidosugmembers["GroupID"]["key"]=true;
$dalTablepedidosugmembers["Provider"]["key"]=true;

$dal_info["pedidos_at_localhost__pedidosugmembers"] = &$dalTablepedidosugmembers;
?>