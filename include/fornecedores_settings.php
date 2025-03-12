<?php
$tdatafornecedores = array();
$tdatafornecedores[".searchableFields"] = array();
$tdatafornecedores[".ShortName"] = "fornecedores";
$tdatafornecedores[".OwnerID"] = "CNPJ";
$tdatafornecedores[".OriginalTable"] = "fornecedores";


$tdatafornecedores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafornecedores[".originalPagesByType"] = $tdatafornecedores[".pagesByType"];
$tdatafornecedores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafornecedores[".originalPages"] = $tdatafornecedores[".pages"];
$tdatafornecedores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafornecedores[".originalDefaultPages"] = $tdatafornecedores[".defaultPages"];

//	field labels
$fieldLabelsfornecedores = array();
$fieldToolTipsfornecedores = array();
$pageTitlesfornecedores = array();
$placeHoldersfornecedores = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsfornecedores["Portuguese(Brazil)"] = array();
	$fieldToolTipsfornecedores["Portuguese(Brazil)"] = array();
	$placeHoldersfornecedores["Portuguese(Brazil)"] = array();
	$pageTitlesfornecedores["Portuguese(Brazil)"] = array();
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["CNPJ"] = "CNPJ";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["CNPJ"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["CNPJ"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Raz_o_Social"] = "Razão Social";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Raz_o_Social"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Raz_o_Social"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Telefone_Fixo"] = "Telefone Fixo";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Telefone_Fixo"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Telefone_Fixo"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Respons_vel"] = "Responsável";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Respons_vel"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Respons_vel"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Endere_o"] = "Endereço";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Endere_o"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Endere_o"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Email"] = "Email";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Email"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Email"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["Telefone_Celular"] = "Telefone Celular";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["Telefone_Celular"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["Telefone_Celular"] = "";
	$fieldLabelsfornecedores["Portuguese(Brazil)"]["OBS"] = "OBS";
	$fieldToolTipsfornecedores["Portuguese(Brazil)"]["OBS"] = "";
	$placeHoldersfornecedores["Portuguese(Brazil)"]["OBS"] = "";
	$pageTitlesfornecedores["Portuguese(Brazil)"]["print"] = "Relatório Fornecedor";
	$pageTitlesfornecedores["Portuguese(Brazil)"]["masterprint"] = "Fornecedor";
	if (count($fieldToolTipsfornecedores["Portuguese(Brazil)"]))
		$tdatafornecedores[".isUseToolTips"] = true;
}


	$tdatafornecedores[".NCSearch"] = true;



$tdatafornecedores[".shortTableName"] = "fornecedores";
$tdatafornecedores[".nSecOptions"] = 0;

$tdatafornecedores[".mainTableOwnerID"] = "CNPJ";
$tdatafornecedores[".entityType"] = 0;
$tdatafornecedores[".connId"] = "pedidos_at_localhost";


$tdatafornecedores[".strOriginalTableName"] = "fornecedores";

	



$tdatafornecedores[".showAddInPopup"] = false;

$tdatafornecedores[".showEditInPopup"] = false;

$tdatafornecedores[".showViewInPopup"] = false;

$tdatafornecedores[".listAjax"] = false;
//	temporary
//$tdatafornecedores[".listAjax"] = false;

	$tdatafornecedores[".audit"] = false;

	$tdatafornecedores[".locking"] = false;


$pages = $tdatafornecedores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafornecedores[".edit"] = true;
	$tdatafornecedores[".afterEditAction"] = 1;
	$tdatafornecedores[".closePopupAfterEdit"] = 1;
	$tdatafornecedores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafornecedores[".add"] = true;
$tdatafornecedores[".afterAddAction"] = 3;
$tdatafornecedores[".closePopupAfterAdd"] = 0;
$tdatafornecedores[".afterAddActionDetTable"] = "cad_prod";
}

if( $pages[PAGE_LIST] ) {
	$tdatafornecedores[".list"] = true;
}



$tdatafornecedores[".strSortControlSettingsJSON"] = "";

