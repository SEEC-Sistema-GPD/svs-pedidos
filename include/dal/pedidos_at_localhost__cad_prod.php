<?php
$dalTablecad_prod = array();
$dalTablecad_prod["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecad_prod["Cod_prod"] = array("type"=>3,"varname"=>"Cod_prod", "name" => "Cod_prod", "autoInc" => "0");
$dalTablecad_prod["Nome"] = array("type"=>200,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTablecad_prod["valor"] = array("type"=>5,"varname"=>"valor", "name" => "valor", "autoInc" => "0");
$dalTablecad_prod["Fornecedor"] = array("type"=>200,"varname"=>"Fornecedor", "name" => "Fornecedor", "autoInc" => "0");
$dalTablecad_prod["Und"] = array("type"=>200,"varname"=>"Und", "name" => "Und", "autoInc" => "0");
$dalTablecad_prod["Marca"] = array("type"=>200,"varname"=>"Marca", "name" => "Marca", "autoInc" => "0");
$dalTablecad_prod["Valor_Para"] = array("type"=>200,"varname"=>"Valor_Para", "name" => "Valor_Para", "autoInc" => "0");
$dalTablecad_prod["id"]["key"]=true;

$dal_info["pedidos_at_localhost__cad_prod"] = &$dalTablecad_prod;
?>