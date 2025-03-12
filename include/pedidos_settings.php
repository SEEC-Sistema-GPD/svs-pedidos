<?php
$tdatapedidos = array();
$tdatapedidos[".searchableFields"] = array();
$tdatapedidos[".ShortName"] = "pedidos";
$tdatapedidos[".OwnerID"] = "cnpj_fornecedor";
$tdatapedidos[".OriginalTable"] = "pedidos";


$tdatapedidos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" );
$tdatapedidos[".originalPagesByType"] = $tdatapedidos[".pagesByType"];
$tdatapedidos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" ) );
$tdatapedidos[".originalPages"] = $tdatapedidos[".pages"];
$tdatapedidos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print1\",\"search\":\"search\"}" );
$tdatapedidos[".originalDefaultPages"] = $tdatapedidos[".defaultPages"];

//	field labels
$fieldLabelspedidos = array();
$fieldToolTipspedidos = array();
$pageTitlespedidos = array();
$placeHolderspedidos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspedidos["Portuguese(Brazil)"] = array();
	$fieldToolTipspedidos["Portuguese(Brazil)"] = array();
	$placeHolderspedidos["Portuguese(Brazil)"] = array();
	$pageTitlespedidos["Portuguese(Brazil)"] = array();
	$fieldLabelspedidos["Portuguese(Brazil)"]["cod"] = "Controle";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["cod"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["cod"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Exercicio"] = "Exercicio";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Exercicio"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Exercicio"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["cnpj_escola"] = "Cnpj Escola";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["cnpj_escola"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["cnpj_escola"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["cnpj_fornecedor"] = "Fornecedor";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["cnpj_fornecedor"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["cnpj_fornecedor"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Saldo"] = "Gastos";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Saldo"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Saldo"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["status"] = "Status";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["status"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["status"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Data_cad"] = "Data";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Data_cad"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Data_cad"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["usuario"] = "Situação Drae";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["usuario"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["usuario"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Cod_np"] = "Np";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Cod_np"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Cod_np"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Parcela"] = "Parcela";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Parcela"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Parcela"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Bairro"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Cidade"] = "Cidade";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Cidade"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Cidade"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Valor_np"] = "Crédito";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Valor_np"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Valor_np"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Nome"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Debito"] = "Gasto totais";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Debito"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Debito"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Valor"] = "Valor total da NP";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Valor"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["valor___debito"] = "Saldo";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["valor___debito"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["valor___debito"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["agf"] = "Agf (30%)";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["agf"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["agf"] = "";
	$fieldLabelspedidos["Portuguese(Brazil)"]["Num_NP"] = "Nº NP";
	$fieldToolTipspedidos["Portuguese(Brazil)"]["Num_NP"] = "";
	$placeHolderspedidos["Portuguese(Brazil)"]["Num_NP"] = "";
	$pageTitlespedidos["Portuguese(Brazil)"]["list"] = "Romaneios";
	$pageTitlespedidos["Portuguese(Brazil)"]["masterprint"] = "Pedido";
	$pageTitlespedidos["Portuguese(Brazil)"]["masterlist"] = "Pedido Para:    {%cnpj_fornecedor}";
	$pageTitlespedidos["Portuguese(Brazil)"]["print1"] = "Pedido";
	if (count($fieldToolTipspedidos["Portuguese(Brazil)"]))
		$tdatapedidos[".isUseToolTips"] = true;
}


	$tdatapedidos[".NCSearch"] = true;



$tdatapedidos[".shortTableName"] = "pedidos";
$tdatapedidos[".nSecOptions"] = 0;

$tdatapedidos[".mainTableOwnerID"] = "cnpj_fornecedor";
$tdatapedidos[".entityType"] = 0;
$tdatapedidos[".connId"] = "pedidos_at_localhost";


$tdatapedidos[".strOriginalTableName"] = "pedidos";

	



$tdatapedidos[".showAddInPopup"] = false;

$tdatapedidos[".showEditInPopup"] = false;

$tdatapedidos[".showViewInPopup"] = false;

$tdatapedidos[".listAjax"] = false;
//	temporary
//$tdatapedidos[".listAjax"] = false;

	$tdatapedidos[".audit"] = false;

	$tdatapedidos[".locking"] = false;


$pages = $tdatapedidos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapedidos[".edit"] = true;
	$tdatapedidos[".afterEditAction"] = 0;
	$tdatapedidos[".closePopupAfterEdit"] = 0;
	$tdatapedidos[".afterEditActionDetTable"] = "itens";
}

if( $pages[PAGE_ADD] ) {
$tdatapedidos[".add"] = true;
$tdatapedidos[".afterAddAction"] = 3;
$tdatapedidos[".closePopupAfterAdd"] = 1;
$tdatapedidos[".afterAddActionDetTable"] = "itens";
}

if( $pages[PAGE_LIST] ) {
	$tdatapedidos[".list"] = true;
}



$tdatapedidos[".strSortControlSettingsJSON"] = "";

$tdatapedidos[".strClickActionJSON"] = "{\"fields\":{\"Bairro\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"itens\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"itens\",\"url\":\"\"}},\"Cidade\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cod_np\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data_cad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Exercicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Nome\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Parcela\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Saldo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Valor_np\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cnpj_escola\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cnpj_fornecedor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cod\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"status\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"itens\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"itens\",\"url\":\"\"}},\"usuario\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"itens\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"itens\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatapedidos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapedidos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapedidos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapedidos[".printFriendly"] = true;
}



