<?php
$dalTablearquivos = array();
$dalTablearquivos["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablearquivos["Nome"] = array("type"=>200,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTablearquivos["Descrição"] = array("type"=>200,"varname"=>"Descri__o", "name" => "Descrição", "autoInc" => "0");
$dalTablearquivos["Data_cad"] = array("type"=>7,"varname"=>"Data_cad", "name" => "Data_cad", "autoInc" => "0");
$dalTablearquivos["Tipo"] = array("type"=>200,"varname"=>"Tipo", "name" => "Tipo", "autoInc" => "0");
$dalTablearquivos["Arquivo"] = array("type"=>201,"varname"=>"Arquivo", "name" => "Arquivo", "autoInc" => "0");
$dalTablearquivos["id"]["key"]=true;

$dal_info["pedidos_at_localhost__arquivos"] = &$dalTablearquivos;
?>