$tdatafornecedores[".strClickActionJSON"] = "{\"fields\":{\"CNPJ\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Endereço\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"OBS\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Razão Social\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Responsável\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Telefone Celular\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Telefone Fixo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"cad_prod\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"cad_prod\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatafornecedores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafornecedores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafornecedores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafornecedores[".printFriendly"] = true;
}



$tdatafornecedores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafornecedores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafornecedores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafornecedores[".isUseAjaxSuggest"] = true;



																		

$tdatafornecedores[".ajaxCodeSnippetAdded"] = false;

$tdatafornecedores[".buttonsAdded"] = false;

$tdatafornecedores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafornecedores[".isUseTimeForSearch"] = false;


$tdatafornecedores[".badgeColor"] = "00c2c5";


$tdatafornecedores[".allSearchFields"] = array();
$tdatafornecedores[".filterFields"] = array();
$tdatafornecedores[".requiredSearchFields"] = array();

$tdatafornecedores[".googleLikeFields"] = array();
$tdatafornecedores[".googleLikeFields"][] = "id";
$tdatafornecedores[".googleLikeFields"][] = "CNPJ";
$tdatafornecedores[".googleLikeFields"][] = "Razão Social";
$tdatafornecedores[".googleLikeFields"][] = "Telefone Fixo";
$tdatafornecedores[".googleLikeFields"][] = "Responsável";
$tdatafornecedores[".googleLikeFields"][] = "Endereço";
$tdatafornecedores[".googleLikeFields"][] = "Email";
$tdatafornecedores[".googleLikeFields"][] = "Telefone Celular";
$tdatafornecedores[".googleLikeFields"][] = "OBS";



$tdatafornecedores[".tableType"] = "list";

$tdatafornecedores[".printerPageOrientation"] = 0;
$tdatafornecedores[".nPrinterPageScale"] = 100;

$tdatafornecedores[".nPrinterSplitRecords"] = 40;

$tdatafornecedores[".geocodingEnabled"] = false;










$tdatafornecedores[".pageSize"] = 20;

$tdatafornecedores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafornecedores[".strOrderBy"] = $tstrOrderBy;

$tdatafornecedores[".orderindexes"] = array();