$tdatapedidos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapedidos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapedidos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapedidos[".isUseAjaxSuggest"] = true;



																																				

$tdatapedidos[".ajaxCodeSnippetAdded"] = false;

$tdatapedidos[".buttonsAdded"] = false;

$tdatapedidos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapedidos[".isUseTimeForSearch"] = false;


$tdatapedidos[".badgeColor"] = "5f9ea0";


$tdatapedidos[".allSearchFields"] = array();
$tdatapedidos[".filterFields"] = array();
$tdatapedidos[".requiredSearchFields"] = array();

$tdatapedidos[".googleLikeFields"] = array();
$tdatapedidos[".googleLikeFields"][] = "cod";
$tdatapedidos[".googleLikeFields"][] = "Exercicio";
$tdatapedidos[".googleLikeFields"][] = "cnpj_escola";
$tdatapedidos[".googleLikeFields"][] = "cnpj_fornecedor";
$tdatapedidos[".googleLikeFields"][] = "Saldo";
$tdatapedidos[".googleLikeFields"][] = "status";
$tdatapedidos[".googleLikeFields"][] = "Data_cad";
$tdatapedidos[".googleLikeFields"][] = "usuario";
$tdatapedidos[".googleLikeFields"][] = "Cod_np";
$tdatapedidos[".googleLikeFields"][] = "Parcela";
$tdatapedidos[".googleLikeFields"][] = "Bairro";
$tdatapedidos[".googleLikeFields"][] = "Cidade";
$tdatapedidos[".googleLikeFields"][] = "Valor_np";
$tdatapedidos[".googleLikeFields"][] = "Nome";
$tdatapedidos[".googleLikeFields"][] = "Valor";
$tdatapedidos[".googleLikeFields"][] = "Debito";
$tdatapedidos[".googleLikeFields"][] = "valor - debito";
$tdatapedidos[".googleLikeFields"][] = "agf";
$tdatapedidos[".googleLikeFields"][] = "Num_NP";



$tdatapedidos[".tableType"] = "list";

$tdatapedidos[".printerPageOrientation"] = 0;
$tdatapedidos[".nPrinterPageScale"] = 100;

$tdatapedidos[".nPrinterSplitRecords"] = 40;

$tdatapedidos[".geocodingEnabled"] = false;










$tdatapedidos[".pageSize"] = 40;

$tdatapedidos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapedidos[".strOrderBy"] = $tstrOrderBy;

$tdatapedidos[".orderindexes"] = array();


