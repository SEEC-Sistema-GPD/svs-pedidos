<?php
$dalTabledirecs = array();
$dalTabledirecs["cod_direc"] = array("type"=>3,"varname"=>"cod_direc", "name" => "cod_direc", "autoInc" => "1");
$dalTabledirecs["nom_direc"] = array("type"=>200,"varname"=>"nom_direc", "name" => "nom_direc", "autoInc" => "0");
$dalTabledirecs["cod_direc"]["key"]=true;

$dal_info["pedidos_at_localhost__direcs"] = &$dalTabledirecs;
?>