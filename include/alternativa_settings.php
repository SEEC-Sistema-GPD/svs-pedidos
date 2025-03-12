<?php
$tdataalternativa = array();
$tdataalternativa[".searchableFields"] = array();
$tdataalternativa[".ShortName"] = "alternativa";
$tdataalternativa[".OwnerID"] = "";
$tdataalternativa[".OriginalTable"] = "alternativa";


$tdataalternativa[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalternativa[".originalPagesByType"] = $tdataalternativa[".pagesByType"];
$tdataalternativa[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalternativa[".originalPages"] = $tdataalternativa[".pages"];
$tdataalternativa[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalternativa[".originalDefaultPages"] = $tdataalternativa[".defaultPages"];

//	field labels
$fieldLabelsalternativa = array();
$fieldToolTipsalternativa = array();
$pageTitlesalternativa = array();
$placeHoldersalternativa = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsalternativa["Portuguese(Brazil)"] = array();
	$fieldToolTipsalternativa["Portuguese(Brazil)"] = array();
	$placeHoldersalternativa["Portuguese(Brazil)"] = array();
	$pageTitlesalternativa["Portuguese(Brazil)"] = array();
	$fieldLabelsalternativa["Portuguese(Brazil)"]["cod"] = "Cod";
	$fieldToolTipsalternativa["Portuguese(Brazil)"]["cod"] = "";
	$placeHoldersalternativa["Portuguese(Brazil)"]["cod"] = "";
	$fieldLabelsalternativa["Portuguese(Brazil)"]["Opcao"] = "Opcao";
	$fieldToolTipsalternativa["Portuguese(Brazil)"]["Opcao"] = "";
	$placeHoldersalternativa["Portuguese(Brazil)"]["Opcao"] = "";
	$fieldLabelsalternativa["Portuguese(Brazil)"]["valor"] = "Valor";
	$fieldToolTipsalternativa["Portuguese(Brazil)"]["valor"] = "";
	$placeHoldersalternativa["Portuguese(Brazil)"]["valor"] = "";
	if (count($fieldToolTipsalternativa["Portuguese(Brazil)"]))
		$tdataalternativa[".isUseToolTips"] = true;
}


	$tdataalternativa[".NCSearch"] = true;



$tdataalternativa[".shortTableName"] = "alternativa";
$tdataalternativa[".nSecOptions"] = 0;

$tdataalternativa[".mainTableOwnerID"] = "";
$tdataalternativa[".entityType"] = 0;
$tdataalternativa[".connId"] = "pedidos_at_localhost";


$tdataalternativa[".strOriginalTableName"] = "alternativa";

	



$tdataalternativa[".showAddInPopup"] = false;

$tdataalternativa[".showEditInPopup"] = false;

$tdataalternativa[".showViewInPopup"] = false;

$tdataalternativa[".listAjax"] = false;
//	temporary
//$tdataalternativa[".listAjax"] = false;

	$tdataalternativa[".audit"] = false;

	$tdataalternativa[".locking"] = false;


$pages = $tdataalternativa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalternativa[".edit"] = true;
	$tdataalternativa[".afterEditAction"] = 1;
	$tdataalternativa[".closePopupAfterEdit"] = 1;
	$tdataalternativa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalternativa[".add"] = true;
$tdataalternativa[".afterAddAction"] = 1;
$tdataalternativa[".closePopupAfterAdd"] = 1;
$tdataalternativa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalternativa[".list"] = true;
}



$tdataalternativa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalternativa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalternativa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalternativa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalternativa[".printFriendly"] = true;
}



$tdataalternativa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalternativa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalternativa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalternativa[".isUseAjaxSuggest"] = true;



																		

$tdataalternativa[".ajaxCodeSnippetAdded"] = false;

$tdataalternativa[".buttonsAdded"] = false;