$tdatapedidos[".sqlHead"] = "SELECT pedidos.cod,  pedidos.Exercicio,  pedidos.cnpj_escola,  pedidos.cnpj_fornecedor,  pedidos.Saldo,  pedidos.status,  pedidos.Data_cad,  pedidos.usuario,  pedidos.Cod_np,  pedidos.Parcela,  escolas.Bairro,  escolas.Cidade,  pedidos.Valor_np,  escolas.Nome,  np.Valor,  np.Debito,  np.valor - np.debito AS `valor - debito`,  valor * 0.30 AS agf,  np.Num_NP";
$tdatapedidos[".sqlFrom"] = "FROM pedidos  INNER JOIN escolas ON pedidos.cnpj_escola = escolas.CNPJ  INNER JOIN np ON pedidos.Cod_np = np.Cod_NP";
$tdatapedidos[".sqlWhereExpr"] = "";
$tdatapedidos[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapedidos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapedidos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapedidos[".arrGroupsPerPage"] = $arrGPP;

$tdatapedidos[".highlightSearchResults"] = true;

$tableKeyspedidos = array();
$tableKeyspedidos[] = "cod";
$tableKeyspedidos[] = "cnpj_escola";
$tableKeyspedidos[] = "cnpj_fornecedor";
$tdatapedidos[".Keys"] = $tableKeyspedidos;


$tdatapedidos[".hideMobileList"] = array();
		$tdatapedidos[".hideMobileList"][5] = array();
$tdatapedidos[".hideMobileList"][5]["cnpj_escola"] = true;
		$tdatapedidos[".hideMobileList"][5]["Saldo"] = true;
		$tdatapedidos[".hideMobileList"][5]["status"] = true;
		$tdatapedidos[".hideMobileList"][5]["usuario"] = true;
		$tdatapedidos[".hideMobileList"][5]["Cod_np"] = true;
		$tdatapedidos[".hideMobileList"][5]["Parcela"] = true;




//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","cod");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cod";

		$fdata["sourceSingle"] = "cod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.cod";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["cod"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "cod";
//	Exercicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Exercicio";
	$fdata["GoodName"] = "Exercicio";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","Exercicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Exercicio";

		$fdata["sourceSingle"] = "Exercicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.Exercicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Exercicio"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Exercicio";
//	cnpj_escola
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cnpj_escola";
	$fdata["GoodName"] = "cnpj_escola";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","cnpj_escola");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cnpj_escola";

		$fdata["sourceSingle"] = "cnpj_escola";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.cnpj_escola";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "escolas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "CNPJ";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["cnpj_escola"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "cnpj_escola";
//	cnpj_fornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cnpj_fornecedor";
	$fdata["GoodName"] = "cnpj_fornecedor";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","cnpj_fornecedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cnpj_fornecedor";

		$fdata["sourceSingle"] = "cnpj_fornecedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.cnpj_fornecedor";

	
	
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fornecedores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "CNPJ";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Razão Social";

	

	
	$edata["LookupOrderBy"] = "Razão Social";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["cnpj_fornecedor"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "cnpj_fornecedor";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","Saldo");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Saldo";

		$fdata["sourceSingle"] = "Saldo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.Saldo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "cod";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Saldo"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Saldo";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["status"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "status";
//	Data_cad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Data_cad";
	$fdata["GoodName"] = "Data_cad";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","Data_cad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Data_cad";

		$fdata["sourceSingle"] = "Data_cad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.Data_cad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "cod";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Data_cad"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Data_cad";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario";

		$fdata["sourceSingle"] = "usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.usuario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "alternativa";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "valor";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "valor";

	

	
	$edata["LookupOrderBy"] = "valor";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["usuario"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "usuario";
//	Cod_np
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cod_np";
	$fdata["GoodName"] = "Cod_np";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","Cod_np");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cod_np";

		$fdata["sourceSingle"] = "Cod_np";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.Cod_np";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Cod_np"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Cod_np";
//	Parcela
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Parcela";
	$fdata["GoodName"] = "Parcela";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","Parcela");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Parcela";

		$fdata["sourceSingle"] = "Parcela";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.Parcela";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Parcela"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Parcela";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("pedidos","Bairro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Bairro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Bairro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Bairro"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Bairro";
//	Cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Cidade";
	$fdata["GoodName"] = "Cidade";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("pedidos","Cidade");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cidade";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Cidade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Cidade"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Cidade";
//	Valor_np
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Valor_np";
	$fdata["GoodName"] = "Valor_np";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","Valor_np");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor_np";

		$fdata["sourceSingle"] = "Valor_np";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.Valor_np";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Valor_np"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Valor_np";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("pedidos","Nome");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Nome";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Nome"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Nome";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("pedidos","Valor");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Valor"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Valor";
//	Debito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Debito";
	$fdata["GoodName"] = "Debito";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("pedidos","Debito");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Debito";

		$fdata["sourceSingle"] = "debito";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Debito";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Debito"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Debito";
//	valor - debito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "valor - debito";
	$fdata["GoodName"] = "valor___debito";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("pedidos","valor___debito");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valor - debito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.valor - np.debito";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["valor - debito"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "valor - debito";
//	agf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "agf";
	$fdata["GoodName"] = "agf";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("pedidos","agf");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "agf";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor * 0.30";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["agf"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "agf";
//	Num_NP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Num_NP";
	$fdata["GoodName"] = "Num_NP";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("pedidos","Num_NP");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Num_NP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Num_NP";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos["Num_NP"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Num_NP";


$tables_data["pedidos"]=&$tdatapedidos;
$field_labels["pedidos"] = &$fieldLabelspedidos;
$fieldToolTips["pedidos"] = &$fieldToolTipspedidos;
$placeHolders["pedidos"] = &$placeHolderspedidos;
$page_titles["pedidos"] = &$pageTitlespedidos;


changeTextControlsToDate( "pedidos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pedidos"] = array();
//	itens
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="itens";
		$detailsParam["dOriginalTable"] = "itens";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "itens";
	$detailsParam["dCaptionTable"] = GetTableCaption("itens");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pedidos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pedidos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pedidos"][$dIndex]["masterKeys"][]="cod";

	$detailsTablesData["pedidos"][$dIndex]["masterKeys"][]="Cod_np";

				$detailsTablesData["pedidos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pedidos"][$dIndex]["detailKeys"][]="cod_ped";

		
	$detailsTablesData["pedidos"][$dIndex]["detailKeys"][]="cod_np";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pedidos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="np";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="np";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "np";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pedidos"][0] = $masterParams;
				$masterTablesData["pedidos"][0]["masterKeys"] = array();
	$masterTablesData["pedidos"][0]["masterKeys"][]="Cod_NP";
				$masterTablesData["pedidos"][0]["masterKeys"][]="Escola";
				$masterTablesData["pedidos"][0]["masterKeys"][]="Parcela";
				$masterTablesData["pedidos"][0]["detailKeys"] = array();
	$masterTablesData["pedidos"][0]["detailKeys"][]="Cod_np";
				$masterTablesData["pedidos"][0]["detailKeys"][]="cnpj_escola";
				$masterTablesData["pedidos"][0]["detailKeys"][]="Parcela";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pedidos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pedidos.cod,  pedidos.Exercicio,  pedidos.cnpj_escola,  pedidos.cnpj_fornecedor,  pedidos.Saldo,  pedidos.status,  pedidos.Data_cad,  pedidos.usuario,  pedidos.Cod_np,  pedidos.Parcela,  escolas.Bairro,  escolas.Cidade,  pedidos.Valor_np,  escolas.Nome,  np.Valor,  np.Debito,  np.valor - np.debito AS `valor - debito`,  valor * 0.30 AS agf,  np.Num_NP";
$proto0["m_strFrom"] = "FROM pedidos  INNER JOIN escolas ON pedidos.cnpj_escola = escolas.CNPJ  INNER JOIN np ON pedidos.Cod_np = np.Cod_NP";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "cod",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto6["m_sql"] = "pedidos.cod";
$proto6["m_srcTableName"] = "pedidos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Exercicio",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto8["m_sql"] = "pedidos.Exercicio";
$proto8["m_srcTableName"] = "pedidos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cnpj_escola",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto10["m_sql"] = "pedidos.cnpj_escola";
$proto10["m_srcTableName"] = "pedidos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cnpj_fornecedor",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto12["m_sql"] = "pedidos.cnpj_fornecedor";
$proto12["m_srcTableName"] = "pedidos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto14["m_sql"] = "pedidos.Saldo";
$proto14["m_srcTableName"] = "pedidos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto16["m_sql"] = "pedidos.status";
$proto16["m_srcTableName"] = "pedidos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Data_cad",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto18["m_sql"] = "pedidos.Data_cad";
$proto18["m_srcTableName"] = "pedidos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto20["m_sql"] = "pedidos.usuario";
$proto20["m_srcTableName"] = "pedidos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cod_np",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto22["m_sql"] = "pedidos.Cod_np";
$proto22["m_srcTableName"] = "pedidos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Parcela",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto24["m_sql"] = "pedidos.Parcela";
$proto24["m_srcTableName"] = "pedidos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "escolas",
	"m_srcTableName" => "pedidos"
));

$proto26["m_sql"] = "escolas.Bairro";
$proto26["m_srcTableName"] = "pedidos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Cidade",
	"m_strTable" => "escolas",
	"m_srcTableName" => "pedidos"
));

$proto28["m_sql"] = "escolas.Cidade";
$proto28["m_srcTableName"] = "pedidos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_np",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto30["m_sql"] = "pedidos.Valor_np";
$proto30["m_srcTableName"] = "pedidos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "escolas",
	"m_srcTableName" => "pedidos"
));