$tdatafornecedores[".sqlHead"] = "SELECT id,  	CNPJ,  	`Razão Social`,  	`Telefone Fixo`,  	`Responsável`,  	`Endereço`,  	Email,  	`Telefone Celular`,  	OBS";
$tdatafornecedores[".sqlFrom"] = "FROM fornecedores";
$tdatafornecedores[".sqlWhereExpr"] = "";
$tdatafornecedores[".sqlTail"] = "";

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
$tdatafornecedores[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafornecedores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafornecedores[".arrGroupsPerPage"] = $arrGPP;

$tdatafornecedores[".highlightSearchResults"] = true;

$tableKeysfornecedores = array();
$tableKeysfornecedores[] = "id";
$tableKeysfornecedores[] = "CNPJ";
$tableKeysfornecedores[] = "Razão Social";
$tdatafornecedores[".Keys"] = $tableKeysfornecedores;


$tdatafornecedores[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatafornecedores["id"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "id";
//	CNPJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CNPJ";
	$fdata["GoodName"] = "CNPJ";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores","CNPJ");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatafornecedores["CNPJ"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "CNPJ";
//	Razão Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Razão Social";
	$fdata["GoodName"] = "Raz_o_Social";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores","Raz_o_Social");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Razão Social";

		$fdata["sourceSingle"] = "Razão Social";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Razão Social`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatafornecedores["Razão Social"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Razão Social";
//	Telefone Fixo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Telefone Fixo";
	$fdata["GoodName"] = "Telefone_Fixo";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores","Telefone_Fixo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefone Fixo";

		$fdata["sourceSingle"] = "Telefone Fixo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Telefone Fixo`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatafornecedores["Telefone Fixo"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Telefone Fixo";
//	Responsável
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Responsável";
	$fdata["GoodName"] = "Respons_vel";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores","Respons_vel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Responsável";

		$fdata["sourceSingle"] = "Responsável";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Responsável`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatafornecedores["Responsável"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Responsável";
//	Endereço
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Endereço";
	$fdata["GoodName"] = "Endere_o";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores","Endere_o");
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatafornecedores["Endereço"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Endereço";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

		$fdata["sourceSingle"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatafornecedores["Email"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Email";
//	Telefone Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Telefone Celular";
	$fdata["GoodName"] = "Telefone_Celular";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores","Telefone_Celular");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefone Celular";

		$fdata["sourceSingle"] = "Telefone Celular";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Telefone Celular`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatafornecedores["Telefone Celular"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "Telefone Celular";
//	OBS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "OBS";
	$fdata["GoodName"] = "OBS";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores","OBS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBS";

		$fdata["sourceSingle"] = "OBS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBS";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatafornecedores["OBS"] = $fdata;
		$tdatafornecedores[".searchableFields"][] = "OBS";


$tables_data["fornecedores"]=&$tdatafornecedores;
$field_labels["fornecedores"] = &$fieldLabelsfornecedores;
$fieldToolTips["fornecedores"] = &$fieldToolTipsfornecedores;
$placeHolders["fornecedores"] = &$placeHoldersfornecedores;
$page_titles["fornecedores"] = &$pageTitlesfornecedores;


changeTextControlsToDate( "fornecedores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["fornecedores"] = array();
//	cad_prod
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cad_prod";
		$detailsParam["dOriginalTable"] = "cad_prod";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cad_prod";
	$detailsParam["dCaptionTable"] = GetTableCaption("cad_prod");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["fornecedores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["fornecedores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["fornecedores"][$dIndex]["masterKeys"][]="CNPJ";

				$detailsTablesData["fornecedores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["fornecedores"][$dIndex]["detailKeys"][]="Fornecedor";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["fornecedores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fornecedores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	CNPJ,  	`Razão Social`,  	`Telefone Fixo`,  	`Responsável`,  	`Endereço`,  	Email,  	`Telefone Celular`,  	OBS";
$proto0["m_strFrom"] = "FROM fornecedores";
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
	"m_strName" => "id",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "fornecedores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores"
));

$proto8["m_sql"] = "CNPJ";
$proto8["m_srcTableName"] = "fornecedores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Razão Social",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores"
));

$proto10["m_sql"] = "`Razão Social`";
$proto10["m_srcTableName"] = "fornecedores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefone Fixo",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores"
));

$proto12["m_sql"] = "`Telefone Fixo`";
$proto12["m_srcTableName"] = "fornecedores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Responsável",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores"
));

$proto14["m_sql"] = "`Responsável`";
$proto14["m_srcTableName"] = "fornecedores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Endereço",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores"
));

$proto16["m_sql"] = "`Endereço`";
$proto16["m_srcTableName"] = "fornecedores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores"
));

$proto18["m_sql"] = "Email";
$proto18["m_srcTableName"] = "fornecedores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefone Celular",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores"
));

$proto20["m_sql"] = "`Telefone Celular`";
$proto20["m_srcTableName"] = "fornecedores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "OBS",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores"
));

$proto22["m_sql"] = "OBS";
$proto22["m_srcTableName"] = "fornecedores";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "fornecedores";
$proto25["m_srcTableName"] = "fornecedores";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "CNPJ";
$proto25["m_columns"][] = "Razão Social";
$proto25["m_columns"][] = "Telefone Fixo";
$proto25["m_columns"][] = "Responsável";
$proto25["m_columns"][] = "Endereço";
$proto25["m_columns"][] = "Email";
$proto25["m_columns"][] = "Telefone Celular";
$proto25["m_columns"][] = "OBS";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "fornecedores";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "fornecedores";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fornecedores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fornecedores = createSqlQuery_fornecedores();


	
		;

									

$tdatafornecedores[".sqlquery"] = $queryData_fornecedores;



$tdatafornecedores[".hasEvents"] = false;

?>