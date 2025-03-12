<?php
$tdatafuncao1 = array();
$tdatafuncao1[".searchableFields"] = array();
$tdatafuncao1[".ShortName"] = "funcao1";
$tdatafuncao1[".OwnerID"] = "";
$tdatafuncao1[".OriginalTable"] = "funcao";


$tdatafuncao1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafuncao1[".originalPagesByType"] = $tdatafuncao1[".pagesByType"];
$tdatafuncao1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafuncao1[".originalPages"] = $tdatafuncao1[".pages"];
$tdatafuncao1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafuncao1[".originalDefaultPages"] = $tdatafuncao1[".defaultPages"];

//	field labels
$fieldLabelsfuncao1 = array();
$fieldToolTipsfuncao1 = array();
$pageTitlesfuncao1 = array();
$placeHoldersfuncao1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsfuncao1["Portuguese(Brazil)"] = array();
	$fieldToolTipsfuncao1["Portuguese(Brazil)"] = array();
	$placeHoldersfuncao1["Portuguese(Brazil)"] = array();
	$pageTitlesfuncao1["Portuguese(Brazil)"] = array();
	$fieldLabelsfuncao1["Portuguese(Brazil)"]["cod_func"] = "Cod Func";
	$fieldToolTipsfuncao1["Portuguese(Brazil)"]["cod_func"] = "";
	$placeHoldersfuncao1["Portuguese(Brazil)"]["cod_func"] = "";
	$fieldLabelsfuncao1["Portuguese(Brazil)"]["nom_func"] = "Nom Func";
	$fieldToolTipsfuncao1["Portuguese(Brazil)"]["nom_func"] = "";
	$placeHoldersfuncao1["Portuguese(Brazil)"]["nom_func"] = "";
	if (count($fieldToolTipsfuncao1["Portuguese(Brazil)"]))
		$tdatafuncao1[".isUseToolTips"] = true;
}


	$tdatafuncao1[".NCSearch"] = true;



$tdatafuncao1[".shortTableName"] = "funcao1";
$tdatafuncao1[".nSecOptions"] = 0;

$tdatafuncao1[".mainTableOwnerID"] = "";
$tdatafuncao1[".entityType"] = 0;
$tdatafuncao1[".connId"] = "pedidos_at_localhost";


$tdatafuncao1[".strOriginalTableName"] = "funcao";

	



$tdatafuncao1[".showAddInPopup"] = false;

$tdatafuncao1[".showEditInPopup"] = false;

$tdatafuncao1[".showViewInPopup"] = false;

$tdatafuncao1[".listAjax"] = false;
//	temporary
//$tdatafuncao1[".listAjax"] = false;

	$tdatafuncao1[".audit"] = false;

	$tdatafuncao1[".locking"] = false;


$pages = $tdatafuncao1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafuncao1[".edit"] = true;
	$tdatafuncao1[".afterEditAction"] = 1;
	$tdatafuncao1[".closePopupAfterEdit"] = 1;
	$tdatafuncao1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafuncao1[".add"] = true;
$tdatafuncao1[".afterAddAction"] = 1;
$tdatafuncao1[".closePopupAfterAdd"] = 1;
$tdatafuncao1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafuncao1[".list"] = true;
}



$tdatafuncao1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafuncao1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafuncao1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafuncao1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafuncao1[".printFriendly"] = true;
}



$tdatafuncao1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafuncao1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafuncao1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafuncao1[".isUseAjaxSuggest"] = true;



																		

$tdatafuncao1[".ajaxCodeSnippetAdded"] = false;

$tdatafuncao1[".buttonsAdded"] = false;

$tdatafuncao1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuncao1[".isUseTimeForSearch"] = false;


$tdatafuncao1[".badgeColor"] = "1E90FF";


$tdatafuncao1[".allSearchFields"] = array();
$tdatafuncao1[".filterFields"] = array();
$tdatafuncao1[".requiredSearchFields"] = array();

$tdatafuncao1[".googleLikeFields"] = array();
$tdatafuncao1[".googleLikeFields"][] = "cod_func";
$tdatafuncao1[".googleLikeFields"][] = "nom_func";



$tdatafuncao1[".tableType"] = "list";

$tdatafuncao1[".printerPageOrientation"] = 0;
$tdatafuncao1[".nPrinterPageScale"] = 100;

$tdatafuncao1[".nPrinterSplitRecords"] = 40;

$tdatafuncao1[".geocodingEnabled"] = false;










$tdatafuncao1[".pageSize"] = 20;

$tdatafuncao1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafuncao1[".strOrderBy"] = $tstrOrderBy;

$tdatafuncao1[".orderindexes"] = array();


$tdatafuncao1[".sqlHead"] = "SELECT cod_func,  	nom_func";
$tdatafuncao1[".sqlFrom"] = "FROM funcao";
$tdatafuncao1[".sqlWhereExpr"] = "";
$tdatafuncao1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafuncao1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuncao1[".arrGroupsPerPage"] = $arrGPP;

$tdatafuncao1[".highlightSearchResults"] = true;

$tableKeysfuncao1 = array();
$tableKeysfuncao1[] = "cod_func";
$tdatafuncao1[".Keys"] = $tableKeysfuncao1;


$tdatafuncao1[".hideMobileList"] = array();




//	cod_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod_func";
	$fdata["GoodName"] = "cod_func";
	$fdata["ownerTable"] = "funcao";
	$fdata["Label"] = GetFieldLabel("funcao","cod_func");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cod_func";

		$fdata["sourceSingle"] = "cod_func";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_func";

	
	
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


	$tdatafuncao1["cod_func"] = $fdata;
		$tdatafuncao1[".searchableFields"][] = "cod_func";
//	nom_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_func";
	$fdata["GoodName"] = "nom_func";
	$fdata["ownerTable"] = "funcao";
	$fdata["Label"] = GetFieldLabel("funcao","nom_func");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_func";

		$fdata["sourceSingle"] = "nom_func";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_func";

	
	
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


	$tdatafuncao1["nom_func"] = $fdata;
		$tdatafuncao1[".searchableFields"][] = "nom_func";


$tables_data["funcao"]=&$tdatafuncao1;
$field_labels["funcao"] = &$fieldLabelsfuncao1;
$fieldToolTips["funcao"] = &$fieldToolTipsfuncao1;
$placeHolders["funcao"] = &$placeHoldersfuncao1;
$page_titles["funcao"] = &$pageTitlesfuncao1;


changeTextControlsToDate( "funcao" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["funcao"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["funcao"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_funcao1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cod_func,  	nom_func";
$proto0["m_strFrom"] = "FROM funcao";
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
	"m_strName" => "cod_func",
	"m_strTable" => "funcao",
	"m_srcTableName" => "funcao"
));

$proto6["m_sql"] = "cod_func";
$proto6["m_srcTableName"] = "funcao";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_func",
	"m_strTable" => "funcao",
	"m_srcTableName" => "funcao"
));

$proto8["m_sql"] = "nom_func";
$proto8["m_srcTableName"] = "funcao";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "funcao";
$proto11["m_srcTableName"] = "funcao";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cod_func";
$proto11["m_columns"][] = "nom_func";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "funcao";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "funcao";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="funcao";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_funcao1 = createSqlQuery_funcao1();


	
		;

		

$tdatafuncao1[".sqlquery"] = $queryData_funcao1;



$tdatafuncao1[".hasEvents"] = false;

?>