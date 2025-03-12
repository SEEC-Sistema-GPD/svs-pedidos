<?php
$dalTableitens = array();
$dalTableitens["cod"] = array("type"=>3,"varname"=>"cod", "name" => "cod", "autoInc" => "1");
$dalTableitens["cod_ped"] = array("type"=>3,"varname"=>"cod_ped", "name" => "cod_ped", "autoInc" => "0");
$dalTableitens["genero"] = array("type"=>3,"varname"=>"genero", "name" => "genero", "autoInc" => "0");
$dalTableitens["qtd"] = array("type"=>200,"varname"=>"qtd", "name" => "qtd", "autoInc" => "0");
$dalTableitens["valor"] = array("type"=>5,"varname"=>"valor", "name" => "valor", "autoInc" => "0");
$dalTableitens["total"] = array("type"=>5,"varname"=>"total", "name" => "total", "autoInc" => "0");
$dalTableitens["cod_np"] = array("type"=>3,"varname"=>"cod_np", "name" => "cod_np", "autoInc" => "0");
$dalTableitens["resto"] = array("type"=>5,"varname"=>"resto", "name" => "resto", "autoInc" => "0");
$dalTableitens["Marca"] = array("type"=>200,"varname"=>"Marca", "name" => "Marca", "autoInc" => "0");
$dalTableitens["cod"]["key"]=true;

$dal_info["pedidos_at_localhost__itens"] = &$dalTableitens;
?>