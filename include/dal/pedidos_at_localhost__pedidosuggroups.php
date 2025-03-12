<?php
$dalTablepedidosuggroups = array();
$dalTablepedidosuggroups["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "1");
$dalTablepedidosuggroups["Label"] = array("type"=>200,"varname"=>"Label", "name" => "Label", "autoInc" => "0");
$dalTablepedidosuggroups["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablepedidosuggroups["Comment"] = array("type"=>201,"varname"=>"Comment", "name" => "Comment", "autoInc" => "0");
$dalTablepedidosuggroups["GroupID"]["key"]=true;

$dal_info["pedidos_at_localhost__pedidosuggroups"] = &$dalTablepedidosuggroups;
?>