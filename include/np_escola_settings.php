<?php
$tdatanp_escola = array();
$tdatanp_escola[".searchableFields"] = array();
$tdatanp_escola[".ShortName"] = "np_escola";
$tdatanp_escola[".OwnerID"] = "Escola";
$tdatanp_escola[".OriginalTable"] = "np";


$tdatanp_escola[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatanp_escola[".originalPagesByType"] = $tdatanp_escola[".pagesByType"];
$tdatanp_escola[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatanp_escola[".originalPages"] = $tdatanp_escola[".pages"];
$tdatanp_escola[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatanp_escola[".originalDefaultPages"] = $tdatanp_escola[".defaultPages"];

//	field labels
$fieldLabelsnp_escola = array();
$fieldToolTipsnp_escola = array();
$pageTitlesnp_escola = array();
$placeHoldersnp_escola = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsnp_escola["Portuguese(Brazil)"] = array();
	$fieldToolTipsnp_escola["Portuguese(Brazil)"] = array();
	$placeHoldersnp_escola["Portuguese(Brazil)"] = array();
	$pageTitlesnp_escola["Portuguese(Brazil)"] = array();
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Cod_NP"] = "Código da NP";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Cod_NP"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Cod_NP"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Parcela"] = "Parcela";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Parcela"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Parcela"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Valor"] = "Crédito";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Saldo"] = "Repasse";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Saldo"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Saldo"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Escola"] = "Escola ";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Escola"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Escola"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Num_NP"] = "Nº NP";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Num_NP"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Num_NP"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Exec_cio"] = "Execício";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Exec_cio"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Exec_cio"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Debito"] = "Gastos";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Debito"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Debito"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["saldo1"] = "Saldo";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["saldo1"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["saldo1"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["agf"] = "Agf (30%)";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["agf"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["agf"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Endere_o"] = "Endereço";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Endere_o"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Endere_o"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Bairro"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Municipio"] = "Municipio";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Municipio"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Municipio"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Direc"] = "Direc";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Direc"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Direc"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Drae"] = "Drae";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Drae"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Drae"] = "";
	$fieldLabelsnp_escola["Portuguese(Brazil)"]["Sd_ant"] = "Saldo Anterior";
	$fieldToolTipsnp_escola["Portuguese(Brazil)"]["Sd_ant"] = "";
	$placeHoldersnp_escola["Portuguese(Brazil)"]["Sd_ant"] = "";
	$pageTitlesnp_escola["Portuguese(Brazil)"]["masterlist"] = " {%Nome}";
	if (count($fieldToolTipsnp_escola["Portuguese(Brazil)"]))
		$tdatanp_escola[".isUseToolTips"] = true;
}


	$tdatanp_escola[".NCSearch"] = true;



$tdatanp_escola[".shortTableName"] = "np_escola";
$tdatanp_escola[".nSecOptions"] = 1;

$tdatanp_escola[".mainTableOwnerID"] = "Escola";
$tdatanp_escola[".entityType"] = 1;
$tdatanp_escola[".connId"] = "pedidos_at_localhost";


$tdatanp_escola[".strOriginalTableName"] = "np";

	



$tdatanp_escola[".showAddInPopup"] = false;

$tdatanp_escola[".showEditInPopup"] = false;

$tdatanp_escola[".showViewInPopup"] = false;

$tdatanp_escola[".listAjax"] = false;
//	temporary
//$tdatanp_escola[".listAjax"] = false;

	$tdatanp_escola[".audit"] = false;

	$tdatanp_escola[".locking"] = false;


$pages = $tdatanp_escola[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanp_escola[".edit"] = true;
	$tdatanp_escola[".afterEditAction"] = 0;
	$tdatanp_escola[".closePopupAfterEdit"] = 1;
	$tdatanp_escola[".afterEditActionDetTable"] = "Pedidos_escola";
}

if( $pages[PAGE_ADD] ) {
$tdatanp_escola[".add"] = true;
$tdatanp_escola[".afterAddAction"] = 0;
$tdatanp_escola[".closePopupAfterAdd"] = 1;
$tdatanp_escola[".afterAddActionDetTable"] = "Pedidos_escola";
}

if( $pages[PAGE_LIST] ) {
	$tdatanp_escola[".list"] = true;
}



$tdatanp_escola[".strSortControlSettingsJSON"] = "";

$tdatanp_escola[".strClickActionJSON"] = "{\"fields\":{\"Cod_NP\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Debito\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Escola\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Execício\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Num_NP\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Parcela\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Saldo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Valor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"Pedidos_escola\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"Pedidos_escola\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatanp_escola[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanp_escola[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanp_escola[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanp_escola[".printFriendly"] = true;
}



$tdatanp_escola[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanp_escola[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanp_escola[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanp_escola[".isUseAjaxSuggest"] = true;



																		

$tdatanp_escola[".ajaxCodeSnippetAdded"] = false;

$tdatanp_escola[".buttonsAdded"] = false;

$tdatanp_escola[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanp_escola[".isUseTimeForSearch"] = false;


$tdatanp_escola[".badgeColor"] = "BC8F8F";


$tdatanp_escola[".allSearchFields"] = array();
$tdatanp_escola[".filterFields"] = array();
$tdatanp_escola[".requiredSearchFields"] = array();

$tdatanp_escola[".googleLikeFields"] = array();
$tdatanp_escola[".googleLikeFields"][] = "Cod_NP";
$tdatanp_escola[".googleLikeFields"][] = "Parcela";
$tdatanp_escola[".googleLikeFields"][] = "Data";
$tdatanp_escola[".googleLikeFields"][] = "Valor";
$tdatanp_escola[".googleLikeFields"][] = "Saldo";
$tdatanp_escola[".googleLikeFields"][] = "Escola";
$tdatanp_escola[".googleLikeFields"][] = "Num_NP";
$tdatanp_escola[".googleLikeFields"][] = "Execício";
$tdatanp_escola[".googleLikeFields"][] = "Debito";
$tdatanp_escola[".googleLikeFields"][] = "Nome";
$tdatanp_escola[".googleLikeFields"][] = "saldo1";
$tdatanp_escola[".googleLikeFields"][] = "agf";
$tdatanp_escola[".googleLikeFields"][] = "Endereço";
$tdatanp_escola[".googleLikeFields"][] = "Bairro";
$tdatanp_escola[".googleLikeFields"][] = "Municipio";
$tdatanp_escola[".googleLikeFields"][] = "Direc";
$tdatanp_escola[".googleLikeFields"][] = "Drae";
$tdatanp_escola[".googleLikeFields"][] = "Sd_ant";



$tdatanp_escola[".tableType"] = "list";

$tdatanp_escola[".printerPageOrientation"] = 0;
$tdatanp_escola[".nPrinterPageScale"] = 100;

$tdatanp_escola[".nPrinterSplitRecords"] = 40;

$tdatanp_escola[".geocodingEnabled"] = false;










$tdatanp_escola[".pageSize"] = 20;

$tdatanp_escola[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanp_escola[".strOrderBy"] = $tstrOrderBy;

$tdatanp_escola[".orderindexes"] = array();


$tdatanp_escola[".sqlHead"] = "SELECT np.Cod_NP,  np.Parcela,  np.`Data`,  np.Valor,  np.Saldo,  np.Escola,  np.Num_NP,  np.`Execício`,  np.Debito,  escolas.Nome,  (COALESCE(valor, 0) - COALESCE(debito, 0)) AS saldo1,  valor *0.30 AS agf,  escolas.`Endereço`,  escolas.Bairro,  escolas.Municipio,  escolas.Direc,  escolas.Drae,  np.Sd_ant";
$tdatanp_escola[".sqlFrom"] = "FROM np  INNER JOIN escolas ON np.Escola = escolas.CNPJ";
$tdatanp_escola[".sqlWhereExpr"] = "";
$tdatanp_escola[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanp_escola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanp_escola[".arrGroupsPerPage"] = $arrGPP;

$tdatanp_escola[".highlightSearchResults"] = true;

$tableKeysnp_escola = array();
$tableKeysnp_escola[] = "Cod_NP";
$tableKeysnp_escola[] = "Escola";
$tdatanp_escola[".Keys"] = $tableKeysnp_escola;


$tdatanp_escola[".hideMobileList"] = array();




//	Cod_NP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cod_NP";
	$fdata["GoodName"] = "Cod_NP";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Cod_NP");
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


	$tdatanp_escola["Cod_NP"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Cod_NP";
//	Parcela
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Parcela";
	$fdata["GoodName"] = "Parcela";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Parcela");
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


	$tdatanp_escola["Parcela"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Parcela";
//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Data");
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


	$tdatanp_escola["Data"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Data";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Valor");
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


	$tdatanp_escola["Valor"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Valor";
//	Saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Saldo";
	$fdata["GoodName"] = "Saldo";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Saldo");
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
			$edata["EditParams"].= " maxlength=32";

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


	$tdatanp_escola["Saldo"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Saldo";
//	Escola
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Escola";
	$fdata["GoodName"] = "Escola";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Escola");
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


	$tdatanp_escola["Escola"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Escola";
//	Num_NP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Num_NP";
	$fdata["GoodName"] = "Num_NP";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Num_NP");
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


	$tdatanp_escola["Num_NP"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Num_NP";
//	Execício
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Execício";
	$fdata["GoodName"] = "Exec_cio";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Exec_cio");
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


	$tdatanp_escola["Execício"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Execício";
//	Debito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Debito";
	$fdata["GoodName"] = "Debito";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Debito");
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


	$tdatanp_escola["Debito"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Debito";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("NP_escola","Nome");
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


	$tdatanp_escola["Nome"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Nome";
//	saldo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "saldo1";
	$fdata["GoodName"] = "saldo1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("NP_escola","saldo1");
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


	$tdatanp_escola["saldo1"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "saldo1";
//	agf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "agf";
	$fdata["GoodName"] = "agf";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("NP_escola","agf");
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


	$tdatanp_escola["agf"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "agf";
//	Endereço
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Endereço";
	$fdata["GoodName"] = "Endere_o";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("NP_escola","Endere_o");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Endereço";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.`Endereço`";

	
	
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


	$tdatanp_escola["Endereço"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Endereço";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("NP_escola","Bairro");
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


	$tdatanp_escola["Bairro"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Bairro";
//	Municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Municipio";
	$fdata["GoodName"] = "Municipio";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("NP_escola","Municipio");
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


	$tdatanp_escola["Municipio"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Municipio";
//	Direc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Direc";
	$fdata["GoodName"] = "Direc";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("NP_escola","Direc");
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


	$tdatanp_escola["Direc"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Direc";
//	Drae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Drae";
	$fdata["GoodName"] = "Drae";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("NP_escola","Drae");
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


	$tdatanp_escola["Drae"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Drae";
//	Sd_ant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Sd_ant";
	$fdata["GoodName"] = "Sd_ant";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("NP_escola","Sd_ant");
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
	$vdata["NumberOfChars"] = 10;

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


	$tdatanp_escola["Sd_ant"] = $fdata;
		$tdatanp_escola[".searchableFields"][] = "Sd_ant";


$tables_data["NP_escola"]=&$tdatanp_escola;
$field_labels["NP_escola"] = &$fieldLabelsnp_escola;
$fieldToolTips["NP_escola"] = &$fieldToolTipsnp_escola;
$placeHolders["NP_escola"] = &$placeHoldersnp_escola;
$page_titles["NP_escola"] = &$pageTitlesnp_escola;


changeTextControlsToDate( "NP_escola" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["NP_escola"] = array();
//	Pedidos_escola
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Pedidos_escola";
		$detailsParam["dOriginalTable"] = "pedidos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pedidos_escola";
	$detailsParam["dCaptionTable"] = GetTableCaption("Pedidos_escola");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["NP_escola"][$dIndex] = $detailsParam;

	
		$detailsTablesData["NP_escola"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["NP_escola"][$dIndex]["masterKeys"][]="Cod_NP";

	$detailsTablesData["NP_escola"][$dIndex]["masterKeys"][]="Escola";

	$detailsTablesData["NP_escola"][$dIndex]["masterKeys"][]="Parcela";

				$detailsTablesData["NP_escola"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["NP_escola"][$dIndex]["detailKeys"][]="Cod_np";

		
	$detailsTablesData["NP_escola"][$dIndex]["detailKeys"][]="cnpj_escola";

		
	$detailsTablesData["NP_escola"][$dIndex]["detailKeys"][]="Parcela";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["NP_escola"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_np_escola()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "np.Cod_NP,  np.Parcela,  np.`Data`,  np.Valor,  np.Saldo,  np.Escola,  np.Num_NP,  np.`Execício`,  np.Debito,  escolas.Nome,  (COALESCE(valor, 0) - COALESCE(debito, 0)) AS saldo1,  valor *0.30 AS agf,  escolas.`Endereço`,  escolas.Bairro,  escolas.Municipio,  escolas.Direc,  escolas.Drae,  np.Sd_ant";
$proto0["m_strFrom"] = "FROM np  INNER JOIN escolas ON np.Escola = escolas.CNPJ";
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
	"m_srcTableName" => "NP_escola"
));

$proto6["m_sql"] = "np.Cod_NP";
$proto6["m_srcTableName"] = "NP_escola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Parcela",
	"m_strTable" => "np",
	"m_srcTableName" => "NP_escola"
));

$proto8["m_sql"] = "np.Parcela";
$proto8["m_srcTableName"] = "NP_escola";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "np",
	"m_srcTableName" => "NP_escola"
));

$proto10["m_sql"] = "np.`Data`";
$proto10["m_srcTableName"] = "NP_escola";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "np",
	"m_srcTableName" => "NP_escola"
));

$proto12["m_sql"] = "np.Valor";
$proto12["m_srcTableName"] = "NP_escola";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo",
	"m_strTable" => "np",
	"m_srcTableName" => "NP_escola"
));

$proto14["m_sql"] = "np.Saldo";
$proto14["m_srcTableName"] = "NP_escola";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Escola",
	"m_strTable" => "np",
	"m_srcTableName" => "NP_escola"
));

$proto16["m_sql"] = "np.Escola";
$proto16["m_srcTableName"] = "NP_escola";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Num_NP",
	"m_strTable" => "np",
	"m_srcTableName" => "NP_escola"
));

$proto18["m_sql"] = "np.Num_NP";
$proto18["m_srcTableName"] = "NP_escola";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Execício",
	"m_strTable" => "np",
	"m_srcTableName" => "NP_escola"
));

$proto20["m_sql"] = "np.`Execício`";
$proto20["m_srcTableName"] = "NP_escola";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Debito",
	"m_strTable" => "np",
	"m_srcTableName" => "NP_escola"
));

$proto22["m_sql"] = "np.Debito";
$proto22["m_srcTableName"] = "NP_escola";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "escolas",
	"m_srcTableName" => "NP_escola"
));

$proto24["m_sql"] = "escolas.Nome";
$proto24["m_srcTableName"] = "NP_escola";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(COALESCE(valor, 0) - COALESCE(debito, 0))"
));

$proto26["m_sql"] = "(COALESCE(valor, 0) - COALESCE(debito, 0))";
$proto26["m_srcTableName"] = "NP_escola";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "saldo1";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "valor *0.30"
));

$proto28["m_sql"] = "valor *0.30";
$proto28["m_srcTableName"] = "NP_escola";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "agf";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Endereço",
	"m_strTable" => "escolas",
	"m_srcTableName" => "NP_escola"
));

$proto30["m_sql"] = "escolas.`Endereço`";
$proto30["m_srcTableName"] = "NP_escola";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "escolas",
	"m_srcTableName" => "NP_escola"
));

