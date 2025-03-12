<?php
$dalTablepedidos = array();
$dalTablepedidos["cod"] = array("type"=>3,"varname"=>"cod", "name" => "cod", "autoInc" => "1");
$dalTablepedidos["Exercicio"] = array("type"=>200,"varname"=>"Exercicio", "name" => "Exercicio", "autoInc" => "0");
$dalTablepedidos["cnpj_escola"] = array("type"=>200,"varname"=>"cnpj_escola", "name" => "cnpj_escola", "autoInc" => "0");
$dalTablepedidos["cnpj_fornecedor"] = array("type"=>200,"varname"=>"cnpj_fornecedor", "name" => "cnpj_fornecedor", "autoInc" => "0");
$dalTablepedidos["Saldo"] = array("type"=>5,"varname"=>"Saldo", "name" => "Saldo", "autoInc" => "0");
$dalTablepedidos["status"] = array("type"=>200,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTablepedidos["Data_cad"] = array("type"=>200,"varname"=>"Data_cad", "name" => "Data_cad", "autoInc" => "0");
$dalTablepedidos["usuario"] = array("type"=>200,"varname"=>"usuario", "name" => "usuario", "autoInc" => "0");
$dalTablepedidos["Cod_np"] = array("type"=>3,"varname"=>"Cod_np", "name" => "Cod_np", "autoInc" => "0");
$dalTablepedidos["Parcela"] = array("type"=>3,"varname"=>"Parcela", "name" => "Parcela", "autoInc" => "0");
$dalTablepedidos["Valor_np"] = array("type"=>14,"varname"=>"Valor_np", "name" => "Valor_np", "autoInc" => "0");
$dalTablepedidos["cod"]["key"]=true;

$dal_info["pedidos_at_localhost__pedidos"] = &$dalTablepedidos;
?>