<?php
$tdatarelat_rio_anal_tico_de_escolas = array();
$tdatarelat_rio_anal_tico_de_escolas[".searchableFields"] = array();
$tdatarelat_rio_anal_tico_de_escolas[".ShortName"] = "relat_rio_anal_tico_de_escolas";
$tdatarelat_rio_anal_tico_de_escolas[".OwnerID"] = "";
$tdatarelat_rio_anal_tico_de_escolas[".OriginalTable"] = "escolas";


$tdatarelat_rio_anal_tico_de_escolas[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatarelat_rio_anal_tico_de_escolas[".originalPagesByType"] = $tdatarelat_rio_anal_tico_de_escolas[".pagesByType"];
$tdatarelat_rio_anal_tico_de_escolas[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatarelat_rio_anal_tico_de_escolas[".originalPages"] = $tdatarelat_rio_anal_tico_de_escolas[".pages"];
$tdatarelat_rio_anal_tico_de_escolas[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatarelat_rio_anal_tico_de_escolas[".originalDefaultPages"] = $tdatarelat_rio_anal_tico_de_escolas[".defaultPages"];

//	field labels
$fieldLabelsrelat_rio_anal_tico_de_escolas = array();
$fieldToolTipsrelat_rio_anal_tico_de_escolas = array();
$pageTitlesrelat_rio_anal_tico_de_escolas = array();
$placeHoldersrelat_rio_anal_tico_de_escolas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"] = array();
	$fieldToolTipsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"] = array();
	$placeHoldersrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"] = array();
	$pageTitlesrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"] = array();
	$fieldLabelsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["CNPJ"] = "CNPJ";
	$fieldToolTipsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["CNPJ"] = "";
	$placeHoldersrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["CNPJ"] = "";
	$fieldLabelsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Drae"] = "Drae";
	$fieldToolTipsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Drae"] = "";
	$placeHoldersrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Drae"] = "";
	$fieldLabelsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHoldersrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Bairro"] = "";
	$fieldLabelsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Direc"] = "Direc";
	$fieldToolTipsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Direc"] = "";
	$placeHoldersrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Direc"] = "";
	$fieldLabelsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Municipio"] = "Municipio";
	$fieldToolTipsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Municipio"] = "";
	$placeHoldersrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Municipio"] = "";
	$fieldLabelsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Endere_o"] = "Endereço";
	$fieldToolTipsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Endere_o"] = "";
	$placeHoldersrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]["Endere_o"] = "";
	if (count($fieldToolTipsrelat_rio_anal_tico_de_escolas["Portuguese(Brazil)"]))
		$tdatarelat_rio_anal_tico_de_escolas[".isUseToolTips"] = true;
}


	$tdatarelat_rio_anal_tico_de_escolas[".NCSearch"] = true;



$tdatarelat_rio_anal_tico_de_escolas[".shortTableName"] = "relat_rio_anal_tico_de_escolas";
$tdatarelat_rio_anal_tico_de_escolas[".nSecOptions"] = 0;

$tdatarelat_rio_anal_tico_de_escolas[".mainTableOwnerID"] = "";
$tdatarelat_rio_anal_tico_de_escolas[".entityType"] = 2;
$tdatarelat_rio_anal_tico_de_escolas[".connId"] = "pedidos_at_localhost";


$tdatarelat_rio_anal_tico_de_escolas[".strOriginalTableName"] = "escolas";

	



$tdatarelat_rio_anal_tico_de_escolas[".showAddInPopup"] = false;

$tdatarelat_rio_anal_tico_de_escolas[".showEditInPopup"] = false;

$tdatarelat_rio_anal_tico_de_escolas[".showViewInPopup"] = false;

$tdatarelat_rio_anal_tico_de_escolas[".listAjax"] = false;
//	temporary
//$tdatarelat_rio_anal_tico_de_escolas[".listAjax"] = false;

	$tdatarelat_rio_anal_tico_de_escolas[".audit"] = false;

	$tdatarelat_rio_anal_tico_de_escolas[".locking"] = false;


$pages = $tdatarelat_rio_anal_tico_de_escolas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarelat_rio_anal_tico_de_escolas[".edit"] = true;
	$tdatarelat_rio_anal_tico_de_escolas[".afterEditAction"] = 1;
	$tdatarelat_rio_anal_tico_de_escolas[".closePopupAfterEdit"] = 1;
	$tdatarelat_rio_anal_tico_de_escolas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarelat_rio_anal_tico_de_escolas[".add"] = true;
$tdatarelat_rio_anal_tico_de_escolas[".afterAddAction"] = 1;
$tdatarelat_rio_anal_tico_de_escolas[".closePopupAfterAdd"] = 1;
$tdatarelat_rio_anal_tico_de_escolas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarelat_rio_anal_tico_de_escolas[".list"] = true;
}



