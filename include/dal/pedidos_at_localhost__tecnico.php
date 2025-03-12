<?php
$dalTabletecnico = array();
$dalTabletecnico["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletecnico["Mat"] = array("type"=>3,"varname"=>"Mat", "name" => "Mat", "autoInc" => "0");
$dalTabletecnico["Nome"] = array("type"=>200,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTabletecnico["cnpj_escola"] = array("type"=>200,"varname"=>"cnpj_escola", "name" => "cnpj_escola", "autoInc" => "0");
$dalTabletecnico["parcela"] = array("type"=>3,"varname"=>"parcela", "name" => "parcela", "autoInc" => "0");
$dalTabletecnico["exercicio"] = array("type"=>200,"varname"=>"exercicio", "name" => "exercicio", "autoInc" => "0");
$dalTabletecnico["id"]["key"]=true;

$dal_info["pedidos_at_localhost__tecnico"] = &$dalTabletecnico;
?>