<?php
$tdataun_med = array();
$tdataun_med[".searchableFields"] = array();
$tdataun_med[".ShortName"] = "un_med";
$tdataun_med[".OwnerID"] = "";
$tdataun_med[".OriginalTable"] = "un_med";


$tdataun_med[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataun_med[".originalPagesByType"] = $tdataun_med[".pagesByType"];
$tdataun_med[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataun_med[".originalPages"] = $tdataun_med[".pages"];
$tdataun_med[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataun_med[".originalDefaultPages"] = $tdataun_med[".defaultPages"];

//	field labels
$fieldLabelsun_med = array();
$fieldToolTipsun_med = array();
$pageTitlesun_med = array();
$placeHoldersun_med = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsun_med["Portuguese(Brazil)"] = array();
	$fieldToolTipsun_med["Portuguese(Brazil)"] = array();
	$placeHoldersun_med["Portuguese(Brazil)"] = array();
	$pageTitlesun_med["Portuguese(Brazil)"] = array();
	$fieldLabelsun_med["Portuguese(Brazil)"]["cod"] = "Cod";
	$fieldToolTipsun_med["Portuguese(Brazil)"]["cod"] = "";
	$placeHoldersun_med["Portuguese(Brazil)"]["cod"] = "";
	$fieldLabelsun_med["Portuguese(Brazil)"]["Unidade"] = "Unidade";
	$fieldToolTipsun_med["Portuguese(Brazil)"]["Unidade"] = "";
	$placeHoldersun_med["Portuguese(Brazil)"]["Unidade"] = "";
	if (count($fieldToolTipsun_med["Portuguese(Brazil)"]))
		$tdataun_med[".isUseToolTips"] = true;
}


	$tdataun_med[".NCSearch"] = true;



$tdataun_med[".shortTableName"] = "un_med";
$tdataun_med[".nSecOptions"] = 0;

$tdataun_med[".mainTableOwnerID"] = "";
$tdataun_med[".entityType"] = 0;
$tdataun_med[".connId"] = "pedidos_at_localhost";


$tdataun_med[".strOriginalTableName"] = "un_med";

	



$tdataun_med[".showAddInPopup"] = false;

$tdataun_med[".showEditInPopup"] = false;

$tdataun_med[".showViewInPopup"] = false;

$tdataun_med[".listAjax"] = false;
//	temporary
//$tdataun_med[".listAjax"] = false;

	$tdataun_med[".audit"] = false;

	$tdataun_med[".locking"] = false;


$pages = $tdataun_med[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataun_med[".edit"] = true;
	$tdataun_med[".afterEditAction"] = 1;
	$tdataun_med[".closePopupAfterEdit"] = 1;
	$tdataun_med[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataun_med[".add"] = true;
$tdataun_med[".afterAddAction"] = 1;
$tdataun_med[".closePopupAfterAdd"] = 1;
$tdataun_med[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataun_med[".list"] = true;
}



$tdataun_med[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataun_med[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataun_med[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataun_med[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataun_med[".printFriendly"] = true;
}



$tdataun_med[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataun_med[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataun_med[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataun_med[".isUseAjaxSuggest"] = true;



																		

$tdataun_med[".ajaxCodeSnippetAdded"] = false;

$tdataun_med[".buttonsAdded"] = false;

$tdataun_med[".addPageEvents"] = false;

// use timepicker for search panel
$tdataun_med[".isUseTimeForSearch"] = false;


$tdataun_med[".badgeColor"] = "00C2C5";


$tdataun_med[".allSearchFields"] = array();
$tdataun_med[".filterFields"] = array();
$tdataun_med[".requiredSearchFields"] = array();

$tdataun_med[".googleLikeFields"] = array();
$tdataun_med[".googleLikeFields"][] = "cod";
$tdataun_med[".googleLikeFields"][] = "Unidade";



$tdataun_med[".tableType"] = "list";

$tdataun_med[".printerPageOrientation"] = 0;
$tdataun_med[".nPrinterPageScale"] = 100;

$tdataun_med[".nPrinterSplitRecords"] = 40;

$tdataun_med[".geocodingEnabled"] = false;










$tdataun_med[".pageSize"] = 20;

$tdataun_med[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataun_med[".strOrderBy"] = $tstrOrderBy;

$tdataun_med[".orderindexes"] = array();


$tdataun_med[".sqlHead"] = "SELECT cod,  	Unidade";
$tdataun_med[".sqlFrom"] = "FROM un_med";
$tdataun_med[".sqlWhereExpr"] = "";
$tdataun_med[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataun_med[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataun_med[".arrGroupsPerPage"] = $arrGPP;

$tdataun_med[".highlightSearchResults"] = true;

$tableKeysun_med = array();
$tableKeysun_med[] = "cod";
$tdataun_med[".Keys"] = $tableKeysun_med;


$tdataun_med[".hideMobileList"] = array();




//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "un_med";
	$fdata["Label"] = GetFieldLabel("un_med","cod");
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


	$tdataun_med["cod"] = $fdata;
		$tdataun_med[".searchableFields"][] = "cod";
//	Unidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Unidade";
	$fdata["GoodName"] = "Unidade";
	$fdata["ownerTable"] = "un_med";
	$fdata["Label"] = GetFieldLabel("un_med","Unidade");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Unidade";

		$fdata["sourceSingle"] = "Unidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Unidade";

	
	
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


	$tdataun_med["Unidade"] = $fdata;
		$tdataun_med[".searchableFields"][] = "Unidade";


$tables_data["un_med"]=&$tdataun_med;
$field_labels["un_med"] = &$fieldLabelsun_med;
$fieldToolTips["un_med"] = &$fieldToolTipsun_med;
$placeHolders["un_med"] = &$placeHoldersun_med;
$page_titles["un_med"] = &$pageTitlesun_med;


changeTextControlsToDate( "un_med" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["un_med"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["un_med"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_un_med()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cod,  	Unidade";
$proto0["m_strFrom"] = "FROM un_med";
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
	"m_strTable" => "un_med",
	"m_srcTableName" => "un_med"
));

$proto6["m_sql"] = "cod";
$proto6["m_srcTableName"] = "un_med";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Unidade",
	"m_strTable" => "un_med",
	"m_srcTableName" => "un_med"
));

$proto8["m_sql"] = "Unidade";
$proto8["m_srcTableName"] = "un_med";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "un_med";
$proto11["m_srcTableName"] = "un_med";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cod";
$proto11["m_columns"][] = "Unidade";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "un_med";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "un_med";
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
$proto0["m_srcTableName"]="un_med";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_un_med = createSqlQuery_un_med();


	
		;

		

$tdataun_med[".sqlquery"] = $queryData_un_med;



$tdataun_med[".hasEvents"] = false;

?>