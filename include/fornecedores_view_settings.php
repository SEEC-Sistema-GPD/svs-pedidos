<?php
$tdatafornecedores_view = array();
$tdatafornecedores_view[".searchableFields"] = array();
$tdatafornecedores_view[".ShortName"] = "fornecedores_view";
$tdatafornecedores_view[".OwnerID"] = "CNPJ";
$tdatafornecedores_view[".OriginalTable"] = "fornecedores";


$tdatafornecedores_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafornecedores_view[".originalPagesByType"] = $tdatafornecedores_view[".pagesByType"];
$tdatafornecedores_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafornecedores_view[".originalPages"] = $tdatafornecedores_view[".pages"];
$tdatafornecedores_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafornecedores_view[".originalDefaultPages"] = $tdatafornecedores_view[".defaultPages"];

//	field labels
$fieldLabelsfornecedores_view = array();
$fieldToolTipsfornecedores_view = array();
$pageTitlesfornecedores_view = array();
$placeHoldersfornecedores_view = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"] = array();
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"] = array();
	$placeHoldersfornecedores_view["Portuguese(Brazil)"] = array();
	$pageTitlesfornecedores_view["Portuguese(Brazil)"] = array();
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersfornecedores_view["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"]["CNPJ"] = "CNPJ";
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"]["CNPJ"] = "";
	$placeHoldersfornecedores_view["Portuguese(Brazil)"]["CNPJ"] = "";
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"]["Raz_o_Social"] = "Razão Social";
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"]["Raz_o_Social"] = "";
	$placeHoldersfornecedores_view["Portuguese(Brazil)"]["Raz_o_Social"] = "";
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"]["Telefone_Fixo"] = "Telefone Fixo";
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"]["Telefone_Fixo"] = "";
	$placeHoldersfornecedores_view["Portuguese(Brazil)"]["Telefone_Fixo"] = "";
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"]["Respons_vel"] = "Responsável";
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"]["Respons_vel"] = "";
	$placeHoldersfornecedores_view["Portuguese(Brazil)"]["Respons_vel"] = "";
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"]["Endere_o"] = "Endereço";
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"]["Endere_o"] = "";
	$placeHoldersfornecedores_view["Portuguese(Brazil)"]["Endere_o"] = "";
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"]["Email"] = "Email";
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"]["Email"] = "";
	$placeHoldersfornecedores_view["Portuguese(Brazil)"]["Email"] = "";
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"]["Telefone_Celular"] = "Telefone Celular";
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"]["Telefone_Celular"] = "";
	$placeHoldersfornecedores_view["Portuguese(Brazil)"]["Telefone_Celular"] = "";
	$fieldLabelsfornecedores_view["Portuguese(Brazil)"]["OBS"] = "OBS";
	$fieldToolTipsfornecedores_view["Portuguese(Brazil)"]["OBS"] = "";
	$placeHoldersfornecedores_view["Portuguese(Brazil)"]["OBS"] = "";
	$pageTitlesfornecedores_view["Portuguese(Brazil)"]["masterlist"] = "Fornecedor";
	$pageTitlesfornecedores_view["Portuguese(Brazil)"]["print"] = "Fornecedores";
	$pageTitlesfornecedores_view["Portuguese(Brazil)"]["add"] = "Fornecedores, Adicionar Novo";
	$pageTitlesfornecedores_view["Portuguese(Brazil)"]["edit"] = "Fornecedores, Editar ";
	$pageTitlesfornecedores_view["Portuguese(Brazil)"]["view"] = "Fornecedores";
	$pageTitlesfornecedores_view["Portuguese(Brazil)"]["masterprint"] = "Fornecedores ";
	if (count($fieldToolTipsfornecedores_view["Portuguese(Brazil)"]))
		$tdatafornecedores_view[".isUseToolTips"] = true;
}


	$tdatafornecedores_view[".NCSearch"] = true;



$tdatafornecedores_view[".shortTableName"] = "fornecedores_view";
$tdatafornecedores_view[".nSecOptions"] = 1;

$tdatafornecedores_view[".mainTableOwnerID"] = "CNPJ";
$tdatafornecedores_view[".entityType"] = 1;
$tdatafornecedores_view[".connId"] = "pedidos_at_localhost";


$tdatafornecedores_view[".strOriginalTableName"] = "fornecedores";

	



$tdatafornecedores_view[".showAddInPopup"] = false;

$tdatafornecedores_view[".showEditInPopup"] = false;

$tdatafornecedores_view[".showViewInPopup"] = false;