$proto32["m_sql"] = "escolas.Bairro";
$proto32["m_srcTableName"] = "NP_escola";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Municipio",
	"m_strTable" => "escolas",
	"m_srcTableName" => "NP_escola"
));

$proto34["m_sql"] = "escolas.Municipio";
$proto34["m_srcTableName"] = "NP_escola";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Direc",
	"m_strTable" => "escolas",
	"m_srcTableName" => "NP_escola"
));

$proto36["m_sql"] = "escolas.Direc";
$proto36["m_srcTableName"] = "NP_escola";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Drae",
	"m_strTable" => "escolas",
	"m_srcTableName" => "NP_escola"
));

$proto38["m_sql"] = "escolas.Drae";
$proto38["m_srcTableName"] = "NP_escola";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Sd_ant",
	"m_strTable" => "np",
	"m_srcTableName" => "NP_escola"
));

$proto40["m_sql"] = "np.Sd_ant";
$proto40["m_srcTableName"] = "NP_escola";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "np";
$proto43["m_srcTableName"] = "NP_escola";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "Cod_NP";
$proto43["m_columns"][] = "Parcela";
$proto43["m_columns"][] = "Data";
$proto43["m_columns"][] = "Valor";
$proto43["m_columns"][] = "Saldo";
$proto43["m_columns"][] = "Escola";
$proto43["m_columns"][] = "Num_NP";
$proto43["m_columns"][] = "Execício";
$proto43["m_columns"][] = "Debito";
$proto43["m_columns"][] = "Sd_ant";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "np";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "NP_escola";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_INNERJOIN";
			$proto47=array();
