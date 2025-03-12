<?php
$tdataitens = array();
$tdataitens[".searchableFields"] = array();
$tdataitens[".ShortName"] = "itens";
$tdataitens[".OwnerID"] = "";
$tdataitens[".OriginalTable"] = "itens";


$tdataitens[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataitens[".originalPagesByType"] = $tdataitens[".pagesByType"];
$tdataitens[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataitens[".originalPages"] = $tdataitens[".pages"];
$tdataitens[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataitens[".originalDefaultPages"] = $tdataitens[".defaultPages"];

//	field labels
$fieldLabelsitens = array();
$fieldToolTipsitens = array();
$pageTitlesitens = array();
$placeHoldersitens = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsitens["Portuguese(Brazil)"] = array();
	$fieldToolTipsitens["Portuguese(Brazil)"] = array();
	$placeHoldersitens["Portuguese(Brazil)"] = array();
	$pageTitlesitens["Portuguese(Brazil)"] = array();
	$fieldLabelsitens["Portuguese(Brazil)"]["cod"] = "Cod";
	$fieldToolTipsitens["Portuguese(Brazil)"]["cod"] = "";
	$placeHoldersitens["Portuguese(Brazil)"]["cod"] = "";
	$fieldLabelsitens["Portuguese(Brazil)"]["cod_ped"] = "Cod Ped";
	$fieldToolTipsitens["Portuguese(Brazil)"]["cod_ped"] = "";
	$placeHoldersitens["Portuguese(Brazil)"]["cod_ped"] = "";
	$fieldLabelsitens["Portuguese(Brazil)"]["genero"] = "Gênero";
	$fieldToolTipsitens["Portuguese(Brazil)"]["genero"] = "";
	$placeHoldersitens["Portuguese(Brazil)"]["genero"] = "";
	$fieldLabelsitens["Portuguese(Brazil)"]["qtd"] = "Qtd";
	$fieldToolTipsitens["Portuguese(Brazil)"]["qtd"] = "";
	$placeHoldersitens["Portuguese(Brazil)"]["qtd"] = "";
	$fieldLabelsitens["Portuguese(Brazil)"]["valor"] = "Valor";
	$fieldToolTipsitens["Portuguese(Brazil)"]["valor"] = "";
	$placeHoldersitens["Portuguese(Brazil)"]["valor"] = "";
	$fieldLabelsitens["Portuguese(Brazil)"]["total"] = "Total";
	$fieldToolTipsitens["Portuguese(Brazil)"]["total"] = "";
	$placeHoldersitens["Portuguese(Brazil)"]["total"] = "";
	$fieldLabelsitens["Portuguese(Brazil)"]["cod_np"] = "Cod Np";
	$fieldToolTipsitens["Portuguese(Brazil)"]["cod_np"] = "";
	$placeHoldersitens["Portuguese(Brazil)"]["cod_np"] = "";
	$fieldLabelsitens["Portuguese(Brazil)"]["resto"] = "Resto";
	$fieldToolTipsitens["Portuguese(Brazil)"]["resto"] = "";
	$placeHoldersitens["Portuguese(Brazil)"]["resto"] = "";
	$fieldLabelsitens["Portuguese(Brazil)"]["Marca"] = "Marca";
	$fieldToolTipsitens["Portuguese(Brazil)"]["Marca"] = "";
	$placeHoldersitens["Portuguese(Brazil)"]["Marca"] = "";
	$pageTitlesitens["Portuguese(Brazil)"]["print"] = "";
	if (count($fieldToolTipsitens["Portuguese(Brazil)"]))
		$tdataitens[".isUseToolTips"] = true;
}


	$tdataitens[".NCSearch"] = true;



$tdataitens[".shortTableName"] = "itens";
$tdataitens[".nSecOptions"] = 0;

$tdataitens[".mainTableOwnerID"] = "";
$tdataitens[".entityType"] = 0;
$tdataitens[".connId"] = "pedidos_at_localhost";


$tdataitens[".strOriginalTableName"] = "itens";

	



$tdataitens[".showAddInPopup"] = false;

$tdataitens[".showEditInPopup"] = false;

$tdataitens[".showViewInPopup"] = false;

$tdataitens[".listAjax"] = false;
//	temporary
//$tdataitens[".listAjax"] = false;

	$tdataitens[".audit"] = false;

	$tdataitens[".locking"] = false;


$pages = $tdataitens[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitens[".edit"] = true;
	$tdataitens[".afterEditAction"] = 1;
	$tdataitens[".closePopupAfterEdit"] = 1;
	$tdataitens[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitens[".add"] = true;
$tdataitens[".afterAddAction"] = 1;
$tdataitens[".closePopupAfterAdd"] = 1;
$tdataitens[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitens[".list"] = true;
}



$tdataitens[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataitens[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitens[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitens[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitens[".printFriendly"] = true;
}



$tdataitens[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitens[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitens[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitens[".isUseAjaxSuggest"] = true;



								
																													

$tdataitens[".ajaxCodeSnippetAdded"] = false;

$tdataitens[".buttonsAdded"] = true;

$tdataitens[".addPageEvents"] = true;

// use timepicker for search panel
$tdataitens[".isUseTimeForSearch"] = false;


$tdataitens[".badgeColor"] = "daa520";


$tdataitens[".allSearchFields"] = array();
$tdataitens[".filterFields"] = array();
$tdataitens[".requiredSearchFields"] = array();

$tdataitens[".googleLikeFields"] = array();
$tdataitens[".googleLikeFields"][] = "cod";
$tdataitens[".googleLikeFields"][] = "cod_ped";
$tdataitens[".googleLikeFields"][] = "genero";
$tdataitens[".googleLikeFields"][] = "qtd";
$tdataitens[".googleLikeFields"][] = "valor";
$tdataitens[".googleLikeFields"][] = "total";
$tdataitens[".googleLikeFields"][] = "cod_np";
$tdataitens[".googleLikeFields"][] = "resto";
$tdataitens[".googleLikeFields"][] = "Marca";



$tdataitens[".tableType"] = "list";

$tdataitens[".printerPageOrientation"] = 0;
$tdataitens[".nPrinterPageScale"] = 100;

$tdataitens[".nPrinterSplitRecords"] = 40;

$tdataitens[".geocodingEnabled"] = false;










$tdataitens[".pageSize"] = 20;

$tdataitens[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataitens[".strOrderBy"] = $tstrOrderBy;

$tdataitens[".orderindexes"] = array();


$tdataitens[".sqlHead"] = "SELECT cod,  	cod_ped,  	genero,  	qtd,  	valor,  	total,  	cod_np,  	resto,  	Marca";
$tdataitens[".sqlFrom"] = "FROM itens";
$tdataitens[".sqlWhereExpr"] = "";
$tdataitens[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitens[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitens[".arrGroupsPerPage"] = $arrGPP;

$tdataitens[".highlightSearchResults"] = true;

$tableKeysitens = array();
$tableKeysitens[] = "cod";
$tdataitens[".Keys"] = $tableKeysitens;


$tdataitens[".hideMobileList"] = array();




//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens","cod");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cod";

		$fdata["sourceSingle"] = "cod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod";

	
	
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


	$tdataitens["cod"] = $fdata;
		$tdataitens[".searchableFields"][] = "cod";
//	cod_ped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cod_ped";
	$fdata["GoodName"] = "cod_ped";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens","cod_ped");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cod_ped";

		$fdata["sourceSingle"] = "cod_ped";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_ped";

	
	
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


	$tdataitens["cod_ped"] = $fdata;
		$tdataitens[".searchableFields"][] = "cod_ped";
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens","genero");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "genero";

		$fdata["sourceSingle"] = "genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "genero";

	
	
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
	$edata["LookupTable"] = "cad_prod";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

				$edata["LookupWhere"] = "Fornecedor = ':master.cnpj_fornecedor'";


	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
	
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


	$tdataitens["genero"] = $fdata;
		$tdataitens[".searchableFields"][] = "genero";
//	qtd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "qtd";
	$fdata["GoodName"] = "qtd";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens","qtd");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "qtd";

		$fdata["sourceSingle"] = "qtd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qtd";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "genero_event", "type" => "blur" );
	$edata["fieldEvents"] = $eventsData;




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


	$tdataitens["qtd"] = $fdata;
		$tdataitens[".searchableFields"][] = "qtd";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens","valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor";

		$fdata["sourceSingle"] = "valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataitens["valor"] = $fdata;
		$tdataitens[".searchableFields"][] = "valor";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens","total");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "total";

		$fdata["sourceSingle"] = "total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataitens["total"] = $fdata;
		$tdataitens[".searchableFields"][] = "total";
//	cod_np
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cod_np";
	$fdata["GoodName"] = "cod_np";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens","cod_np");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cod_np";

		$fdata["sourceSingle"] = "cod_np";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_np";

	
	
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


	$tdataitens["cod_np"] = $fdata;
		$tdataitens[".searchableFields"][] = "cod_np";
//	resto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "resto";
	$fdata["GoodName"] = "resto";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens","resto");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "resto";

		$fdata["sourceSingle"] = "resto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resto";

	
	
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


	$tdataitens["resto"] = $fdata;
		$tdataitens[".searchableFields"][] = "resto";
//	Marca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Marca";
	$fdata["GoodName"] = "Marca";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens","Marca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Marca";

		$fdata["sourceSingle"] = "Marca";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Marca";

	
	
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


	$tdataitens["Marca"] = $fdata;
		$tdataitens[".searchableFields"][] = "Marca";


$tables_data["itens"]=&$tdataitens;
$field_labels["itens"] = &$fieldLabelsitens;
$fieldToolTips["itens"] = &$fieldToolTipsitens;
$placeHolders["itens"] = &$placeHoldersitens;
$page_titles["itens"] = &$pageTitlesitens;


changeTextControlsToDate( "itens" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["itens"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["itens"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pedidos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pedidos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pedidos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["itens"][0] = $masterParams;
				$masterTablesData["itens"][0]["masterKeys"] = array();
	$masterTablesData["itens"][0]["masterKeys"][]="cod";
				$masterTablesData["itens"][0]["masterKeys"][]="Cod_np";
				$masterTablesData["itens"][0]["detailKeys"] = array();
	$masterTablesData["itens"][0]["detailKeys"][]="cod_ped";
				$masterTablesData["itens"][0]["detailKeys"][]="cod_np";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_itens()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cod,  	cod_ped,  	genero,  	qtd,  	valor,  	total,  	cod_np,  	resto,  	Marca";
$proto0["m_strFrom"] = "FROM itens";
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
	"m_strTable" => "itens",
	"m_srcTableName" => "itens"
));

$proto6["m_sql"] = "cod";
$proto6["m_srcTableName"] = "itens";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_ped",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens"
));

$proto8["m_sql"] = "cod_ped";
$proto8["m_srcTableName"] = "itens";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens"
));

$proto10["m_sql"] = "genero";
$proto10["m_srcTableName"] = "itens";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "qtd",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens"
));

$proto12["m_sql"] = "qtd";
$proto12["m_srcTableName"] = "itens";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens"
));

$proto14["m_sql"] = "valor";
$proto14["m_srcTableName"] = "itens";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens"
));

$proto16["m_sql"] = "total";
$proto16["m_srcTableName"] = "itens";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_np",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens"
));

$proto18["m_sql"] = "cod_np";
$proto18["m_srcTableName"] = "itens";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "resto",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens"
));

$proto20["m_sql"] = "resto";
$proto20["m_srcTableName"] = "itens";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Marca",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens"
));

$proto22["m_sql"] = "Marca";
$proto22["m_srcTableName"] = "itens";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "itens";
$proto25["m_srcTableName"] = "itens";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cod";
$proto25["m_columns"][] = "cod_ped";
$proto25["m_columns"][] = "genero";
$proto25["m_columns"][] = "qtd";
$proto25["m_columns"][] = "valor";
$proto25["m_columns"][] = "total";
$proto25["m_columns"][] = "cod_np";
$proto25["m_columns"][] = "resto";
$proto25["m_columns"][] = "Marca";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "itens";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "itens";
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
$proto0["m_srcTableName"]="itens";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_itens = createSqlQuery_itens();


	
		;

									

$tdataitens[".sqlquery"] = $queryData_itens;



include_once(getabspath("include/itens_events.php"));
$tdataitens[".hasEvents"] = true;

?>