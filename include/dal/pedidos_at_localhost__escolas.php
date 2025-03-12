<?php
$dalTableescolas = array();
$dalTableescolas["cod_escola"] = array("type"=>3,"varname"=>"cod_escola", "name" => "cod_escola", "autoInc" => "1");
$dalTableescolas["CNPJ"] = array("type"=>200,"varname"=>"CNPJ", "name" => "CNPJ", "autoInc" => "0");
$dalTableescolas["Nome"] = array("type"=>200,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTableescolas["Endereço"] = array("type"=>200,"varname"=>"Endere_o", "name" => "Endereço", "autoInc" => "0");
$dalTableescolas["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email", "autoInc" => "0");
$dalTableescolas["Telefone"] = array("type"=>200,"varname"=>"Telefone", "name" => "Telefone", "autoInc" => "0");
$dalTableescolas["Descrição"] = array("type"=>200,"varname"=>"Descri__o", "name" => "Descrição", "autoInc" => "0");
$dalTableescolas["Drae"] = array("type"=>200,"varname"=>"Drae", "name" => "Drae", "autoInc" => "0");
$dalTableescolas["Bairro"] = array("type"=>200,"varname"=>"Bairro", "name" => "Bairro", "autoInc" => "0");
$dalTableescolas["Cidade"] = array("type"=>200,"varname"=>"Cidade", "name" => "Cidade", "autoInc" => "0");
$dalTableescolas["Estado"] = array("type"=>200,"varname"=>"Estado", "name" => "Estado", "autoInc" => "0");
$dalTableescolas["Lat"] = array("type"=>14,"varname"=>"Lat", "name" => "Lat", "autoInc" => "0");
$dalTableescolas["Lng"] = array("type"=>14,"varname"=>"Lng", "name" => "Lng", "autoInc" => "0");
$dalTableescolas["Direc"] = array("type"=>200,"varname"=>"Direc", "name" => "Direc", "autoInc" => "0");
$dalTableescolas["Cep"] = array("type"=>200,"varname"=>"Cep", "name" => "Cep", "autoInc" => "0");
$dalTableescolas["Tec_resp"] = array("type"=>200,"varname"=>"Tec_resp", "name" => "Tec_resp", "autoInc" => "0");
$dalTableescolas["Arquivos"] = array("type"=>200,"varname"=>"Arquivos", "name" => "Arquivos", "autoInc" => "0");
$dalTableescolas["Obs"] = array("type"=>200,"varname"=>"Obs", "name" => "Obs", "autoInc" => "0");
$dalTableescolas["EmailDrae"] = array("type"=>200,"varname"=>"EmailDrae", "name" => "EmailDrae", "autoInc" => "0");
$dalTableescolas["Municipio"] = array("type"=>200,"varname"=>"Municipio", "name" => "Municipio", "autoInc" => "0");
$dalTableescolas["cod_fee"] = array("type"=>200,"varname"=>"cod_fee", "name" => "cod_fee", "autoInc" => "0");
$dalTableescolas["cod_escola"]["key"]=true;
$dalTableescolas["CNPJ"]["key"]=true;

$dal_info["pedidos_at_localhost__escolas"] = &$dalTableescolas;
?>