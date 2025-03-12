<?php
$tdatanp = array();
$tdatanp[".searchableFields"] = array();
$tdatanp[".ShortName"] = "np";
$tdatanp[".OwnerID"] = "Escola";
$tdatanp[".OriginalTable"] = "np";


$tdatanp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatanp[".originalPagesByType"] = $tdatanp[".pagesByType"];
$tdatanp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatanp[".originalPages"] = $tdatanp[".pages"];
$tdatanp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatanp[".originalDefaultPages"] = $tdatanp[".defaultPages"];

//	field labels
$fieldLabelsnp = array();
$fieldToolTipsnp = array();
$pageTitlesnp = array();
$placeHoldersnp = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsnp["Portuguese(Brazil)"] = array();
	$fieldToolTipsnp["Portuguese(Brazil)"] = array();
	$placeHoldersnp["Portuguese(Brazil)"] = array();
	$pageTitlesnp["Portuguese(Brazil)"] = array();
	$fieldLabelsnp["Portuguese(Brazil)"]["Cod_NP"] = "Codigo da NP";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Cod_NP"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Cod_NP"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Parcela"] = "Parcela";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Parcela"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Parcela"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Valor"] = "Crédito";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Saldo"] = "Repasse";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Saldo"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Saldo"] = "Sem pontou ou vírgula";
	$fieldLabelsnp["Portuguese(Brazil)"]["Escola"] = "Escola";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Escola"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Escola"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Num_NP"] = "Nº NP";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Num_NP"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Num_NP"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Exec_cio"] = "Execício";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Exec_cio"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Exec_cio"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Debito"] = "Gastos";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Debito"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Debito"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["saldo1"] = "Saldo";
	$fieldToolTipsnp["Portuguese(Brazil)"]["saldo1"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["saldo1"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["agf"] = "Agf (30 %)";
	$fieldToolTipsnp["Portuguese(Brazil)"]["agf"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["agf"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Tec_resp"] = "Técnico";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Tec_resp"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Tec_resp"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Drae"] = "Drae";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Drae"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Drae"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Bairro"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Direc"] = "Direc";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Direc"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Direc"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Municipio"] = "Municipio";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Municipio"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Municipio"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["fullname"] = "Técnico";
	$fieldToolTipsnp["Portuguese(Brazil)"]["fullname"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["fullname"] = "";
	$fieldLabelsnp["Portuguese(Brazil)"]["Sd_ant"] = "Saldo Anterior";
	$fieldToolTipsnp["Portuguese(Brazil)"]["Sd_ant"] = "";
	$placeHoldersnp["Portuguese(Brazil)"]["Sd_ant"] = "";
	$pageTitlesnp["Portuguese(Brazil)"]["masterlist"] = "Pedidos Para:  {%Nome}";
	$pageTitlesnp["Portuguese(Brazil)"]["add"] = " Adicionar Nova Parcela";
	$pageTitlesnp["Portuguese(Brazil)"]["masterprint"] = "Np este {%Cod_NP}";
	$pageTitlesnp["Portuguese(Brazil)"]["list"] = "";
	$pageTitlesnp["Portuguese(Brazil)"]["print"] = "Relatório de Np";
	if (count($fieldToolTipsnp["Portuguese(Brazil)"]))
		$tdatanp[".isUseToolTips"] = true;
}


	$tdatanp[".NCSearch"] = true;



$tdatanp[".shortTableName"] = "np";
$tdatanp[".nSecOptions"] = 1;

$tdatanp[".mainTableOwnerID"] = "Escola";
$tdatanp[".entityType"] = 0;
$tdatanp[".connId"] = "pedidos_at_localhost";


$tdatanp[".strOriginalTableName"] = "np";

	



$tdatanp[".showAddInPopup"] = false;

$tdatanp[".showEditInPopup"] = false;

$tdatanp[".showViewInPopup"] = false;

$tdatanp[".listAjax"] = false;
//	temporary
//$tdatanp[".listAjax"] = false;

	$tdatanp[".audit"] = false;

	$tdatanp[".locking"] = false;


$pages = $tdatanp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanp[".edit"] = true;
	$tdatanp[".afterEditAction"] = 0;
	$tdatanp[".closePopupAfterEdit"] = 1;
	$tdatanp[".afterEditActionDetTable"] = "pedidos";
}

if( $pages[PAGE_ADD] ) {
$tdatanp[".add"] = true;
$tdatanp[".afterAddAction"] = 0;
$tdatanp[".closePopupAfterAdd"] = 0;
$tdatanp[".afterAddActionDetTable"] = "pedidos";
}

if( $pages[PAGE_LIST] ) {
	$tdatanp[".list"] = true;
}



$tdatanp[".strSortControlSettingsJSON"] = "";

$tdatanp[".strClickActionJSON"] = "{\"fields\":{\"Cod_NP\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Debito\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Escola\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Execício\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Nome\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Num_NP\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Parcela\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Saldo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Valor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"saldo1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"pedidos\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"pedidos\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatanp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanp[".printFriendly"] = true;
}



