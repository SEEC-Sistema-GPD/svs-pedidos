<?php
$dalTablestatus = array();
$dalTablestatus["cod_status"] = array("type"=>3,"varname"=>"cod_status", "name" => "cod_status", "autoInc" => "1");
$dalTablestatus["Status"] = array("type"=>200,"varname"=>"Status", "name" => "Status", "autoInc" => "0");
$dalTablestatus["cod_status"]["key"]=true;

$dal_info["pedidos_at_localhost__status"] = &$dalTablestatus;
?>