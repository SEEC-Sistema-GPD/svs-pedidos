<?php
$dalTablepedidos_settings = array();
$dalTablepedidos_settings["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID", "autoInc" => "1");
$dalTablepedidos_settings["TYPE"] = array("type"=>3,"varname"=>"TYPE", "name" => "TYPE", "autoInc" => "0");
$dalTablepedidos_settings["NAME"] = array("type"=>201,"varname"=>"NAME", "name" => "NAME", "autoInc" => "0");
$dalTablepedidos_settings["USERNAME"] = array("type"=>201,"varname"=>"USERNAME", "name" => "USERNAME", "autoInc" => "0");
$dalTablepedidos_settings["COOKIE"] = array("type"=>200,"varname"=>"COOKIE", "name" => "COOKIE", "autoInc" => "0");
$dalTablepedidos_settings["SEARCH"] = array("type"=>201,"varname"=>"SEARCH", "name" => "SEARCH", "autoInc" => "0");
$dalTablepedidos_settings["TABLENAME"] = array("type"=>200,"varname"=>"TABLENAME", "name" => "TABLENAME", "autoInc" => "0");
$dalTablepedidos_settings["ID"]["key"]=true;

$dal_info["pedidos_at_localhost__pedidos_settings"] = &$dalTablepedidos_settings;
?>