$tdatanp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanp[".isUseAjaxSuggest"] = true;



																																				

$tdatanp[".ajaxCodeSnippetAdded"] = false;

$tdatanp[".buttonsAdded"] = false;

$tdatanp[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanp[".isUseTimeForSearch"] = false;


$tdatanp[".badgeColor"] = "9cd13a";


$tdatanp[".allSearchFields"] = array();
$tdatanp[".filterFields"] = array();
$tdatanp[".requiredSearchFields"] = array();

$tdatanp[".googleLikeFields"] = array();
$tdatanp[".googleLikeFields"][] = "Nome";
$tdatanp[".googleLikeFields"][] = "Drae";
$tdatanp[".googleLikeFields"][] = "Bairro";
$tdatanp[".googleLikeFields"][] = "Direc";
$tdatanp[".googleLikeFields"][] = "Municipio";
$tdatanp[".googleLikeFields"][] = "fullname";
$tdatanp[".googleLikeFields"][] = "Sd_ant";



$tdatanp[".tableType"] = "list";

$tdatanp[".printerPageOrientation"] = 0;
$tdatanp[".nPrinterPageScale"] = 100;

$tdatanp[".nPrinterSplitRecords"] = 40;

$tdatanp[".geocodingEnabled"] = false;










$tdatanp[".pageSize"] = 40;

$tdatanp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanp[".strOrderBy"] = $tstrOrderBy;

$tdatanp[".orderindexes"] = array();


$tdatanp[".sqlHead"] = "SELECT np.Cod_NP,  np.Parcela,  np.`Data`,  np.Valor,  np.Saldo,  np.Escola,  np.Num_NP,  np.`Execício`,  np.Debito,  (COALESCE(valor, 0) - COALESCE(debito, 0)) AS saldo1,  escolas.Nome,  valor * 0.30 AS agf,  escolas.Tec_resp,  escolas.Drae,  escolas.Bairro,  escolas.Direc,  escolas.Municipio,  pedidos_usuarios.fullname,  np.Sd_ant";
$tdatanp[".sqlFrom"] = "FROM np  INNER JOIN escolas ON np.Escola = escolas.CNPJ  INNER JOIN pedidos_usuarios ON escolas.Tec_resp = pedidos_usuarios.username";
$tdatanp[".sqlWhereExpr"] = "";
$tdatanp[".sqlTail"] = "";

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
$tdatanp[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanp[".arrGroupsPerPage"] = $arrGPP;

$tdatanp[".highlightSearchResults"] = true;

$tableKeysnp = array();
$tableKeysnp[] = "Cod_NP";
$tableKeysnp[] = "Escola";
$tdatanp[".Keys"] = $tableKeysnp;


$tdatanp[".hideMobileList"] = array();
		$tdatanp[".hideMobileList"][5] = array();
$tdatanp[".hideMobileList"][5]["Cod_NP"] = true;
		$tdatanp[".hideMobileList"][5]["Escola"] = true;
		$tdatanp[".hideMobileList"][5]["Nome"] = true;




//	Cod_NP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cod_NP";
	$fdata["GoodName"] = "Cod_NP";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Cod_NP");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Cod_NP";

		$fdata["sourceSingle"] = "Cod_NP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Cod_NP";

	
	
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


	$tdatanp["Cod_NP"] = $fdata;
		$tdatanp[".searchableFields"][] = "Cod_NP";
//	Parcela
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Parcela";
	$fdata["GoodName"] = "Parcela";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Parcela");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Parcela";

		$fdata["sourceSingle"] = "Parcela";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Parcela";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatanp["Parcela"] = $fdata;
		$tdatanp[".searchableFields"][] = "Parcela";
//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Data");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Data";

		$fdata["sourceSingle"] = "Data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.`Data`";

	
	
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


	$tdatanp["Data"] = $fdata;
		$tdatanp[".searchableFields"][] = "Data";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Valor");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor";

		$fdata["sourceSingle"] = "Valor";

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


	$tdatanp["Valor"] = $fdata;
		$tdatanp[".searchableFields"][] = "Valor";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Saldo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Saldo";

		$fdata["sourceSingle"] = "Saldo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Saldo";

	
	
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


	$tdatanp["Saldo"] = $fdata;
		$tdatanp[".searchableFields"][] = "Saldo";
//	Escola
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Escola";
	$fdata["GoodName"] = "Escola";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Escola");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Escola";

		$fdata["sourceSingle"] = "Escola";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Escola";

	
	
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


	$tdatanp["Escola"] = $fdata;
		$tdatanp[".searchableFields"][] = "Escola";
//	Num_NP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Num_NP";
	$fdata["GoodName"] = "Num_NP";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Num_NP");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Num_NP";

		$fdata["sourceSingle"] = "Num_NP";

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


	$tdatanp["Num_NP"] = $fdata;
		$tdatanp[".searchableFields"][] = "Num_NP";
//	Execício
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Execício";
	$fdata["GoodName"] = "Exec_cio";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Exec_cio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Execício";

		$fdata["sourceSingle"] = "Execício";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.`Execício`";

	
	
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


	$tdatanp["Execício"] = $fdata;
		$tdatanp[".searchableFields"][] = "Execício";
//	Debito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Debito";
	$fdata["GoodName"] = "Debito";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Debito");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Debito";

		$fdata["sourceSingle"] = "Debito";

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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatanp["Debito"] = $fdata;
		$tdatanp[".searchableFields"][] = "Debito";
//	saldo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "saldo1";
	$fdata["GoodName"] = "saldo1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("np","saldo1");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "saldo1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(COALESCE(valor, 0) - COALESCE(debito, 0))";

	
	
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


	$tdatanp["saldo1"] = $fdata;
		$tdatanp[".searchableFields"][] = "saldo1";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("np","Nome");
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


	$tdatanp["Nome"] = $fdata;
		$tdatanp[".searchableFields"][] = "Nome";
//	agf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "agf";
	$fdata["GoodName"] = "agf";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("np","agf");
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


	$tdatanp["agf"] = $fdata;
		$tdatanp[".searchableFields"][] = "agf";
//	Tec_resp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Tec_resp";
	$fdata["GoodName"] = "Tec_resp";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("np","Tec_resp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tec_resp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Tec_resp";

	
	
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


	$tdatanp["Tec_resp"] = $fdata;
		$tdatanp[".searchableFields"][] = "Tec_resp";
//	Drae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Drae";
	$fdata["GoodName"] = "Drae";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("np","Drae");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Drae";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Drae";

	
	
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
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Drae";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Drae";

	

	
	$edata["LookupOrderBy"] = "Drae";

	
	
	
	

	
	
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


	$tdatanp["Drae"] = $fdata;
		$tdatanp[".searchableFields"][] = "Drae";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("np","Bairro");
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


	$tdatanp["Bairro"] = $fdata;
		$tdatanp[".searchableFields"][] = "Bairro";
//	Direc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Direc";
	$fdata["GoodName"] = "Direc";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("np","Direc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Direc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "direcs";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nom_direc";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom_direc";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "Cod_NP";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanp["Direc"] = $fdata;
		$tdatanp[".searchableFields"][] = "Direc";
//	Municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Municipio";
	$fdata["GoodName"] = "Municipio";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("np","Municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Municipio";

	
	
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


	$tdatanp["Municipio"] = $fdata;
		$tdatanp[".searchableFields"][] = "Municipio";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("np","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos_usuarios.fullname";

	
	
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


	$tdatanp["fullname"] = $fdata;
		$tdatanp[".searchableFields"][] = "fullname";
//	Sd_ant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Sd_ant";
	$fdata["GoodName"] = "Sd_ant";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("np","Sd_ant");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Sd_ant";

		$fdata["sourceSingle"] = "Sd_ant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Sd_ant";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Sd_ant";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "resto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "resto";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatanp["Sd_ant"] = $fdata;
		$tdatanp[".searchableFields"][] = "Sd_ant";


$tables_data["np"]=&$tdatanp;
$field_labels["np"] = &$fieldLabelsnp;
$fieldToolTips["np"] = &$fieldToolTipsnp;
$placeHolders["np"] = &$placeHoldersnp;
$page_titles["np"] = &$pageTitlesnp;


changeTextControlsToDate( "np" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["np"] = array();
//	pedidos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pedidos";
		$detailsParam["dOriginalTable"] = "pedidos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pedidos";
	$detailsParam["dCaptionTable"] = GetTableCaption("pedidos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["np"][$dIndex] = $detailsParam;

	
		$detailsTablesData["np"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["np"][$dIndex]["masterKeys"][]="Cod_NP";

	$detailsTablesData["np"][$dIndex]["masterKeys"][]="Escola";

	$detailsTablesData["np"][$dIndex]["masterKeys"][]="Parcela";

				$detailsTablesData["np"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["np"][$dIndex]["detailKeys"][]="Cod_np";

		
	$detailsTablesData["np"][$dIndex]["detailKeys"][]="cnpj_escola";

		
	$detailsTablesData["np"][$dIndex]["detailKeys"][]="Parcela";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["np"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="escolas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="escolas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "escolas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["np"][0] = $masterParams;
				$masterTablesData["np"][0]["masterKeys"] = array();
	$masterTablesData["np"][0]["masterKeys"][]="CNPJ";
				$masterTablesData["np"][0]["detailKeys"] = array();
	$masterTablesData["np"][0]["detailKeys"][]="Escola";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_np()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "np.Cod_NP,  np.Parcela,  np.`Data`,  np.Valor,  np.Saldo,  np.Escola,  np.Num_NP,  np.`Execício`,  np.Debito,  (COALESCE(valor, 0) - COALESCE(debito, 0)) AS saldo1,  escolas.Nome,  valor * 0.30 AS agf,  escolas.Tec_resp,  escolas.Drae,  escolas.Bairro,  escolas.Direc,  escolas.Municipio,  pedidos_usuarios.fullname,  np.Sd_ant";
$proto0["m_strFrom"] = "FROM np  INNER JOIN escolas ON np.Escola = escolas.CNPJ  INNER JOIN pedidos_usuarios ON escolas.Tec_resp = pedidos_usuarios.username";
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
	"m_strName" => "Cod_NP",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto6["m_sql"] = "np.Cod_NP";
$proto6["m_srcTableName"] = "np";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Parcela",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto8["m_sql"] = "np.Parcela";
$proto8["m_srcTableName"] = "np";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto10["m_sql"] = "np.`Data`";
$proto10["m_srcTableName"] = "np";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto12["m_sql"] = "np.Valor";
$proto12["m_srcTableName"] = "np";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto14["m_sql"] = "np.Saldo";
$proto14["m_srcTableName"] = "np";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Escola",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto16["m_sql"] = "np.Escola";
$proto16["m_srcTableName"] = "np";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Num_NP",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto18["m_sql"] = "np.Num_NP";
$proto18["m_srcTableName"] = "np";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Execício",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto20["m_sql"] = "np.`Execício`";
$proto20["m_srcTableName"] = "np";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Debito",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto22["m_sql"] = "np.Debito";
$proto22["m_srcTableName"] = "np";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(COALESCE(valor, 0) - COALESCE(debito, 0))"
));

$proto24["m_sql"] = "(COALESCE(valor, 0) - COALESCE(debito, 0))";
$proto24["m_srcTableName"] = "np";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "saldo1";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "escolas",
	"m_srcTableName" => "np"
));

$proto26["m_sql"] = "escolas.Nome";
$proto26["m_srcTableName"] = "np";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "valor * 0.30"
));

$proto28["m_sql"] = "valor * 0.30";
$proto28["m_srcTableName"] = "np";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "agf";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Tec_resp",
	"m_strTable" => "escolas",
	"m_srcTableName" => "np"
));

$proto30["m_sql"] = "escolas.Tec_resp";
$proto30["m_srcTableName"] = "np";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Drae",
	"m_strTable" => "escolas",
	"m_srcTableName" => "np"
));

$proto32["m_sql"] = "escolas.Drae";
$proto32["m_srcTableName"] = "np";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "escolas",
	"m_srcTableName" => "np"
));

