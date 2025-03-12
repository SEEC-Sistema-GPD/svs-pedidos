<?php
$dalTableexercicios = array();
$dalTableexercicios["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableexercicios["Ano"] = array("type"=>200,"varname"=>"Ano", "name" => "Ano", "autoInc" => "0");
$dalTableexercicios["id"]["key"]=true;

$dal_info["pedidos_at_localhost__exercicios"] = &$dalTableexercicios;
?>