$proto32["m_sql"] = "escolas.Nome";
$proto32["m_srcTableName"] = "pedidos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "np",
	"m_srcTableName" => "pedidos"
));

$proto34["m_sql"] = "np.Valor";
$proto34["m_srcTableName"] = "pedidos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Debito",
	"m_strTable" => "np",
	"m_srcTableName" => "pedidos"
));

$proto36["m_sql"] = "np.Debito";
$proto36["m_srcTableName"] = "pedidos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "np.valor - np.debito"
));

$proto38["m_sql"] = "np.valor - np.debito";
$proto38["m_srcTableName"] = "pedidos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "valor - debito";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "valor * 0.30"
));

$proto40["m_sql"] = "valor * 0.30";
$proto40["m_srcTableName"] = "pedidos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "agf";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Num_NP",
	"m_strTable" => "np",
	"m_srcTableName" => "pedidos"
));

$proto42["m_sql"] = "np.Num_NP";
$proto42["m_srcTableName"] = "pedidos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "pedidos";
$proto45["m_srcTableName"] = "pedidos";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "cod";
$proto45["m_columns"][] = "Exercicio";
$proto45["m_columns"][] = "cnpj_escola";
$proto45["m_columns"][] = "cnpj_fornecedor";
$proto45["m_columns"][] = "Saldo";
$proto45["m_columns"][] = "status";
$proto45["m_columns"][] = "Data_cad";
$proto45["m_columns"][] = "usuario";
$proto45["m_columns"][] = "Cod_np";
$proto45["m_columns"][] = "Parcela";
$proto45["m_columns"][] = "Valor_np";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "pedidos";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "pedidos";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_INNERJOIN";
			$proto49=array();
