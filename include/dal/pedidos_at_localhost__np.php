<?php
$dalTablenp = array();
$dalTablenp["Cod_NP"] = array("type"=>3,"varname"=>"Cod_NP", "name" => "Cod_NP", "autoInc" => "1");
$dalTablenp["Parcela"] = array("type"=>3,"varname"=>"Parcela", "name" => "Parcela", "autoInc" => "0");
$dalTablenp["Data"] = array("type"=>200,"varname"=>"Data", "name" => "Data", "autoInc" => "0");
$dalTablenp["Valor"] = array("type"=>14,"varname"=>"Valor", "name" => "Valor", "autoInc" => "0");
$dalTablenp["Saldo"] = array("type"=>200,"varname"=>"Saldo", "name" => "Saldo", "autoInc" => "0");
$dalTablenp["Escola"] = array("type"=>200,"varname"=>"Escola", "name" => "Escola", "autoInc" => "0");
$dalTablenp["Num_NP"] = array("type"=>3,"varname"=>"Num_NP", "name" => "Num_NP", "autoInc" => "0");
$dalTablenp["Execício"] = array("type"=>200,"varname"=>"Exec_cio", "name" => "Execício", "autoInc" => "0");
$dalTablenp["Debito"] = array("type"=>14,"varname"=>"Debito", "name" => "Debito", "autoInc" => "0");
$dalTablenp["Sd_ant"] = array("type"=>5,"varname"=>"Sd_ant", "name" => "Sd_ant", "autoInc" => "0");
$dalTablenp["Cod_NP"]["key"]=true;

$dal_info["pedidos_at_localhost__np"] = &$dalTablenp;
?>