$tdatafornecedores_view[".listAjax"] = false;
//	temporary
//$tdatafornecedores_view[".listAjax"] = false;

	$tdatafornecedores_view[".audit"] = false;

	$tdatafornecedores_view[".locking"] = false;


$pages = $tdatafornecedores_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafornecedores_view[".edit"] = true;
	$tdatafornecedores_view[".afterEditAction"] = 1;
	$tdatafornecedores_view[".closePopupAfterEdit"] = 1;
	$tdatafornecedores_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafornecedores_view[".add"] = true;
$tdatafornecedores_view[".afterAddAction"] = 1;
$tdatafornecedores_view[".closePopupAfterAdd"] = 1;
$tdatafornecedores_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafornecedores_view[".list"] = true;
}



$tdatafornecedores_view[".strSortControlSettingsJSON"] = "";

$tdatafornecedores_view[".strClickActionJSON"] = "{\"fields\":{\"CNPJ\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Endereço\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"OBS\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Razão Social\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Responsável\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Telefone Celular\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Telefone Fixo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"pedidos_view\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"pedidos_view\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatafornecedores_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafornecedores_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafornecedores_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafornecedores_view[".printFriendly"] = true;
}



$tdatafornecedores_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafornecedores_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafornecedores_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafornecedores_view[".isUseAjaxSuggest"] = true;



																		

$tdatafornecedores_view[".ajaxCodeSnippetAdded"] = false;

$tdatafornecedores_view[".buttonsAdded"] = false;

$tdatafornecedores_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafornecedores_view[".isUseTimeForSearch"] = false;


$tdatafornecedores_view[".badgeColor"] = "D2AF80";


$tdatafornecedores_view[".allSearchFields"] = array();
$tdatafornecedores_view[".filterFields"] = array();
$tdatafornecedores_view[".requiredSearchFields"] = array();

$tdatafornecedores_view[".googleLikeFields"] = array();
$tdatafornecedores_view[".googleLikeFields"][] = "id";
$tdatafornecedores_view[".googleLikeFields"][] = "CNPJ";
$tdatafornecedores_view[".googleLikeFields"][] = "Razão Social";
$tdatafornecedores_view[".googleLikeFields"][] = "Telefone Fixo";
$tdatafornecedores_view[".googleLikeFields"][] = "Responsável";
$tdatafornecedores_view[".googleLikeFields"][] = "Endereço";
$tdatafornecedores_view[".googleLikeFields"][] = "Email";
$tdatafornecedores_view[".googleLikeFields"][] = "Telefone Celular";
$tdatafornecedores_view[".googleLikeFields"][] = "OBS";



$tdatafornecedores_view[".tableType"] = "list";

$tdatafornecedores_view[".printerPageOrientation"] = 0;
$tdatafornecedores_view[".nPrinterPageScale"] = 100;

$tdatafornecedores_view[".nPrinterSplitRecords"] = 40;

$tdatafornecedores_view[".geocodingEnabled"] = false;










$tdatafornecedores_view[".pageSize"] = 20;

$tdatafornecedores_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafornecedores_view[".strOrderBy"] = $tstrOrderBy;

$tdatafornecedores_view[".orderindexes"] = array();