$proto34["m_sql"] = "escolas.Bairro";
$proto34["m_srcTableName"] = "np";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Direc",
	"m_strTable" => "escolas",
	"m_srcTableName" => "np"
));

$proto36["m_sql"] = "escolas.Direc";
$proto36["m_srcTableName"] = "np";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Municipio",
	"m_strTable" => "escolas",
	"m_srcTableName" => "np"
));

$proto38["m_sql"] = "escolas.Municipio";
$proto38["m_srcTableName"] = "np";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "np"
));

$proto40["m_sql"] = "pedidos_usuarios.fullname";
$proto40["m_srcTableName"] = "np";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Sd_ant",
	"m_strTable" => "np",
	"m_srcTableName" => "np"
));

$proto42["m_sql"] = "np.Sd_ant";
$proto42["m_srcTableName"] = "np";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "np";
$proto45["m_srcTableName"] = "np";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "Cod_NP";
$proto45["m_columns"][] = "Parcela";
$proto45["m_columns"][] = "Data";
$proto45["m_columns"][] = "Valor";
$proto45["m_columns"][] = "Saldo";
$proto45["m_columns"][] = "Escola";
$proto45["m_columns"][] = "Num_NP";
$proto45["m_columns"][] = "Execício";
$proto45["m_columns"][] = "Debito";
$proto45["m_columns"][] = "Sd_ant";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "np";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "np";
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
$proto49["m_srcTableName"] = "np";
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
$proto48["m_sql"] = "INNER JOIN escolas ON np.Escola = escolas.CNPJ";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "np";
$proto50=array();
$proto50["m_sql"] = "escolas.CNPJ = np.Escola";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "escolas",
	"m_srcTableName" => "np"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= np.Escola";
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
$proto53["m_strName"] = "pedidos_usuarios";
$proto53["m_srcTableName"] = "np";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "ID";
$proto53["m_columns"][] = "username";
$proto53["m_columns"][] = "password";
$proto53["m_columns"][] = "email";
$proto53["m_columns"][] = "fullname";
$proto53["m_columns"][] = "groupid";
$proto53["m_columns"][] = "active";
$proto53["m_columns"][] = "ext_security_id";
$proto53["m_columns"][] = "fullname1";
$proto53["m_columns"][] = "userpic";
$proto53["m_columns"][] = "fullname2";
$proto53["m_columns"][] = "reset_token";
$proto53["m_columns"][] = "reset_date";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN pedidos_usuarios ON escolas.Tec_resp = pedidos_usuarios.username";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "np";
$proto54=array();
$proto54["m_sql"] = "pedidos_usuarios.username = escolas.Tec_resp";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "np"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= escolas.Tec_resp";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="np";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_np = createSqlQuery_np();


	
		;

																			

$tdatanp[".sqlquery"] = $queryData_np;



include_once(getabspath("include/np_events.php"));
$tdatanp[".hasEvents"] = true;

?>