$tdatarelat_rio_anal_tico_de_escolas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarelat_rio_anal_tico_de_escolas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarelat_rio_anal_tico_de_escolas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarelat_rio_anal_tico_de_escolas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarelat_rio_anal_tico_de_escolas[".printFriendly"] = true;
}



$tdatarelat_rio_anal_tico_de_escolas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarelat_rio_anal_tico_de_escolas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarelat_rio_anal_tico_de_escolas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarelat_rio_anal_tico_de_escolas[".isUseAjaxSuggest"] = true;



																		

$tdatarelat_rio_anal_tico_de_escolas[".ajaxCodeSnippetAdded"] = false;

$tdatarelat_rio_anal_tico_de_escolas[".buttonsAdded"] = false;

$tdatarelat_rio_anal_tico_de_escolas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarelat_rio_anal_tico_de_escolas[".isUseTimeForSearch"] = false;


$tdatarelat_rio_anal_tico_de_escolas[".badgeColor"] = "6B8E23";


$tdatarelat_rio_anal_tico_de_escolas[".allSearchFields"] = array();
$tdatarelat_rio_anal_tico_de_escolas[".filterFields"] = array();
$tdatarelat_rio_anal_tico_de_escolas[".requiredSearchFields"] = array();

$tdatarelat_rio_anal_tico_de_escolas[".googleLikeFields"] = array();
$tdatarelat_rio_anal_tico_de_escolas[".googleLikeFields"][] = "Nome";
$tdatarelat_rio_anal_tico_de_escolas[".googleLikeFields"][] = "Drae";
$tdatarelat_rio_anal_tico_de_escolas[".googleLikeFields"][] = "Bairro";
$tdatarelat_rio_anal_tico_de_escolas[".googleLikeFields"][] = "Direc";
$tdatarelat_rio_anal_tico_de_escolas[".googleLikeFields"][] = "Municipio";
$tdatarelat_rio_anal_tico_de_escolas[".googleLikeFields"][] = "CNPJ";
$tdatarelat_rio_anal_tico_de_escolas[".googleLikeFields"][] = "Endereço";



$tdatarelat_rio_anal_tico_de_escolas[".tableType"] = "report";

$tdatarelat_rio_anal_tico_de_escolas[".printerPageOrientation"] = 0;
$tdatarelat_rio_anal_tico_de_escolas[".nPrinterPageScale"] = 100;

$tdatarelat_rio_anal_tico_de_escolas[".nPrinterSplitRecords"] = 40;

$tdatarelat_rio_anal_tico_de_escolas[".geocodingEnabled"] = false;

//report settings

$tdatarelat_rio_anal_tico_de_escolas[".reportPrintGroupsPerPage"] = 3;
$tdatarelat_rio_anal_tico_de_escolas[".reportPrintRecordsPerPage"] = 40;

$tdatarelat_rio_anal_tico_de_escolas[".pageSizeGroups"] = 40;
$tdatarelat_rio_anal_tico_de_escolas[".pageSizeRecords"] = 20;


//end of report settings