$proto49["m_strName"] = "escolas";
$proto49["m_srcTableName"] = "pedidos";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "cod_escola";
$proto49["m_columns"][] = "CNPJ";
$proto49["m_columns"][] = "Nome";
$proto49["m_columns"][] = "Endereço";
$proto49["m_columns"][] = "Email";
$proto49["m_columns"][] = "Telefone";
$proto49["m_columns"][] = "Descrição";
$proto49["m_columns"][] = "Drae";
$proto49["m_columns"][] = "Bairro";
$proto49["m_columns"][] = "Cidade";
$proto49["m_columns"][] = "Estado";
$proto49["m_columns"][] = "Lat";
$proto49["m_columns"][] = "Lng";
$proto49["m_columns"][] = "Direc";
$proto49["m_columns"][] = "Cep";
$proto49["m_columns"][] = "Tec_resp";
$proto49["m_columns"][] = "Arquivos";
$proto49["m_columns"][] = "Obs";
$proto49["m_columns"][] = "EmailDrae";
$proto49["m_columns"][] = "Municipio";
$proto49["m_columns"][] = "cod_fee";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "INNER JOIN escolas ON pedidos.cnpj_escola = escolas.CNPJ";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "pedidos";
$proto50=array();
$proto50["m_sql"] = "escolas.CNPJ = pedidos.cnpj_escola";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "escolas",
	"m_srcTableName" => "pedidos"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= pedidos.cnpj_escola";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_INNERJOIN";
			$proto53=array();
$proto53["m_strName"] = "np";
$proto53["m_srcTableName"] = "pedidos";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "Cod_NP";
$proto53["m_columns"][] = "Parcela";
$proto53["m_columns"][] = "Data";
$proto53["m_columns"][] = "Valor";
$proto53["m_columns"][] = "Saldo";
$proto53["m_columns"][] = "Escola";
$proto53["m_columns"][] = "Num_NP";
$proto53["m_columns"][] = "Execício";
$proto53["m_columns"][] = "Debito";
$proto53["m_columns"][] = "Sd_ant";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN np ON pedidos.Cod_np = np.Cod_NP";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "pedidos";
$proto54=array();
$proto54["m_sql"] = "np.Cod_NP = pedidos.Cod_np";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cod_NP",
	"m_strTable" => "np",
	"m_srcTableName" => "pedidos"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= pedidos.Cod_np";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pedidos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pedidos = createSqlQuery_pedidos();


	
		;

																			

$tdatapedidos[".sqlquery"] = $queryData_pedidos;



include_once(getabspath("include/pedidos_events.php"));
$tdatapedidos[".hasEvents"] = true;

?>