<?php
$dalTablepedidos_usuarios = array();
$dalTablepedidos_usuarios["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID", "autoInc" => "1");
$dalTablepedidos_usuarios["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablepedidos_usuarios["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablepedidos_usuarios["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablepedidos_usuarios["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTablepedidos_usuarios["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid", "autoInc" => "0");
$dalTablepedidos_usuarios["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTablepedidos_usuarios["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id", "autoInc" => "0");
$dalTablepedidos_usuarios["fullname1"] = array("type"=>201,"varname"=>"fullname1", "name" => "fullname1", "autoInc" => "0");
$dalTablepedidos_usuarios["userpic"] = array("type"=>128,"varname"=>"userpic", "name" => "userpic", "autoInc" => "0");
$dalTablepedidos_usuarios["fullname2"] = array("type"=>201,"varname"=>"fullname2", "name" => "fullname2", "autoInc" => "0");
$dalTablepedidos_usuarios["reset_token"] = array("type"=>201,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTablepedidos_usuarios["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTablepedidos_usuarios["ID"]["key"]=true;

$dal_info["pedidos_at_localhost__pedidos_usuarios"] = &$dalTablepedidos_usuarios;
?>