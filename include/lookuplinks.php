<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["escolas"] ) ) {
			$lookupTableLinks["escolas"] = array();
		}
		if( !isset( $lookupTableLinks["escolas"]["np.Drae"] )) {
			$lookupTableLinks["escolas"]["np.Drae"] = array();
		}
		$lookupTableLinks["escolas"]["np.Drae"]["edit"] = array("table" => "np", "field" => "Drae", "page" => "edit");
		if( !isset( $lookupTableLinks["direcs"] ) ) {
			$lookupTableLinks["direcs"] = array();
		}
		if( !isset( $lookupTableLinks["direcs"]["np.Direc"] )) {
			$lookupTableLinks["direcs"]["np.Direc"] = array();
		}
		$lookupTableLinks["direcs"]["np.Direc"]["search"] = array("table" => "np", "field" => "Direc", "page" => "search");
		if( !isset( $lookupTableLinks["Sd_ant"] ) ) {
			$lookupTableLinks["Sd_ant"] = array();
		}
		if( !isset( $lookupTableLinks["Sd_ant"]["np.Sd_ant"] )) {
			$lookupTableLinks["Sd_ant"]["np.Sd_ant"] = array();
		}
		$lookupTableLinks["Sd_ant"]["np.Sd_ant"]["edit"] = array("table" => "np", "field" => "Sd_ant", "page" => "edit");
		if( !isset( $lookupTableLinks["escolas"] ) ) {
			$lookupTableLinks["escolas"] = array();
		}
		if( !isset( $lookupTableLinks["escolas"]["pedidos.cnpj_escola"] )) {
			$lookupTableLinks["escolas"]["pedidos.cnpj_escola"] = array();
		}
		$lookupTableLinks["escolas"]["pedidos.cnpj_escola"]["edit"] = array("table" => "pedidos", "field" => "cnpj_escola", "page" => "edit");
		if( !isset( $lookupTableLinks["fornecedores"] ) ) {
			$lookupTableLinks["fornecedores"] = array();
		}
		if( !isset( $lookupTableLinks["fornecedores"]["pedidos.cnpj_fornecedor"] )) {
			$lookupTableLinks["fornecedores"]["pedidos.cnpj_fornecedor"] = array();
		}
		$lookupTableLinks["fornecedores"]["pedidos.cnpj_fornecedor"]["edit"] = array("table" => "pedidos", "field" => "cnpj_fornecedor", "page" => "edit");
		if( !isset( $lookupTableLinks["alternativa"] ) ) {
			$lookupTableLinks["alternativa"] = array();
		}
		if( !isset( $lookupTableLinks["alternativa"]["pedidos.usuario"] )) {
			$lookupTableLinks["alternativa"]["pedidos.usuario"] = array();
		}
		$lookupTableLinks["alternativa"]["pedidos.usuario"]["edit"] = array("table" => "pedidos", "field" => "usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["direcs"] ) ) {
			$lookupTableLinks["direcs"] = array();
		}
		if( !isset( $lookupTableLinks["direcs"]["cad_prod.Valor_Para"] )) {
			$lookupTableLinks["direcs"]["cad_prod.Valor_Para"] = array();
		}
		$lookupTableLinks["direcs"]["cad_prod.Valor_Para"]["edit"] = array("table" => "cad_prod", "field" => "Valor_Para", "page" => "edit");
		if( !isset( $lookupTableLinks["Seleciona_drae_novo"] ) ) {
			$lookupTableLinks["Seleciona_drae_novo"] = array();
		}
		if( !isset( $lookupTableLinks["Seleciona_drae_novo"]["escolas.Drae"] )) {
			$lookupTableLinks["Seleciona_drae_novo"]["escolas.Drae"] = array();
		}
		$lookupTableLinks["Seleciona_drae_novo"]["escolas.Drae"]["edit"] = array("table" => "escolas", "field" => "Drae", "page" => "edit");
		if( !isset( $lookupTableLinks["direcs"] ) ) {
			$lookupTableLinks["direcs"] = array();
		}
		if( !isset( $lookupTableLinks["direcs"]["escolas.Direc"] )) {
			$lookupTableLinks["direcs"]["escolas.Direc"] = array();
		}
		$lookupTableLinks["direcs"]["escolas.Direc"]["edit"] = array("table" => "escolas", "field" => "Direc", "page" => "edit");
		if( !isset( $lookupTableLinks["cad_prod"] ) ) {
			$lookupTableLinks["cad_prod"] = array();
		}
		if( !isset( $lookupTableLinks["cad_prod"]["itens_view.genero"] )) {
			$lookupTableLinks["cad_prod"]["itens_view.genero"] = array();
		}
		$lookupTableLinks["cad_prod"]["itens_view.genero"]["edit"] = array("table" => "itens_view", "field" => "genero", "page" => "edit");
		if( !isset( $lookupTableLinks["funcao"] ) ) {
			$lookupTableLinks["funcao"] = array();
		}
		if( !isset( $lookupTableLinks["funcao"]["pedidos_usuarios.fullname1"] )) {
			$lookupTableLinks["funcao"]["pedidos_usuarios.fullname1"] = array();
		}
		$lookupTableLinks["funcao"]["pedidos_usuarios.fullname1"]["edit"] = array("table" => "pedidos_usuarios", "field" => "fullname1", "page" => "edit");
		if( !isset( $lookupTableLinks["Seleciona_drae_novo"] ) ) {
			$lookupTableLinks["Seleciona_drae_novo"] = array();
		}
		if( !isset( $lookupTableLinks["Seleciona_drae_novo"]["pedidos_usuarios.fullname2"] )) {
			$lookupTableLinks["Seleciona_drae_novo"]["pedidos_usuarios.fullname2"] = array();
		}
		$lookupTableLinks["Seleciona_drae_novo"]["pedidos_usuarios.fullname2"]["edit"] = array("table" => "pedidos_usuarios", "field" => "fullname2", "page" => "edit");
		if( !isset( $lookupTableLinks["funcao"] ) ) {
			$lookupTableLinks["funcao"] = array();
		}
		if( !isset( $lookupTableLinks["funcao"]["admin_users.fullname1"] )) {
			$lookupTableLinks["funcao"]["admin_users.fullname1"] = array();
		}
		$lookupTableLinks["funcao"]["admin_users.fullname1"]["edit"] = array("table" => "admin_users", "field" => "fullname1", "page" => "edit");
		if( !isset( $lookupTableLinks["Seleciona_drae_novo"] ) ) {
			$lookupTableLinks["Seleciona_drae_novo"] = array();
		}
		if( !isset( $lookupTableLinks["Seleciona_drae_novo"]["admin_users.fullname2"] )) {
			$lookupTableLinks["Seleciona_drae_novo"]["admin_users.fullname2"] = array();
		}
		$lookupTableLinks["Seleciona_drae_novo"]["admin_users.fullname2"]["edit"] = array("table" => "admin_users", "field" => "fullname2", "page" => "edit");
		if( !isset( $lookupTableLinks["status"] ) ) {
			$lookupTableLinks["status"] = array();
		}
		if( !isset( $lookupTableLinks["status"]["pedidos_view.status"] )) {
			$lookupTableLinks["status"]["pedidos_view.status"] = array();
		}
		$lookupTableLinks["status"]["pedidos_view.status"]["edit"] = array("table" => "pedidos_view", "field" => "status", "page" => "edit");
		if( !isset( $lookupTableLinks["cad_prod"] ) ) {
			$lookupTableLinks["cad_prod"] = array();
		}
		if( !isset( $lookupTableLinks["cad_prod"]["itens.genero"] )) {
			$lookupTableLinks["cad_prod"]["itens.genero"] = array();
		}
		$lookupTableLinks["cad_prod"]["itens.genero"]["edit"] = array("table" => "itens", "field" => "genero", "page" => "edit");
		if( !isset( $lookupTableLinks["Sd_ant"] ) ) {
			$lookupTableLinks["Sd_ant"] = array();
		}
		if( !isset( $lookupTableLinks["Sd_ant"]["np_escola.Sd_ant"] )) {
			$lookupTableLinks["Sd_ant"]["np_escola.Sd_ant"] = array();
		}
		$lookupTableLinks["Sd_ant"]["np_escola.Sd_ant"]["edit"] = array("table" => "NP_escola", "field" => "Sd_ant", "page" => "edit");
		if( !isset( $lookupTableLinks["escolas"] ) ) {
			$lookupTableLinks["escolas"] = array();
		}
		if( !isset( $lookupTableLinks["escolas"]["pedidos_escola.cnpj_escola"] )) {
			$lookupTableLinks["escolas"]["pedidos_escola.cnpj_escola"] = array();
		}
		$lookupTableLinks["escolas"]["pedidos_escola.cnpj_escola"]["edit"] = array("table" => "Pedidos_escola", "field" => "cnpj_escola", "page" => "edit");
		if( !isset( $lookupTableLinks["fornecedores"] ) ) {
			$lookupTableLinks["fornecedores"] = array();
		}
		if( !isset( $lookupTableLinks["fornecedores"]["pedidos_escola.cnpj_fornecedor"] )) {
			$lookupTableLinks["fornecedores"]["pedidos_escola.cnpj_fornecedor"] = array();
		}
		$lookupTableLinks["fornecedores"]["pedidos_escola.cnpj_fornecedor"]["edit"] = array("table" => "Pedidos_escola", "field" => "cnpj_fornecedor", "page" => "edit");
		if( !isset( $lookupTableLinks["Consulta Gêneros"] ) ) {
			$lookupTableLinks["Consulta Gêneros"] = array();
		}
		if( !isset( $lookupTableLinks["Consulta Gêneros"]["itens_escola.genero"] )) {
			$lookupTableLinks["Consulta Gêneros"]["itens_escola.genero"] = array();
		}
		$lookupTableLinks["Consulta Gêneros"]["itens_escola.genero"]["edit"] = array("table" => "itens_escola", "field" => "genero", "page" => "edit");
}

?>