$tdataalternativa[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalternativa[".isUseTimeForSearch"] = false;


$tdataalternativa[".badgeColor"] = "B22222";


$tdataalternativa[".allSearchFields"] = array();
$tdataalternativa[".filterFields"] = array();
$tdataalternativa[".requiredSearchFields"] = array();

$tdataalternativa[".googleLikeFields"] = array();
$tdataalternativa[".googleLikeFields"][] = "cod";
$tdataalternativa[".googleLikeFields"][] = "Opcao";
$tdataalternativa[".googleLikeFields"][] = "valor";



$tdataalternativa[".tableType"] = "list";

$tdataalternativa[".printerPageOrientation"] = 0;
$tdataalternativa[".nPrinterPageScale"] = 100;

$tdataalternativa[".nPrinterSplitRecords"] = 40;

$tdataalternativa[".geocodingEnabled"] = false;










$tdataalternativa[".pageSize"] = 20;

$tdataalternativa[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY valor";
$tdataalternativa[".strOrderBy"] = $tstrOrderBy;

$tdataalternativa[".orderindexes"] = array();
	$tdataalternativa[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "valor");



$tdataalternativa[".sqlHead"] = "SELECT cod,  Opcao,  valor";
$tdataalternativa[".sqlFrom"] = "FROM alternativa";
$tdataalternativa[".sqlWhereExpr"] = "";
$tdataalternativa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalternativa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalternativa[".arrGroupsPerPage"] = $arrGPP;

$tdataalternativa[".highlightSearchResults"] = true;

$tableKeysalternativa = array();
$tableKeysalternativa[] = "cod";
$tdataalternativa[".Keys"] = $tableKeysalternativa;


$tdataalternativa[".hideMobileList"] = array();




//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "alternativa";
	$fdata["Label"] = GetFieldLabel("alternativa","cod");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdataalternativa["cod"] = $fdata;
		$tdataalternativa[".searchableFields"][] = "cod";
//	Opcao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Opcao";
	$fdata["GoodName"] = "Opcao";
	$fdata["ownerTable"] = "alternativa";
	$fdata["Label"] = GetFieldLabel("alternativa","Opcao");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Opcao";

		$fdata["sourceSingle"] = "Opcao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Opcao";

	
	
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


	$tdataalternativa["Opcao"] = $fdata;
		$tdataalternativa[".searchableFields"][] = "Opcao";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "alternativa";
	$fdata["Label"] = GetFieldLabel("alternativa","valor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "valor";

		$fdata["sourceSingle"] = "valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor";

	
	
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


	$tdataalternativa["valor"] = $fdata;
		$tdataalternativa[".searchableFields"][] = "valor";


$tables_data["alternativa"]=&$tdataalternativa;
$field_labels["alternativa"] = &$fieldLabelsalternativa;
$fieldToolTips["alternativa"] = &$fieldToolTipsalternativa;
$placeHolders["alternativa"] = &$placeHoldersalternativa;
$page_titles["alternativa"] = &$pageTitlesalternativa;


changeTextControlsToDate( "alternativa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["alternativa"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["alternativa"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alternativa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cod,  Opcao,  valor";
$proto0["m_strFrom"] = "FROM alternativa";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY valor";
	
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
	"m_strTable" => "alternativa",
	"m_srcTableName" => "alternativa"
));

$proto6["m_sql"] = "cod";
$proto6["m_srcTableName"] = "alternativa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Opcao",
	"m_strTable" => "alternativa",
	"m_srcTableName" => "alternativa"
));

$proto8["m_sql"] = "Opcao";
$proto8["m_srcTableName"] = "alternativa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "alternativa",
	"m_srcTableName" => "alternativa"
));

$proto10["m_sql"] = "valor";
$proto10["m_srcTableName"] = "alternativa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "alternativa";
$proto13["m_srcTableName"] = "alternativa";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cod";
$proto13["m_columns"][] = "Opcao";
$proto13["m_columns"][] = "valor";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "alternativa";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "alternativa";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "alternativa",
	"m_srcTableName" => "alternativa"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="alternativa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alternativa = createSqlQuery_alternativa();


	
		;

			

$tdataalternativa[".sqlquery"] = $queryData_alternativa;



$tdataalternativa[".hasEvents"] = false;

?>