$proto47["m_strName"] = "escolas";
$proto47["m_srcTableName"] = "NP_escola";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "cod_escola";
$proto47["m_columns"][] = "CNPJ";
$proto47["m_columns"][] = "Nome";
$proto47["m_columns"][] = "Endereço";
$proto47["m_columns"][] = "Email";
$proto47["m_columns"][] = "Telefone";
$proto47["m_columns"][] = "Descrição";
$proto47["m_columns"][] = "Drae";
$proto47["m_columns"][] = "Bairro";
$proto47["m_columns"][] = "Cidade";
$proto47["m_columns"][] = "Estado";
$proto47["m_columns"][] = "Lat";
$proto47["m_columns"][] = "Lng";
$proto47["m_columns"][] = "Direc";
$proto47["m_columns"][] = "Cep";
$proto47["m_columns"][] = "Tec_resp";
$proto47["m_columns"][] = "Arquivos";
$proto47["m_columns"][] = "Obs";
$proto47["m_columns"][] = "EmailDrae";
$proto47["m_columns"][] = "Municipio";
$proto47["m_columns"][] = "cod_fee";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "INNER JOIN escolas ON np.Escola = escolas.CNPJ";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "NP_escola";
$proto48=array();
$proto48["m_sql"] = "escolas.CNPJ = np.Escola";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "escolas",
	"m_srcTableName" => "NP_escola"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= np.Escola";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="NP_escola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_np_escola = createSqlQuery_np_escola();


	
		;

																		

$tdatanp_escola[".sqlquery"] = $queryData_np_escola;



include_once(getabspath("include/np_escola_events.php"));
$tdatanp_escola[".hasEvents"] = true;

?>