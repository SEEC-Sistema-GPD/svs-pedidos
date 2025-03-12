<?php
$tdatabairros = array();
$tdatabairros[".searchableFields"] = array();
$tdatabairros[".ShortName"] = "bairros";
$tdatabairros[".OwnerID"] = "";
$tdatabairros[".OriginalTable"] = "bairros";


$tdatabairros[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabairros[".originalPagesByType"] = $tdatabairros[".pagesByType"];
$tdatabairros[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabairros[".originalPages"] = $tdatabairros[".pages"];
$tdatabairros[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabairros[".originalDefaultPages"] = $tdatabairros[".defaultPages"];

//	field labels
$fieldLabelsbairros = array();
$fieldToolTipsbairros = array();
$pageTitlesbairros = array();
$placeHoldersbairros = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbairros["Portuguese(Brazil)"] = array();
	$fieldToolTipsbairros["Portuguese(Brazil)"] = array();
	$placeHoldersbairros["Portuguese(Brazil)"] = array();
	$pageTitlesbairros["Portuguese(Brazil)"] = array();
	$fieldLabelsbairros["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsbairros["Portuguese(Brazil)"]["ID"] = "";
	$placeHoldersbairros["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsbairros["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsbairros["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersbairros["Portuguese(Brazil)"]["Nome"] = "";
	if (count($fieldToolTipsbairros["Portuguese(Brazil)"]))
		$tdatabairros[".isUseToolTips"] = true;
}


	$tdatabairros[".NCSearch"] = true;



$tdatabairros[".shortTableName"] = "bairros";
$tdatabairros[".nSecOptions"] = 0;

$tdatabairros[".mainTableOwnerID"] = "";
$tdatabairros[".entityType"] = 0;
$tdatabairros[".connId"] = "pedidos_at_localhost";


$tdatabairros[".strOriginalTableName"] = "bairros";

	



$tdatabairros[".showAddInPopup"] = false;

$tdatabairros[".showEditInPopup"] = false;

$tdatabairros[".showViewInPopup"] = false;

$tdatabairros[".listAjax"] = false;
//	temporary
//$tdatabairros[".listAjax"] = false;

	$tdatabairros[".audit"] = false;

	$tdatabairros[".locking"] = false;


$pages = $tdatabairros[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabairros[".edit"] = true;
	$tdatabairros[".afterEditAction"] = 1;
	$tdatabairros[".closePopupAfterEdit"] = 1;
	$tdatabairros[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabairros[".add"] = true;
$tdatabairros[".afterAddAction"] = 1;
$tdatabairros[".closePopupAfterAdd"] = 1;
$tdatabairros[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabairros[".list"] = true;
}



$tdatabairros[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabairros[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabairros[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabairros[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabairros[".printFriendly"] = true;
}



$tdatabairros[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabairros[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabairros[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabairros[".isUseAjaxSuggest"] = true;



																		

$tdatabairros[".ajaxCodeSnippetAdded"] = false;

$tdatabairros[".buttonsAdded"] = false;

$tdatabairros[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabairros[".isUseTimeForSearch"] = false;


$tdatabairros[".badgeColor"] = "6B8E23";


$tdatabairros[".allSearchFields"] = array();
$tdatabairros[".filterFields"] = array();
$tdatabairros[".requiredSearchFields"] = array();

$tdatabairros[".googleLikeFields"] = array();
$tdatabairros[".googleLikeFields"][] = "ID";
$tdatabairros[".googleLikeFields"][] = "Nome";



$tdatabairros[".tableType"] = "list";

$tdatabairros[".printerPageOrientation"] = 0;
$tdatabairros[".nPrinterPageScale"] = 100;

$tdatabairros[".nPrinterSplitRecords"] = 40;

$tdatabairros[".geocodingEnabled"] = false;










$tdatabairros[".pageSize"] = 20;

$tdatabairros[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabairros[".strOrderBy"] = $tstrOrderBy;

$tdatabairros[".orderindexes"] = array();


$tdatabairros[".sqlHead"] = "SELECT ID,  	Nome";
$tdatabairros[".sqlFrom"] = "FROM bairros";
$tdatabairros[".sqlWhereExpr"] = "";
$tdatabairros[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabairros[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabairros[".arrGroupsPerPage"] = $arrGPP;

$tdatabairros[".highlightSearchResults"] = true;

$tableKeysbairros = array();
$tableKeysbairros[] = "ID";
$tdatabairros[".Keys"] = $tableKeysbairros;


$tdatabairros[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "bairros";
	$fdata["Label"] = GetFieldLabel("bairros","ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatabairros["ID"] = $fdata;
		$tdatabairros[".searchableFields"][] = "ID";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "bairros";
	$fdata["Label"] = GetFieldLabel("bairros","Nome");
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


	$tdatabairros["Nome"] = $fdata;
		$tdatabairros[".searchableFields"][] = "Nome";


$tables_data["bairros"]=&$tdatabairros;
$field_labels["bairros"] = &$fieldLabelsbairros;
$fieldToolTips["bairros"] = &$fieldToolTipsbairros;
$placeHolders["bairros"] = &$placeHoldersbairros;
$page_titles["bairros"] = &$pageTitlesbairros;


changeTextControlsToDate( "bairros" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["bairros"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["bairros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bairros()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Nome";
$proto0["m_strFrom"] = "FROM bairros";
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
	"m_strName" => "ID",
	"m_strTable" => "bairros",
	"m_srcTableName" => "bairros"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "bairros";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "bairros",
	"m_srcTableName" => "bairros"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "bairros";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bairros";
$proto11["m_srcTableName"] = "bairros";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Nome";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bairros";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bairros";
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
$proto0["m_srcTableName"]="bairros";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bairros = createSqlQuery_bairros();


	
		;

		

$tdatabairros[".sqlquery"] = $queryData_bairros;



$tdatabairros[".hasEvents"] = false;

?>