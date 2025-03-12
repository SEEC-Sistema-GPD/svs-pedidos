<?php
$dalTablefuncao = array();
$dalTablefuncao["cod_func"] = array("type"=>3,"varname"=>"cod_func", "name" => "cod_func", "autoInc" => "1");
$dalTablefuncao["nom_func"] = array("type"=>200,"varname"=>"nom_func", "name" => "nom_func", "autoInc" => "0");
$dalTablefuncao["cod_func"]["key"]=true;

$dal_info["pedidos_at_localhost__funcao"] = &$dalTablefuncao;
?>