<?php
$tdatapedidos_escola = array();
$tdatapedidos_escola[".searchableFields"] = array();
$tdatapedidos_escola[".ShortName"] = "pedidos_escola";
$tdatapedidos_escola[".OwnerID"] = "cnpj_escola";
$tdatapedidos_escola[".OriginalTable"] = "pedidos";


$tdatapedidos_escola[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapedidos_escola[".originalPagesByType"] = $tdatapedidos_escola[".pagesByType"];
$tdatapedidos_escola[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapedidos_escola[".originalPages"] = $tdatapedidos_escola[".pages"];
$tdatapedidos_escola[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapedidos_escola[".originalDefaultPages"] = $tdatapedidos_escola[".defaultPages"];

//	field labels
$fieldLabelspedidos_escola = array();
$fieldToolTipspedidos_escola = array();
$pageTitlespedidos_escola = array();
$placeHolderspedidos_escola = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspedidos_escola["Portuguese(Brazil)"] = array();
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"] = array();
	$placeHolderspedidos_escola["Portuguese(Brazil)"] = array();
	$pageTitlespedidos_escola["Portuguese(Brazil)"] = array();
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["cod"] = "Controle";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["cod"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["cod"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Exercicio"] = "Exercicio";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Exercicio"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Exercicio"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["cnpj_escola"] = "Cnpj Escola";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["cnpj_escola"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["cnpj_escola"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["cnpj_fornecedor"] = "Fornecedor";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["cnpj_fornecedor"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["cnpj_fornecedor"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Saldo"] = "Gastos";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Saldo"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Saldo"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["status"] = "Status";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["status"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["status"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Data_cad"] = "Data";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Data_cad"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Data_cad"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["usuario"] = "Situação DRAE";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["usuario"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["usuario"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Cod_np"] = "Np";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Cod_np"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Cod_np"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Parcela"] = "Parcela";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Parcela"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Parcela"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Valor_np"] = "Crédito";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Valor_np"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Valor_np"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Nome"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Bairro"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Cidade"] = "Cidade";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Cidade"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Cidade"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Valor"] = "Valor Total da NP";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Valor"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Num_NP"] = "Nº NP";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Num_NP"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Num_NP"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["Debito"] = "Gastos Totais";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["Debito"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["Debito"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["valor___debito"] = "Saldo";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["valor___debito"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["valor___debito"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["agf"] = "Agf (30%)";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["agf"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["agf"] = "";
	$fieldLabelspedidos_escola["Portuguese(Brazil)"]["rac_forn"] = "Rac Forn";
	$fieldToolTipspedidos_escola["Portuguese(Brazil)"]["rac_forn"] = "";
	$placeHolderspedidos_escola["Portuguese(Brazil)"]["rac_forn"] = "";
	$pageTitlespedidos_escola["Portuguese(Brazil)"]["masterlist"] = " {%rac_forn}";
	$pageTitlespedidos_escola["Portuguese(Brazil)"]["print"] = "";
	$pageTitlespedidos_escola["Portuguese(Brazil)"]["masterprint"] = "Pedido";
	if (count($fieldToolTipspedidos_escola["Portuguese(Brazil)"]))
		$tdatapedidos_escola[".isUseToolTips"] = true;
}


	$tdatapedidos_escola[".NCSearch"] = true;



$tdatapedidos_escola[".shortTableName"] = "pedidos_escola";
$tdatapedidos_escola[".nSecOptions"] = 1;

$tdatapedidos_escola[".mainTableOwnerID"] = "cnpj_escola";
$tdatapedidos_escola[".entityType"] = 1;
$tdatapedidos_escola[".connId"] = "pedidos_at_localhost";


$tdatapedidos_escola[".strOriginalTableName"] = "pedidos";

	



$tdatapedidos_escola[".showAddInPopup"] = false;

$tdatapedidos_escola[".showEditInPopup"] = false;

$tdatapedidos_escola[".showViewInPopup"] = false;

$tdatapedidos_escola[".listAjax"] = false;
//	temporary
//$tdatapedidos_escola[".listAjax"] = false;

	$tdatapedidos_escola[".audit"] = false;

	$tdatapedidos_escola[".locking"] = false;


$pages = $tdatapedidos_escola[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapedidos_escola[".edit"] = true;
	$tdatapedidos_escola[".afterEditAction"] = 1;
	$tdatapedidos_escola[".closePopupAfterEdit"] = 1;
	$tdatapedidos_escola[".afterEditActionDetTable"] = "itens_escola";
}

if( $pages[PAGE_ADD] ) {
$tdatapedidos_escola[".add"] = true;
$tdatapedidos_escola[".afterAddAction"] = 3;
$tdatapedidos_escola[".closePopupAfterAdd"] = 1;
$tdatapedidos_escola[".afterAddActionDetTable"] = "itens_escola";
}

if( $pages[PAGE_LIST] ) {
	$tdatapedidos_escola[".list"] = true;
}



$tdatapedidos_escola[".strSortControlSettingsJSON"] = "";

$tdatapedidos_escola[".strClickActionJSON"] = "{\"fields\":{\"Cod_np\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data_cad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Exercicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Parcela\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Saldo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Valor_np\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cnpj_escola\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cnpj_fornecedor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cod\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"status\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"usuario\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"itens_escola\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"itens_escola\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatapedidos_escola[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapedidos_escola[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapedidos_escola[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapedidos_escola[".printFriendly"] = true;
}



$tdatapedidos_escola[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapedidos_escola[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapedidos_escola[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapedidos_escola[".isUseAjaxSuggest"] = true;



																																				

$tdatapedidos_escola[".ajaxCodeSnippetAdded"] = false;

$tdatapedidos_escola[".buttonsAdded"] = false;

$tdatapedidos_escola[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapedidos_escola[".isUseTimeForSearch"] = false;


$tdatapedidos_escola[".badgeColor"] = "e07878";


$tdatapedidos_escola[".allSearchFields"] = array();
$tdatapedidos_escola[".filterFields"] = array();
$tdatapedidos_escola[".requiredSearchFields"] = array();

$tdatapedidos_escola[".googleLikeFields"] = array();
$tdatapedidos_escola[".googleLikeFields"][] = "cod";
$tdatapedidos_escola[".googleLikeFields"][] = "Exercicio";
$tdatapedidos_escola[".googleLikeFields"][] = "cnpj_escola";
$tdatapedidos_escola[".googleLikeFields"][] = "cnpj_fornecedor";
$tdatapedidos_escola[".googleLikeFields"][] = "Saldo";
$tdatapedidos_escola[".googleLikeFields"][] = "status";
$tdatapedidos_escola[".googleLikeFields"][] = "Data_cad";
$tdatapedidos_escola[".googleLikeFields"][] = "usuario";
$tdatapedidos_escola[".googleLikeFields"][] = "Cod_np";
$tdatapedidos_escola[".googleLikeFields"][] = "Parcela";
$tdatapedidos_escola[".googleLikeFields"][] = "Valor_np";
$tdatapedidos_escola[".googleLikeFields"][] = "Nome";
$tdatapedidos_escola[".googleLikeFields"][] = "Bairro";
$tdatapedidos_escola[".googleLikeFields"][] = "Cidade";
$tdatapedidos_escola[".googleLikeFields"][] = "Valor";
$tdatapedidos_escola[".googleLikeFields"][] = "Num_NP";
$tdatapedidos_escola[".googleLikeFields"][] = "Debito";
$tdatapedidos_escola[".googleLikeFields"][] = "valor - debito";
$tdatapedidos_escola[".googleLikeFields"][] = "agf";
$tdatapedidos_escola[".googleLikeFields"][] = "rac_forn";



$tdatapedidos_escola[".tableType"] = "list";

$tdatapedidos_escola[".printerPageOrientation"] = 0;
$tdatapedidos_escola[".nPrinterPageScale"] = 100;

$tdatapedidos_escola[".nPrinterSplitRecords"] = 40;

$tdatapedidos_escola[".geocodingEnabled"] = false;










$tdatapedidos_escola[".pageSize"] = 20;

$tdatapedidos_escola[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapedidos_escola[".strOrderBy"] = $tstrOrderBy;

$tdatapedidos_escola[".orderindexes"] = array();


$tdatapedidos_escola[".sqlHead"] = "SELECT pedidos.cod,  pedidos.Exercicio,  pedidos.cnpj_escola,  pedidos.cnpj_fornecedor,  pedidos.Saldo,  pedidos.status,  pedidos.Data_cad,  pedidos.usuario,  pedidos.Cod_np,  pedidos.Parcela,  pedidos.Valor_np,  escolas.Nome,  escolas.Bairro,  escolas.Cidade,  np.Valor,  np.Num_NP,  np.Debito,  np.valor - np.debito AS `valor - debito`,  valor *0.30 AS agf,  fornecedores.`Razão Social` AS rac_forn";
$tdatapedidos_escola[".sqlFrom"] = "FROM pedidos  INNER JOIN escolas ON pedidos.cnpj_escola = escolas.CNPJ  INNER JOIN np ON pedidos.Cod_np = np.Cod_NP  INNER JOIN fornecedores ON pedidos.cnpj_fornecedor = fornecedores.CNPJ";
$tdatapedidos_escola[".sqlWhereExpr"] = "";
$tdatapedidos_escola[".sqlTail"] = "";

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
$tdatapedidos_escola[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapedidos_escola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapedidos_escola[".arrGroupsPerPage"] = $arrGPP;

$tdatapedidos_escola[".highlightSearchResults"] = true;

$tableKeyspedidos_escola = array();
$tableKeyspedidos_escola[] = "cod";
$tableKeyspedidos_escola[] = "cnpj_escola";
$tableKeyspedidos_escola[] = "cnpj_fornecedor";
$tdatapedidos_escola[".Keys"] = $tableKeyspedidos_escola;


$tdatapedidos_escola[".hideMobileList"] = array();




//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","cod");
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


	$tdatapedidos_escola["cod"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "cod";
//	Exercicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Exercicio";
	$fdata["GoodName"] = "Exercicio";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Exercicio");
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


	$tdatapedidos_escola["Exercicio"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Exercicio";
//	cnpj_escola
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cnpj_escola";
	$fdata["GoodName"] = "cnpj_escola";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","cnpj_escola");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
	
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


	$tdatapedidos_escola["cnpj_escola"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "cnpj_escola";
//	cnpj_fornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cnpj_fornecedor";
	$fdata["GoodName"] = "cnpj_fornecedor";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","cnpj_fornecedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cnpj_fornecedor";

		$fdata["sourceSingle"] = "cnpj_fornecedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.cnpj_fornecedor";

	
	
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
	$edata["LookupTable"] = "fornecedores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "CNPJ";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Razão Social";

	

	
	$edata["LookupOrderBy"] = "Razão Social";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatapedidos_escola["cnpj_fornecedor"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "cnpj_fornecedor";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Saldo");
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


	$tdatapedidos_escola["Saldo"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Saldo";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","status");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


	$tdatapedidos_escola["status"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "status";
//	Data_cad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Data_cad";
	$fdata["GoodName"] = "Data_cad";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Data_cad");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapedidos_escola["Data_cad"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Data_cad";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","usuario");
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


	$tdatapedidos_escola["usuario"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "usuario";
//	Cod_np
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cod_np";
	$fdata["GoodName"] = "Cod_np";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Cod_np");
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


	$tdatapedidos_escola["Cod_np"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Cod_np";
//	Parcela
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Parcela";
	$fdata["GoodName"] = "Parcela";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Parcela");
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


	$tdatapedidos_escola["Parcela"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Parcela";
//	Valor_np
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Valor_np";
	$fdata["GoodName"] = "Valor_np";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Valor_np");
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


	$tdatapedidos_escola["Valor_np"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Valor_np";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Nome");
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


	$tdatapedidos_escola["Nome"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Nome";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Bairro");
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


	$tdatapedidos_escola["Bairro"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Bairro";
//	Cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Cidade";
	$fdata["GoodName"] = "Cidade";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Cidade");
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


	$tdatapedidos_escola["Cidade"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Cidade";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Valor");
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


	$tdatapedidos_escola["Valor"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Valor";
//	Num_NP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Num_NP";
	$fdata["GoodName"] = "Num_NP";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Num_NP");
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


	$tdatapedidos_escola["Num_NP"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Num_NP";
//	Debito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Debito";
	$fdata["GoodName"] = "Debito";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","Debito");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Debito";

	
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


	$tdatapedidos_escola["Debito"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "Debito";
//	valor - debito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "valor - debito";
	$fdata["GoodName"] = "valor___debito";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","valor___debito");
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


	$tdatapedidos_escola["valor - debito"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "valor - debito";
//	agf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "agf";
	$fdata["GoodName"] = "agf";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","agf");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "agf";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor *0.30";

	
	
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


	$tdatapedidos_escola["agf"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "agf";
//	rac_forn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "rac_forn";
	$fdata["GoodName"] = "rac_forn";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("Pedidos_escola","rac_forn");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Razão Social";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fornecedores.`Razão Social`";

	
	
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


	$tdatapedidos_escola["rac_forn"] = $fdata;
		$tdatapedidos_escola[".searchableFields"][] = "rac_forn";


$tables_data["Pedidos_escola"]=&$tdatapedidos_escola;
$field_labels["Pedidos_escola"] = &$fieldLabelspedidos_escola;
$fieldToolTips["Pedidos_escola"] = &$fieldToolTipspedidos_escola;
$placeHolders["Pedidos_escola"] = &$placeHolderspedidos_escola;
$page_titles["Pedidos_escola"] = &$pageTitlespedidos_escola;


changeTextControlsToDate( "Pedidos_escola" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Pedidos_escola"] = array();
//	itens_escola
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="itens_escola";
		$detailsParam["dOriginalTable"] = "itens";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "itens_escola";
	$detailsParam["dCaptionTable"] = GetTableCaption("itens_escola");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Pedidos_escola"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Pedidos_escola"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Pedidos_escola"][$dIndex]["masterKeys"][]="cod";

	$detailsTablesData["Pedidos_escola"][$dIndex]["masterKeys"][]="Cod_np";

				$detailsTablesData["Pedidos_escola"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Pedidos_escola"][$dIndex]["detailKeys"][]="cod_ped";

		
	$detailsTablesData["Pedidos_escola"][$dIndex]["detailKeys"][]="cod_np";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Pedidos_escola"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="np";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="NP_escola";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "np_escola";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Pedidos_escola"][0] = $masterParams;
				$masterTablesData["Pedidos_escola"][0]["masterKeys"] = array();
	$masterTablesData["Pedidos_escola"][0]["masterKeys"][]="Cod_NP";
				$masterTablesData["Pedidos_escola"][0]["masterKeys"][]="Escola";
				$masterTablesData["Pedidos_escola"][0]["masterKeys"][]="Parcela";
				$masterTablesData["Pedidos_escola"][0]["detailKeys"] = array();
	$masterTablesData["Pedidos_escola"][0]["detailKeys"][]="Cod_np";
				$masterTablesData["Pedidos_escola"][0]["detailKeys"][]="cnpj_escola";
				$masterTablesData["Pedidos_escola"][0]["detailKeys"][]="Parcela";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pedidos_escola()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pedidos.cod,  pedidos.Exercicio,  pedidos.cnpj_escola,  pedidos.cnpj_fornecedor,  pedidos.Saldo,  pedidos.status,  pedidos.Data_cad,  pedidos.usuario,  pedidos.Cod_np,  pedidos.Parcela,  pedidos.Valor_np,  escolas.Nome,  escolas.Bairro,  escolas.Cidade,  np.Valor,  np.Num_NP,  np.Debito,  np.valor - np.debito AS `valor - debito`,  valor *0.30 AS agf,  fornecedores.`Razão Social` AS rac_forn";
$proto0["m_strFrom"] = "FROM pedidos  INNER JOIN escolas ON pedidos.cnpj_escola = escolas.CNPJ  INNER JOIN np ON pedidos.Cod_np = np.Cod_NP  INNER JOIN fornecedores ON pedidos.cnpj_fornecedor = fornecedores.CNPJ";
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
	"m_srcTableName" => "Pedidos_escola"
));

$proto6["m_sql"] = "pedidos.cod";
$proto6["m_srcTableName"] = "Pedidos_escola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Exercicio",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto8["m_sql"] = "pedidos.Exercicio";
$proto8["m_srcTableName"] = "Pedidos_escola";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cnpj_escola",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto10["m_sql"] = "pedidos.cnpj_escola";
$proto10["m_srcTableName"] = "Pedidos_escola";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cnpj_fornecedor",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto12["m_sql"] = "pedidos.cnpj_fornecedor";
$proto12["m_srcTableName"] = "Pedidos_escola";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto14["m_sql"] = "pedidos.Saldo";
$proto14["m_srcTableName"] = "Pedidos_escola";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto16["m_sql"] = "pedidos.status";
$proto16["m_srcTableName"] = "Pedidos_escola";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Data_cad",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto18["m_sql"] = "pedidos.Data_cad";
$proto18["m_srcTableName"] = "Pedidos_escola";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto20["m_sql"] = "pedidos.usuario";
$proto20["m_srcTableName"] = "Pedidos_escola";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cod_np",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto22["m_sql"] = "pedidos.Cod_np";
$proto22["m_srcTableName"] = "Pedidos_escola";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Parcela",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto24["m_sql"] = "pedidos.Parcela";
$proto24["m_srcTableName"] = "Pedidos_escola";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_np",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "Pedidos_escola"
));

$proto26["m_sql"] = "pedidos.Valor_np";
$proto26["m_srcTableName"] = "Pedidos_escola";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Pedidos_escola"
));

$proto28["m_sql"] = "escolas.Nome";
$proto28["m_srcTableName"] = "Pedidos_escola";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Pedidos_escola"
));

$proto30["m_sql"] = "escolas.Bairro";
$proto30["m_srcTableName"] = "Pedidos_escola";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Cidade",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Pedidos_escola"
));

$proto32["m_sql"] = "escolas.Cidade";
$proto32["m_srcTableName"] = "Pedidos_escola";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "np",
	"m_srcTableName" => "Pedidos_escola"
));

$proto34["m_sql"] = "np.Valor";
$proto34["m_srcTableName"] = "Pedidos_escola";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Num_NP",
	"m_strTable" => "np",
	"m_srcTableName" => "Pedidos_escola"
));

$proto36["m_sql"] = "np.Num_NP";
$proto36["m_srcTableName"] = "Pedidos_escola";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Debito",
	"m_strTable" => "np",
	"m_srcTableName" => "Pedidos_escola"
));

$proto38["m_sql"] = "np.Debito";
$proto38["m_srcTableName"] = "Pedidos_escola";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "np.valor - np.debito"
));

$proto40["m_sql"] = "np.valor - np.debito";
$proto40["m_srcTableName"] = "Pedidos_escola";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "valor - debito";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "valor *0.30"
));

$proto42["m_sql"] = "valor *0.30";
$proto42["m_srcTableName"] = "Pedidos_escola";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "agf";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Razão Social",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "Pedidos_escola"
));

$proto44["m_sql"] = "fornecedores.`Razão Social`";
$proto44["m_srcTableName"] = "Pedidos_escola";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "rac_forn";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "pedidos";
$proto47["m_srcTableName"] = "Pedidos_escola";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "cod";
$proto47["m_columns"][] = "Exercicio";
$proto47["m_columns"][] = "cnpj_escola";
$proto47["m_columns"][] = "cnpj_fornecedor";
$proto47["m_columns"][] = "Saldo";
$proto47["m_columns"][] = "status";
$proto47["m_columns"][] = "Data_cad";
$proto47["m_columns"][] = "usuario";
$proto47["m_columns"][] = "Cod_np";
$proto47["m_columns"][] = "Parcela";
$proto47["m_columns"][] = "Valor_np";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "pedidos";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "Pedidos_escola";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_INNERJOIN";
			$proto51=array();
$proto51["m_strName"] = "escolas";
$proto51["m_srcTableName"] = "Pedidos_escola";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "cod_escola";
$proto51["m_columns"][] = "CNPJ";
$proto51["m_columns"][] = "Nome";
$proto51["m_columns"][] = "Endereço";
$proto51["m_columns"][] = "Email";
$proto51["m_columns"][] = "Telefone";
$proto51["m_columns"][] = "Descrição";
$proto51["m_columns"][] = "Drae";
$proto51["m_columns"][] = "Bairro";
$proto51["m_columns"][] = "Cidade";
$proto51["m_columns"][] = "Estado";
$proto51["m_columns"][] = "Lat";
$proto51["m_columns"][] = "Lng";
$proto51["m_columns"][] = "Direc";
$proto51["m_columns"][] = "Cep";
$proto51["m_columns"][] = "Tec_resp";
$proto51["m_columns"][] = "Arquivos";
$proto51["m_columns"][] = "Obs";
$proto51["m_columns"][] = "EmailDrae";
$proto51["m_columns"][] = "Municipio";
$proto51["m_columns"][] = "cod_fee";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "INNER JOIN escolas ON pedidos.cnpj_escola = escolas.CNPJ";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "Pedidos_escola";
$proto52=array();
$proto52["m_sql"] = "escolas.CNPJ = pedidos.cnpj_escola";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Pedidos_escola"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= pedidos.cnpj_escola";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_INNERJOIN";
			$proto55=array();
$proto55["m_strName"] = "np";
$proto55["m_srcTableName"] = "Pedidos_escola";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "Cod_NP";
$proto55["m_columns"][] = "Parcela";
$proto55["m_columns"][] = "Data";
$proto55["m_columns"][] = "Valor";
$proto55["m_columns"][] = "Saldo";
$proto55["m_columns"][] = "Escola";
$proto55["m_columns"][] = "Num_NP";
$proto55["m_columns"][] = "Execício";
$proto55["m_columns"][] = "Debito";
$proto55["m_columns"][] = "Sd_ant";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "INNER JOIN np ON pedidos.Cod_np = np.Cod_NP";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "Pedidos_escola";
$proto56=array();
$proto56["m_sql"] = "np.Cod_NP = pedidos.Cod_np";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cod_NP",
	"m_strTable" => "np",
	"m_srcTableName" => "Pedidos_escola"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= pedidos.Cod_np";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_INNERJOIN";
			$proto59=array();
$proto59["m_strName"] = "fornecedores";
$proto59["m_srcTableName"] = "Pedidos_escola";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id";
$proto59["m_columns"][] = "CNPJ";
$proto59["m_columns"][] = "Razão Social";
$proto59["m_columns"][] = "Telefone Fixo";
$proto59["m_columns"][] = "Responsável";
$proto59["m_columns"][] = "Endereço";
$proto59["m_columns"][] = "Email";
$proto59["m_columns"][] = "Telefone Celular";
$proto59["m_columns"][] = "OBS";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "INNER JOIN fornecedores ON pedidos.cnpj_fornecedor = fornecedores.CNPJ";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "Pedidos_escola";
$proto60=array();
$proto60["m_sql"] = "fornecedores.CNPJ = pedidos.cnpj_fornecedor";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "Pedidos_escola"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= pedidos.cnpj_fornecedor";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Pedidos_escola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pedidos_escola = createSqlQuery_pedidos_escola();


	
		;

																				

$tdatapedidos_escola[".sqlquery"] = $queryData_pedidos_escola;



include_once(getabspath("include/pedidos_escola_events.php"));
$tdatapedidos_escola[".hasEvents"] = true;

?>