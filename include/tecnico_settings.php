<?php
$tdatatecnico = array();
$tdatatecnico[".searchableFields"] = array();
$tdatatecnico[".ShortName"] = "tecnico";
$tdatatecnico[".OwnerID"] = "";
$tdatatecnico[".OriginalTable"] = "tecnico";


$tdatatecnico[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatecnico[".originalPagesByType"] = $tdatatecnico[".pagesByType"];
$tdatatecnico[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatecnico[".originalPages"] = $tdatatecnico[".pages"];
$tdatatecnico[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatecnico[".originalDefaultPages"] = $tdatatecnico[".defaultPages"];

//	field labels
$fieldLabelstecnico = array();
$fieldToolTipstecnico = array();
$pageTitlestecnico = array();
$placeHolderstecnico = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstecnico["Portuguese(Brazil)"] = array();
	$fieldToolTipstecnico["Portuguese(Brazil)"] = array();
	$placeHolderstecnico["Portuguese(Brazil)"] = array();
	$pageTitlestecnico["Portuguese(Brazil)"] = array();
	$fieldLabelstecnico["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipstecnico["Portuguese(Brazil)"]["id"] = "";
	$placeHolderstecnico["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelstecnico["Portuguese(Brazil)"]["Mat"] = "Mat";
	$fieldToolTipstecnico["Portuguese(Brazil)"]["Mat"] = "";
	$placeHolderstecnico["Portuguese(Brazil)"]["Mat"] = "";
	$fieldLabelstecnico["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipstecnico["Portuguese(Brazil)"]["Nome"] = "";
	$placeHolderstecnico["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelstecnico["Portuguese(Brazil)"]["cnpj_escola"] = "Cnpj Escola";
	$fieldToolTipstecnico["Portuguese(Brazil)"]["cnpj_escola"] = "";
	$placeHolderstecnico["Portuguese(Brazil)"]["cnpj_escola"] = "";
	$fieldLabelstecnico["Portuguese(Brazil)"]["parcela"] = "Parcela";
	$fieldToolTipstecnico["Portuguese(Brazil)"]["parcela"] = "";
	$placeHolderstecnico["Portuguese(Brazil)"]["parcela"] = "";
	$fieldLabelstecnico["Portuguese(Brazil)"]["exercicio"] = "Exercicio";
	$fieldToolTipstecnico["Portuguese(Brazil)"]["exercicio"] = "";
	$placeHolderstecnico["Portuguese(Brazil)"]["exercicio"] = "";
	if (count($fieldToolTipstecnico["Portuguese(Brazil)"]))
		$tdatatecnico[".isUseToolTips"] = true;
}


	$tdatatecnico[".NCSearch"] = true;



$tdatatecnico[".shortTableName"] = "tecnico";
$tdatatecnico[".nSecOptions"] = 0;

$tdatatecnico[".mainTableOwnerID"] = "";
$tdatatecnico[".entityType"] = 0;
$tdatatecnico[".connId"] = "pedidos_at_localhost";


$tdatatecnico[".strOriginalTableName"] = "tecnico";

	



$tdatatecnico[".showAddInPopup"] = false;

$tdatatecnico[".showEditInPopup"] = false;

$tdatatecnico[".showViewInPopup"] = false;

$tdatatecnico[".listAjax"] = false;
//	temporary
//$tdatatecnico[".listAjax"] = false;

	$tdatatecnico[".audit"] = false;

	$tdatatecnico[".locking"] = false;


$pages = $tdatatecnico[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatecnico[".edit"] = true;
	$tdatatecnico[".afterEditAction"] = 1;
	$tdatatecnico[".closePopupAfterEdit"] = 1;
	$tdatatecnico[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatecnico[".add"] = true;
$tdatatecnico[".afterAddAction"] = 1;
$tdatatecnico[".closePopupAfterAdd"] = 1;
$tdatatecnico[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatecnico[".list"] = true;
}



$tdatatecnico[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatecnico[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatecnico[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatecnico[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatecnico[".printFriendly"] = true;
}



$tdatatecnico[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatecnico[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatecnico[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatecnico[".isUseAjaxSuggest"] = true;



																		

$tdatatecnico[".ajaxCodeSnippetAdded"] = false;

$tdatatecnico[".buttonsAdded"] = false;

$tdatatecnico[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatecnico[".isUseTimeForSearch"] = false;


$tdatatecnico[".badgeColor"] = "5F9EA0";


$tdatatecnico[".allSearchFields"] = array();
$tdatatecnico[".filterFields"] = array();
$tdatatecnico[".requiredSearchFields"] = array();

$tdatatecnico[".googleLikeFields"] = array();
$tdatatecnico[".googleLikeFields"][] = "id";
$tdatatecnico[".googleLikeFields"][] = "Mat";
$tdatatecnico[".googleLikeFields"][] = "Nome";
$tdatatecnico[".googleLikeFields"][] = "cnpj_escola";
$tdatatecnico[".googleLikeFields"][] = "parcela";
$tdatatecnico[".googleLikeFields"][] = "exercicio";



$tdatatecnico[".tableType"] = "list";

$tdatatecnico[".printerPageOrientation"] = 0;
$tdatatecnico[".nPrinterPageScale"] = 100;

$tdatatecnico[".nPrinterSplitRecords"] = 40;

$tdatatecnico[".geocodingEnabled"] = false;










$tdatatecnico[".pageSize"] = 20;

$tdatatecnico[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatecnico[".strOrderBy"] = $tstrOrderBy;

$tdatatecnico[".orderindexes"] = array();


$tdatatecnico[".sqlHead"] = "SELECT id,  	Mat,  	Nome,  	cnpj_escola,  	parcela,  	exercicio";
$tdatatecnico[".sqlFrom"] = "FROM tecnico";
$tdatatecnico[".sqlWhereExpr"] = "";
$tdatatecnico[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatecnico[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatecnico[".arrGroupsPerPage"] = $arrGPP;

$tdatatecnico[".highlightSearchResults"] = true;

$tableKeystecnico = array();
$tableKeystecnico[] = "id";
$tdatatecnico[".Keys"] = $tableKeystecnico;


$tdatatecnico[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tecnico";
	$fdata["Label"] = GetFieldLabel("tecnico","id");
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


	$tdatatecnico["id"] = $fdata;
		$tdatatecnico[".searchableFields"][] = "id";
//	Mat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Mat";
	$fdata["GoodName"] = "Mat";
	$fdata["ownerTable"] = "tecnico";
	$fdata["Label"] = GetFieldLabel("tecnico","Mat");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Mat";

		$fdata["sourceSingle"] = "Mat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mat";

	
	
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


	$tdatatecnico["Mat"] = $fdata;
		$tdatatecnico[".searchableFields"][] = "Mat";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "tecnico";
	$fdata["Label"] = GetFieldLabel("tecnico","Nome");
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


	$tdatatecnico["Nome"] = $fdata;
		$tdatatecnico[".searchableFields"][] = "Nome";
//	cnpj_escola
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cnpj_escola";
	$fdata["GoodName"] = "cnpj_escola";
	$fdata["ownerTable"] = "tecnico";
	$fdata["Label"] = GetFieldLabel("tecnico","cnpj_escola");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cnpj_escola";

		$fdata["sourceSingle"] = "cnpj_escola";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cnpj_escola";

	
	
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


	$tdatatecnico["cnpj_escola"] = $fdata;
		$tdatatecnico[".searchableFields"][] = "cnpj_escola";
//	parcela
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "parcela";
	$fdata["GoodName"] = "parcela";
	$fdata["ownerTable"] = "tecnico";
	$fdata["Label"] = GetFieldLabel("tecnico","parcela");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "parcela";

		$fdata["sourceSingle"] = "parcela";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parcela";

	
	
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


	$tdatatecnico["parcela"] = $fdata;
		$tdatatecnico[".searchableFields"][] = "parcela";
//	exercicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "exercicio";
	$fdata["GoodName"] = "exercicio";
	$fdata["ownerTable"] = "tecnico";
	$fdata["Label"] = GetFieldLabel("tecnico","exercicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "exercicio";

		$fdata["sourceSingle"] = "exercicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exercicio";

	
	
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


	$tdatatecnico["exercicio"] = $fdata;
		$tdatatecnico[".searchableFields"][] = "exercicio";


$tables_data["tecnico"]=&$tdatatecnico;
$field_labels["tecnico"] = &$fieldLabelstecnico;
$fieldToolTips["tecnico"] = &$fieldToolTipstecnico;
$placeHolders["tecnico"] = &$placeHolderstecnico;
$page_titles["tecnico"] = &$pageTitlestecnico;


changeTextControlsToDate( "tecnico" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tecnico"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tecnico"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tecnico()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Mat,  	Nome,  	cnpj_escola,  	parcela,  	exercicio";
$proto0["m_strFrom"] = "FROM tecnico";
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
	"m_strTable" => "tecnico",
	"m_srcTableName" => "tecnico"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tecnico";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Mat",
	"m_strTable" => "tecnico",
	"m_srcTableName" => "tecnico"
));

$proto8["m_sql"] = "Mat";
$proto8["m_srcTableName"] = "tecnico";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "tecnico",
	"m_srcTableName" => "tecnico"
));

$proto10["m_sql"] = "Nome";
$proto10["m_srcTableName"] = "tecnico";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cnpj_escola",
	"m_strTable" => "tecnico",
	"m_srcTableName" => "tecnico"
));

$proto12["m_sql"] = "cnpj_escola";
$proto12["m_srcTableName"] = "tecnico";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "parcela",
	"m_strTable" => "tecnico",
	"m_srcTableName" => "tecnico"
));

$proto14["m_sql"] = "parcela";
$proto14["m_srcTableName"] = "tecnico";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "exercicio",
	"m_strTable" => "tecnico",
	"m_srcTableName" => "tecnico"
));

$proto16["m_sql"] = "exercicio";
$proto16["m_srcTableName"] = "tecnico";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tecnico";
$proto19["m_srcTableName"] = "tecnico";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "Mat";
$proto19["m_columns"][] = "Nome";
$proto19["m_columns"][] = "cnpj_escola";
$proto19["m_columns"][] = "parcela";
$proto19["m_columns"][] = "exercicio";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tecnico";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tecnico";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tecnico";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tecnico = createSqlQuery_tecnico();


	
		;

						

$tdatatecnico[".sqlquery"] = $queryData_tecnico;



$tdatatecnico[".hasEvents"] = false;

?>