$tdatarelat_rio_anal_tico_de_escolas[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatarelat_rio_anal_tico_de_escolas[".strOrderBy"] = $tstrOrderBy;

$tdatarelat_rio_anal_tico_de_escolas[".orderindexes"] = array();


$tdatarelat_rio_anal_tico_de_escolas[".sqlHead"] = "SELECT Nome,  Drae,  Bairro,  Direc,  Municipio,  CNPJ,  `Endereço`";
$tdatarelat_rio_anal_tico_de_escolas[".sqlFrom"] = "FROM escolas";
$tdatarelat_rio_anal_tico_de_escolas[".sqlWhereExpr"] = "";
$tdatarelat_rio_anal_tico_de_escolas[".sqlTail"] = "";

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
$tdatarelat_rio_anal_tico_de_escolas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarelat_rio_anal_tico_de_escolas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarelat_rio_anal_tico_de_escolas[".arrGroupsPerPage"] = $arrGPP;

$tdatarelat_rio_anal_tico_de_escolas[".highlightSearchResults"] = true;

$tableKeysrelat_rio_anal_tico_de_escolas = array();
$tableKeysrelat_rio_anal_tico_de_escolas[] = "CNPJ";
$tdatarelat_rio_anal_tico_de_escolas[".Keys"] = $tableKeysrelat_rio_anal_tico_de_escolas;


$tdatarelat_rio_anal_tico_de_escolas[".hideMobileList"] = array();




//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Relat_rio_Anal_tico_de_Escolas","Nome");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nome";

		$fdata["sourceSingle"] = "Nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nome";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatarelat_rio_anal_tico_de_escolas["Nome"] = $fdata;
		$tdatarelat_rio_anal_tico_de_escolas[".searchableFields"][] = "Nome";
//	Drae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Drae";
	$fdata["GoodName"] = "Drae";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Relat_rio_Anal_tico_de_Escolas","Drae");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Drae";

		$fdata["sourceSingle"] = "Drae";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Drae";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatarelat_rio_anal_tico_de_escolas["Drae"] = $fdata;
		$tdatarelat_rio_anal_tico_de_escolas[".searchableFields"][] = "Drae";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Relat_rio_Anal_tico_de_Escolas","Bairro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Bairro";

		$fdata["sourceSingle"] = "Bairro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bairro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatarelat_rio_anal_tico_de_escolas["Bairro"] = $fdata;
		$tdatarelat_rio_anal_tico_de_escolas[".searchableFields"][] = "Bairro";
//	Direc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Direc";
	$fdata["GoodName"] = "Direc";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Relat_rio_Anal_tico_de_Escolas","Direc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direc";

		$fdata["sourceSingle"] = "Direc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatarelat_rio_anal_tico_de_escolas["Direc"] = $fdata;
		$tdatarelat_rio_anal_tico_de_escolas[".searchableFields"][] = "Direc";
//	Municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Municipio";
	$fdata["GoodName"] = "Municipio";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Relat_rio_Anal_tico_de_Escolas","Municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Municipio";

		$fdata["sourceSingle"] = "Municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Municipio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatarelat_rio_anal_tico_de_escolas["Municipio"] = $fdata;
		$tdatarelat_rio_anal_tico_de_escolas[".searchableFields"][] = "Municipio";
//	CNPJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CNPJ";
	$fdata["GoodName"] = "CNPJ";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Relat_rio_Anal_tico_de_Escolas","CNPJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CNPJ";

		$fdata["sourceSingle"] = "CNPJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CNPJ";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatarelat_rio_anal_tico_de_escolas["CNPJ"] = $fdata;
		$tdatarelat_rio_anal_tico_de_escolas[".searchableFields"][] = "CNPJ";
//	Endereço
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Endereço";
	$fdata["GoodName"] = "Endere_o";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Relat_rio_Anal_tico_de_Escolas","Endere_o");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Endereço";

		$fdata["sourceSingle"] = "Endereço";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Endereço`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatarelat_rio_anal_tico_de_escolas["Endereço"] = $fdata;
		$tdatarelat_rio_anal_tico_de_escolas[".searchableFields"][] = "Endereço";


$tables_data["Relatório Analítico de Escolas"]=&$tdatarelat_rio_anal_tico_de_escolas;
$field_labels["Relat_rio_Anal_tico_de_Escolas"] = &$fieldLabelsrelat_rio_anal_tico_de_escolas;
$fieldToolTips["Relat_rio_Anal_tico_de_Escolas"] = &$fieldToolTipsrelat_rio_anal_tico_de_escolas;
$placeHolders["Relat_rio_Anal_tico_de_Escolas"] = &$placeHoldersrelat_rio_anal_tico_de_escolas;
$page_titles["Relat_rio_Anal_tico_de_Escolas"] = &$pageTitlesrelat_rio_anal_tico_de_escolas;


changeTextControlsToDate( "Relatório Analítico de Escolas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Relatório Analítico de Escolas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Relatório Analítico de Escolas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_relat_rio_anal_tico_de_escolas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Nome,  Drae,  Bairro,  Direc,  Municipio,  CNPJ,  `Endereço`";
$proto0["m_strFrom"] = "FROM escolas";
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
	"m_strName" => "Nome",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Relatório Analítico de Escolas"
));

$proto6["m_sql"] = "Nome";
$proto6["m_srcTableName"] = "Relatório Analítico de Escolas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Drae",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Relatório Analítico de Escolas"
));

$proto8["m_sql"] = "Drae";
$proto8["m_srcTableName"] = "Relatório Analítico de Escolas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Relatório Analítico de Escolas"
));

$proto10["m_sql"] = "Bairro";
$proto10["m_srcTableName"] = "Relatório Analítico de Escolas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Direc",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Relatório Analítico de Escolas"
));

$proto12["m_sql"] = "Direc";
$proto12["m_srcTableName"] = "Relatório Analítico de Escolas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Municipio",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Relatório Analítico de Escolas"
));

$proto14["m_sql"] = "Municipio";
$proto14["m_srcTableName"] = "Relatório Analítico de Escolas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Relatório Analítico de Escolas"
));

$proto16["m_sql"] = "CNPJ";
$proto16["m_srcTableName"] = "Relatório Analítico de Escolas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Endereço",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Relatório Analítico de Escolas"
));

$proto18["m_sql"] = "`Endereço`";
$proto18["m_srcTableName"] = "Relatório Analítico de Escolas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "escolas";
$proto21["m_srcTableName"] = "Relatório Analítico de Escolas";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cod_escola";
$proto21["m_columns"][] = "CNPJ";
$proto21["m_columns"][] = "Nome";
$proto21["m_columns"][] = "Endereço";
$proto21["m_columns"][] = "Email";
$proto21["m_columns"][] = "Telefone";
$proto21["m_columns"][] = "Descrição";
$proto21["m_columns"][] = "Drae";
$proto21["m_columns"][] = "Bairro";
$proto21["m_columns"][] = "Cidade";
$proto21["m_columns"][] = "Estado";
$proto21["m_columns"][] = "Lat";
$proto21["m_columns"][] = "Lng";
$proto21["m_columns"][] = "Direc";
$proto21["m_columns"][] = "Cep";
$proto21["m_columns"][] = "Tec_resp";
$proto21["m_columns"][] = "Arquivos";
$proto21["m_columns"][] = "Obs";
$proto21["m_columns"][] = "EmailDrae";
$proto21["m_columns"][] = "Municipio";
$proto21["m_columns"][] = "cod_fee";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "escolas";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Relatório Analítico de Escolas";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Relatório Analítico de Escolas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_relat_rio_anal_tico_de_escolas = createSqlQuery_relat_rio_anal_tico_de_escolas();


	
		;

							

$tdatarelat_rio_anal_tico_de_escolas[".sqlquery"] = $queryData_relat_rio_anal_tico_de_escolas;



$tdatarelat_rio_anal_tico_de_escolas[".hasEvents"] = false;

?>