$tdatafornecedores_view[".sqlHead"] = "SELECT id,  	CNPJ,  	`Razão Social`,  	`Telefone Fixo`,  	`Responsável`,  	`Endereço`,  	Email,  	`Telefone Celular`,  	OBS";
$tdatafornecedores_view[".sqlFrom"] = "FROM fornecedores";
$tdatafornecedores_view[".sqlWhereExpr"] = "";
$tdatafornecedores_view[".sqlTail"] = "";

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
$tdatafornecedores_view[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafornecedores_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafornecedores_view[".arrGroupsPerPage"] = $arrGPP;

$tdatafornecedores_view[".highlightSearchResults"] = true;

$tableKeysfornecedores_view = array();
$tableKeysfornecedores_view[] = "id";
$tableKeysfornecedores_view[] = "CNPJ";
$tableKeysfornecedores_view[] = "Razão Social";
$tdatafornecedores_view[".Keys"] = $tableKeysfornecedores_view;


$tdatafornecedores_view[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores_view","id");
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


	$tdatafornecedores_view["id"] = $fdata;
		$tdatafornecedores_view[".searchableFields"][] = "id";
//	CNPJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CNPJ";
	$fdata["GoodName"] = "CNPJ";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores_view","CNPJ");
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


	$tdatafornecedores_view["CNPJ"] = $fdata;
		$tdatafornecedores_view[".searchableFields"][] = "CNPJ";
//	Razão Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Razão Social";
	$fdata["GoodName"] = "Raz_o_Social";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores_view","Raz_o_Social");
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


	$tdatafornecedores_view["Razão Social"] = $fdata;
		$tdatafornecedores_view[".searchableFields"][] = "Razão Social";
//	Telefone Fixo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Telefone Fixo";
	$fdata["GoodName"] = "Telefone_Fixo";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores_view","Telefone_Fixo");
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


	$tdatafornecedores_view["Telefone Fixo"] = $fdata;
		$tdatafornecedores_view[".searchableFields"][] = "Telefone Fixo";
//	Responsável
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Responsável";
	$fdata["GoodName"] = "Respons_vel";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores_view","Respons_vel");
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


	$tdatafornecedores_view["Responsável"] = $fdata;
		$tdatafornecedores_view[".searchableFields"][] = "Responsável";
//	Endereço
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Endereço";
	$fdata["GoodName"] = "Endere_o";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores_view","Endere_o");
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


	$tdatafornecedores_view["Endereço"] = $fdata;
		$tdatafornecedores_view[".searchableFields"][] = "Endereço";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores_view","Email");
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


	$tdatafornecedores_view["Email"] = $fdata;
		$tdatafornecedores_view[".searchableFields"][] = "Email";
//	Telefone Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Telefone Celular";
	$fdata["GoodName"] = "Telefone_Celular";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores_view","Telefone_Celular");
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


	$tdatafornecedores_view["Telefone Celular"] = $fdata;
		$tdatafornecedores_view[".searchableFields"][] = "Telefone Celular";
//	OBS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "OBS";
	$fdata["GoodName"] = "OBS";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("fornecedores_view","OBS");
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


	$tdatafornecedores_view["OBS"] = $fdata;
		$tdatafornecedores_view[".searchableFields"][] = "OBS";


$tables_data["fornecedores_view"]=&$tdatafornecedores_view;
$field_labels["fornecedores_view"] = &$fieldLabelsfornecedores_view;
$fieldToolTips["fornecedores_view"] = &$fieldToolTipsfornecedores_view;
$placeHolders["fornecedores_view"] = &$placeHoldersfornecedores_view;
$page_titles["fornecedores_view"] = &$pageTitlesfornecedores_view;


changeTextControlsToDate( "fornecedores_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["fornecedores_view"] = array();
//	pedidos_view
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pedidos_view";
		$detailsParam["dOriginalTable"] = "pedidos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pedidos_view";
	$detailsParam["dCaptionTable"] = GetTableCaption("pedidos_view");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["fornecedores_view"][$dIndex] = $detailsParam;

	
		$detailsTablesData["fornecedores_view"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["fornecedores_view"][$dIndex]["masterKeys"][]="CNPJ";

				$detailsTablesData["fornecedores_view"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["fornecedores_view"][$dIndex]["detailKeys"][]="cnpj_fornecedor";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["fornecedores_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fornecedores_view()
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
	"m_srcTableName" => "fornecedores_view"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "fornecedores_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores_view"
));

$proto8["m_sql"] = "CNPJ";
$proto8["m_srcTableName"] = "fornecedores_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Razão Social",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores_view"
));

$proto10["m_sql"] = "`Razão Social`";
$proto10["m_srcTableName"] = "fornecedores_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefone Fixo",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores_view"
));

$proto12["m_sql"] = "`Telefone Fixo`";
$proto12["m_srcTableName"] = "fornecedores_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Responsável",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores_view"
));

$proto14["m_sql"] = "`Responsável`";
$proto14["m_srcTableName"] = "fornecedores_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Endereço",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores_view"
));

$proto16["m_sql"] = "`Endereço`";
$proto16["m_srcTableName"] = "fornecedores_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores_view"
));

$proto18["m_sql"] = "Email";
$proto18["m_srcTableName"] = "fornecedores_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefone Celular",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores_view"
));

$proto20["m_sql"] = "`Telefone Celular`";
$proto20["m_srcTableName"] = "fornecedores_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "OBS",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "fornecedores_view"
));

$proto22["m_sql"] = "OBS";
$proto22["m_srcTableName"] = "fornecedores_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "fornecedores";
$proto25["m_srcTableName"] = "fornecedores_view";
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
$proto24["m_srcTableName"] = "fornecedores_view";
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
$proto0["m_srcTableName"]="fornecedores_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fornecedores_view = createSqlQuery_fornecedores_view();


	
		;

									

$tdatafornecedores_view[".sqlquery"] = $queryData_fornecedores_view;



$tdatafornecedores_view[".hasEvents"] = false;

?>