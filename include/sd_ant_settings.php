<?php
$tdatasd_ant = array();
$tdatasd_ant[".searchableFields"] = array();
$tdatasd_ant[".ShortName"] = "sd_ant";
$tdatasd_ant[".OwnerID"] = "CNPJ";
$tdatasd_ant[".OriginalTable"] = "np";


$tdatasd_ant[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasd_ant[".originalPagesByType"] = $tdatasd_ant[".pagesByType"];
$tdatasd_ant[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasd_ant[".originalPages"] = $tdatasd_ant[".pages"];
$tdatasd_ant[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasd_ant[".originalDefaultPages"] = $tdatasd_ant[".defaultPages"];

//	field labels
$fieldLabelssd_ant = array();
$fieldToolTipssd_ant = array();
$pageTitlessd_ant = array();
$placeHolderssd_ant = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelssd_ant["Portuguese(Brazil)"] = array();
	$fieldToolTipssd_ant["Portuguese(Brazil)"] = array();
	$placeHolderssd_ant["Portuguese(Brazil)"] = array();
	$pageTitlessd_ant["Portuguese(Brazil)"] = array();
	$fieldLabelssd_ant["Portuguese(Brazil)"]["Cod_NP"] = "Cod NP";
	$fieldToolTipssd_ant["Portuguese(Brazil)"]["Cod_NP"] = "";
	$placeHolderssd_ant["Portuguese(Brazil)"]["Cod_NP"] = "";
	$fieldLabelssd_ant["Portuguese(Brazil)"]["Exec_cio"] = "Execício";
	$fieldToolTipssd_ant["Portuguese(Brazil)"]["Exec_cio"] = "";
	$placeHolderssd_ant["Portuguese(Brazil)"]["Exec_cio"] = "";
	$fieldLabelssd_ant["Portuguese(Brazil)"]["Sd_ant"] = "Saldo Anterior";
	$fieldToolTipssd_ant["Portuguese(Brazil)"]["Sd_ant"] = "";
	$placeHolderssd_ant["Portuguese(Brazil)"]["Sd_ant"] = "";
	$fieldLabelssd_ant["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipssd_ant["Portuguese(Brazil)"]["Nome"] = "";
	$placeHolderssd_ant["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelssd_ant["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipssd_ant["Portuguese(Brazil)"]["Data"] = "";
	$placeHolderssd_ant["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelssd_ant["Portuguese(Brazil)"]["resto"] = "Saldo ";
	$fieldToolTipssd_ant["Portuguese(Brazil)"]["resto"] = "";
	$placeHolderssd_ant["Portuguese(Brazil)"]["resto"] = "";
	$fieldLabelssd_ant["Portuguese(Brazil)"]["Parcela"] = "Parcela";
	$fieldToolTipssd_ant["Portuguese(Brazil)"]["Parcela"] = "";
	$placeHolderssd_ant["Portuguese(Brazil)"]["Parcela"] = "";
	$fieldLabelssd_ant["Portuguese(Brazil)"]["CNPJ"] = "CNPJ";
	$fieldToolTipssd_ant["Portuguese(Brazil)"]["CNPJ"] = "";
	$placeHolderssd_ant["Portuguese(Brazil)"]["CNPJ"] = "";
	if (count($fieldToolTipssd_ant["Portuguese(Brazil)"]))
		$tdatasd_ant[".isUseToolTips"] = true;
}


	$tdatasd_ant[".NCSearch"] = true;



$tdatasd_ant[".shortTableName"] = "sd_ant";
$tdatasd_ant[".nSecOptions"] = 1;

$tdatasd_ant[".mainTableOwnerID"] = "CNPJ";
$tdatasd_ant[".entityType"] = 1;
$tdatasd_ant[".connId"] = "pedidos_at_localhost";


$tdatasd_ant[".strOriginalTableName"] = "np";

	



$tdatasd_ant[".showAddInPopup"] = false;

$tdatasd_ant[".showEditInPopup"] = false;

$tdatasd_ant[".showViewInPopup"] = false;

$tdatasd_ant[".listAjax"] = false;
//	temporary
//$tdatasd_ant[".listAjax"] = false;

	$tdatasd_ant[".audit"] = false;

	$tdatasd_ant[".locking"] = false;


$pages = $tdatasd_ant[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasd_ant[".edit"] = true;
	$tdatasd_ant[".afterEditAction"] = 1;
	$tdatasd_ant[".closePopupAfterEdit"] = 1;
	$tdatasd_ant[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasd_ant[".add"] = true;
$tdatasd_ant[".afterAddAction"] = 1;
$tdatasd_ant[".closePopupAfterAdd"] = 1;
$tdatasd_ant[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasd_ant[".list"] = true;
}



$tdatasd_ant[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasd_ant[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasd_ant[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasd_ant[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasd_ant[".printFriendly"] = true;
}



$tdatasd_ant[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasd_ant[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasd_ant[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasd_ant[".isUseAjaxSuggest"] = true;



																		

$tdatasd_ant[".ajaxCodeSnippetAdded"] = false;

$tdatasd_ant[".buttonsAdded"] = false;

$tdatasd_ant[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasd_ant[".isUseTimeForSearch"] = false;


$tdatasd_ant[".badgeColor"] = "BC8F8F";


$tdatasd_ant[".allSearchFields"] = array();
$tdatasd_ant[".filterFields"] = array();
$tdatasd_ant[".requiredSearchFields"] = array();

$tdatasd_ant[".googleLikeFields"] = array();
$tdatasd_ant[".googleLikeFields"][] = "Cod_NP";
$tdatasd_ant[".googleLikeFields"][] = "Sd_ant";
$tdatasd_ant[".googleLikeFields"][] = "Nome";
$tdatasd_ant[".googleLikeFields"][] = "Execício";
$tdatasd_ant[".googleLikeFields"][] = "Data";
$tdatasd_ant[".googleLikeFields"][] = "resto";
$tdatasd_ant[".googleLikeFields"][] = "Parcela";
$tdatasd_ant[".googleLikeFields"][] = "CNPJ";



$tdatasd_ant[".tableType"] = "list";

$tdatasd_ant[".printerPageOrientation"] = 0;
$tdatasd_ant[".nPrinterPageScale"] = 100;

$tdatasd_ant[".nPrinterSplitRecords"] = 40;

$tdatasd_ant[".geocodingEnabled"] = false;










$tdatasd_ant[".pageSize"] = 20;

$tdatasd_ant[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasd_ant[".strOrderBy"] = $tstrOrderBy;

$tdatasd_ant[".orderindexes"] = array();


$tdatasd_ant[".sqlHead"] = "SELECT np.Cod_NP,  np.Sd_ant,  escolas.Nome,  np.`Execício`,  np.`Data`,  valor - debito AS resto,  np.Parcela,  escolas.CNPJ";
$tdatasd_ant[".sqlFrom"] = "FROM np  INNER JOIN escolas ON np.Escola = escolas.CNPJ";
$tdatasd_ant[".sqlWhereExpr"] = "";
$tdatasd_ant[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasd_ant[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasd_ant[".arrGroupsPerPage"] = $arrGPP;

$tdatasd_ant[".highlightSearchResults"] = true;

$tableKeyssd_ant = array();
$tableKeyssd_ant[] = "Cod_NP";
$tdatasd_ant[".Keys"] = $tableKeyssd_ant;


$tdatasd_ant[".hideMobileList"] = array();




//	Cod_NP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cod_NP";
	$fdata["GoodName"] = "Cod_NP";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("Sd_ant","Cod_NP");
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


	$tdatasd_ant["Cod_NP"] = $fdata;
		$tdatasd_ant[".searchableFields"][] = "Cod_NP";
//	Sd_ant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Sd_ant";
	$fdata["GoodName"] = "Sd_ant";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("Sd_ant","Sd_ant");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

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


	$tdatasd_ant["Sd_ant"] = $fdata;
		$tdatasd_ant[".searchableFields"][] = "Sd_ant";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Sd_ant","Nome");
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


	$tdatasd_ant["Nome"] = $fdata;
		$tdatasd_ant[".searchableFields"][] = "Nome";
//	Execício
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Execício";
	$fdata["GoodName"] = "Exec_cio";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("Sd_ant","Exec_cio");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

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


	$tdatasd_ant["Execício"] = $fdata;
		$tdatasd_ant[".searchableFields"][] = "Execício";
//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("Sd_ant","Data");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Data";

		$fdata["sourceSingle"] = "Data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.`Data`";

	
	
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


	$tdatasd_ant["Data"] = $fdata;
		$tdatasd_ant[".searchableFields"][] = "Data";
//	resto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "resto";
	$fdata["GoodName"] = "resto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Sd_ant","resto");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "resto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor - debito";

	
	
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


	$tdatasd_ant["resto"] = $fdata;
		$tdatasd_ant[".searchableFields"][] = "resto";
//	Parcela
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Parcela";
	$fdata["GoodName"] = "Parcela";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("Sd_ant","Parcela");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Parcela";

		$fdata["sourceSingle"] = "Parcela";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Parcela";

	
	
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


	$tdatasd_ant["Parcela"] = $fdata;
		$tdatasd_ant[".searchableFields"][] = "Parcela";
//	CNPJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CNPJ";
	$fdata["GoodName"] = "CNPJ";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Sd_ant","CNPJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CNPJ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.CNPJ";

	
	
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


	$tdatasd_ant["CNPJ"] = $fdata;
		$tdatasd_ant[".searchableFields"][] = "CNPJ";


$tables_data["Sd_ant"]=&$tdatasd_ant;
$field_labels["Sd_ant"] = &$fieldLabelssd_ant;
$fieldToolTips["Sd_ant"] = &$fieldToolTipssd_ant;
$placeHolders["Sd_ant"] = &$placeHolderssd_ant;
$page_titles["Sd_ant"] = &$pageTitlessd_ant;


changeTextControlsToDate( "Sd_ant" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Sd_ant"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Sd_ant"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sd_ant()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "np.Cod_NP,  np.Sd_ant,  escolas.Nome,  np.`Execício`,  np.`Data`,  valor - debito AS resto,  np.Parcela,  escolas.CNPJ";
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
	"m_srcTableName" => "Sd_ant"
));

$proto6["m_sql"] = "np.Cod_NP";
$proto6["m_srcTableName"] = "Sd_ant";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Sd_ant",
	"m_strTable" => "np",
	"m_srcTableName" => "Sd_ant"
));

$proto8["m_sql"] = "np.Sd_ant";
$proto8["m_srcTableName"] = "Sd_ant";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Sd_ant"
));

$proto10["m_sql"] = "escolas.Nome";
$proto10["m_srcTableName"] = "Sd_ant";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Execício",
	"m_strTable" => "np",
	"m_srcTableName" => "Sd_ant"
));

$proto12["m_sql"] = "np.`Execício`";
$proto12["m_srcTableName"] = "Sd_ant";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "np",
	"m_srcTableName" => "Sd_ant"
));

$proto14["m_sql"] = "np.`Data`";
$proto14["m_srcTableName"] = "Sd_ant";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "valor - debito"
));

$proto16["m_sql"] = "valor - debito";
$proto16["m_srcTableName"] = "Sd_ant";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "resto";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Parcela",
	"m_strTable" => "np",
	"m_srcTableName" => "Sd_ant"
));

$proto18["m_sql"] = "np.Parcela";
$proto18["m_srcTableName"] = "Sd_ant";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Sd_ant"
));

$proto20["m_sql"] = "escolas.CNPJ";
$proto20["m_srcTableName"] = "Sd_ant";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "np";
$proto23["m_srcTableName"] = "Sd_ant";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "Cod_NP";
$proto23["m_columns"][] = "Parcela";
$proto23["m_columns"][] = "Data";
$proto23["m_columns"][] = "Valor";
$proto23["m_columns"][] = "Saldo";
$proto23["m_columns"][] = "Escola";
$proto23["m_columns"][] = "Num_NP";
$proto23["m_columns"][] = "Execício";
$proto23["m_columns"][] = "Debito";
$proto23["m_columns"][] = "Sd_ant";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "np";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Sd_ant";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "escolas";
$proto27["m_srcTableName"] = "Sd_ant";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "cod_escola";
$proto27["m_columns"][] = "CNPJ";
$proto27["m_columns"][] = "Nome";
$proto27["m_columns"][] = "Endereço";
$proto27["m_columns"][] = "Email";
$proto27["m_columns"][] = "Telefone";
$proto27["m_columns"][] = "Descrição";
$proto27["m_columns"][] = "Drae";
$proto27["m_columns"][] = "Bairro";
$proto27["m_columns"][] = "Cidade";
$proto27["m_columns"][] = "Estado";
$proto27["m_columns"][] = "Lat";
$proto27["m_columns"][] = "Lng";
$proto27["m_columns"][] = "Direc";
$proto27["m_columns"][] = "Cep";
$proto27["m_columns"][] = "Tec_resp";
$proto27["m_columns"][] = "Arquivos";
$proto27["m_columns"][] = "Obs";
$proto27["m_columns"][] = "EmailDrae";
$proto27["m_columns"][] = "Municipio";
$proto27["m_columns"][] = "cod_fee";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN escolas ON np.Escola = escolas.CNPJ";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Sd_ant";
$proto28=array();
$proto28["m_sql"] = "escolas.CNPJ = np.Escola";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Sd_ant"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= np.Escola";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Sd_ant";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sd_ant = createSqlQuery_sd_ant();


	
		;

								

$tdatasd_ant[".sqlquery"] = $queryData_sd_ant;



$tdatasd_ant[".hasEvents"] = false;

?>