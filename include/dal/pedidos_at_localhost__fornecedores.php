<?php
$dalTablefornecedores = array();
$dalTablefornecedores["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablefornecedores["CNPJ"] = array("type"=>200,"varname"=>"CNPJ", "name" => "CNPJ", "autoInc" => "0");
$dalTablefornecedores["Razão Social"] = array("type"=>200,"varname"=>"Raz_o_Social", "name" => "Razão Social", "autoInc" => "0");
$dalTablefornecedores["Telefone Fixo"] = array("type"=>200,"varname"=>"Telefone_Fixo", "name" => "Telefone Fixo", "autoInc" => "0");
$dalTablefornecedores["Responsável"] = array("type"=>200,"varname"=>"Respons_vel", "name" => "Responsável", "autoInc" => "0");
$dalTablefornecedores["Endereço"] = array("type"=>200,"varname"=>"Endere_o", "name" => "Endereço", "autoInc" => "0");
$dalTablefornecedores["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email", "autoInc" => "0");
$dalTablefornecedores["Telefone Celular"] = array("type"=>200,"varname"=>"Telefone_Celular", "name" => "Telefone Celular", "autoInc" => "0");
$dalTablefornecedores["OBS"] = array("type"=>200,"varname"=>"OBS", "name" => "OBS", "autoInc" => "0");
$dalTablefornecedores["id"]["key"]=true;

$dal_info["pedidos_at_localhost__fornecedores"] = &$dalTablefornecedores;
?>