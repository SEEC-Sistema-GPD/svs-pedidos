<?php
$tdatadraes = array();
$tdatadraes[".searchableFields"] = array();
$tdatadraes[".ShortName"] = "draes";
$tdatadraes[".OwnerID"] = "";
$tdatadraes[".OriginalTable"] = "draes";


$tdatadraes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdatadraes[".originalPagesByType"] = $tdatadraes[".pagesByType"];
$tdatadraes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdatadraes[".originalPages"] = $tdatadraes[".pages"];
$tdatadraes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\"}" );
$tdatadraes[".originalDefaultPages"] = $tdatadraes[".defaultPages"];

//	field labels
$fieldLabelsdraes = array();
$fieldToolTipsdraes = array();
$pageTitlesdraes = array();
$placeHoldersdraes = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsdraes["Portuguese(Brazil)"] = array();
	$fieldToolTipsdraes["Portuguese(Brazil)"] = array();
	$placeHoldersdraes["Portuguese(Brazil)"] = array();
	$pageTitlesdraes["Portuguese(Brazil)"] = array();
	$fieldLabelsdraes["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsdraes["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersdraes["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsdraes["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsdraes["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersdraes["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsdraes["Portuguese(Brazil)"]["DRAE"] = "DRAE";
	$fieldToolTipsdraes["Portuguese(Brazil)"]["DRAE"] = "";
	$placeHoldersdraes["Portuguese(Brazil)"]["DRAE"] = "";
	if (count($fieldToolTipsdraes["Portuguese(Brazil)"]))
		$tdatadraes[".isUseToolTips"] = true;
}


	$tdatadraes[".NCSearch"] = true;



$tdatadraes[".shortTableName"] = "draes";
$tdatadraes[".nSecOptions"] = 0;

$tdatadraes[".mainTableOwnerID"] = "";
$tdatadraes[".entityType"] = 0;
$tdatadraes[".connId"] = "pedidos_at_localhost";


$tdatadraes[".strOriginalTableName"] = "draes";

	



$tdatadraes[".showAddInPopup"] = false;

$tdatadraes[".showEditInPopup"] = false;

$tdatadraes[".showViewInPopup"] = false;

$tdatadraes[".listAjax"] = false;
//	temporary
//$tdatadraes[".listAjax"] = false;

	$tdatadraes[".audit"] = false;

	$tdatadraes[".locking"] = false;


$pages = $tdatadraes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadraes[".edit"] = true;
	$tdatadraes[".afterEditAction"] = 1;
	$tdatadraes[".closePopupAfterEdit"] = 1;
	$tdatadraes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadraes[".add"] = true;
$tdatadraes[".afterAddAction"] = 1;
$tdatadraes[".closePopupAfterAdd"] = 1;
$tdatadraes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadraes[".list"] = true;
}



$tdatadraes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadraes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadraes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadraes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadraes[".printFriendly"] = true;
}



$tdatadraes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadraes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadraes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadraes[".isUseAjaxSuggest"] = true;



																		

$tdatadraes[".ajaxCodeSnippetAdded"] = false;

$tdatadraes[".buttonsAdded"] = false;

$tdatadraes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadraes[".isUseTimeForSearch"] = false;


$tdatadraes[".badgeColor"] = "E67349";


$tdatadraes[".allSearchFields"] = array();
$tdatadraes[".filterFields"] = array();
$tdatadraes[".requiredSearchFields"] = array();

$tdatadraes[".googleLikeFields"] = array();
$tdatadraes[".googleLikeFields"][] = "id";
$tdatadraes[".googleLikeFields"][] = "Nome";
$tdatadraes[".googleLikeFields"][] = "DRAE";



$tdatadraes[".tableType"] = "list";

$tdatadraes[".printerPageOrientation"] = 0;
$tdatadraes[".nPrinterPageScale"] = 100;

$tdatadraes[".nPrinterSplitRecords"] = 40;

$tdatadraes[".geocodingEnabled"] = false;










$tdatadraes[".pageSize"] = 20;

$tdatadraes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadraes[".strOrderBy"] = $tstrOrderBy;

$tdatadraes[".orderindexes"] = array();


$tdatadraes[".sqlHead"] = "SELECT id,  	Nome,  	DRAE";
$tdatadraes[".sqlFrom"] = "FROM draes";
$tdatadraes[".sqlWhereExpr"] = "";
$tdatadraes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadraes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadraes[".arrGroupsPerPage"] = $arrGPP;

$tdatadraes[".highlightSearchResults"] = true;

$tableKeysdraes = array();
$tableKeysdraes[] = "id";
$tableKeysdraes[] = "Nome";
$tableKeysdraes[] = "DRAE";
$tdatadraes[".Keys"] = $tableKeysdraes;


$tdatadraes[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "draes";
	$fdata["Label"] = GetFieldLabel("draes","id");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatadraes["id"] = $fdata;
		$tdatadraes[".searchableFields"][] = "id";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "draes";
	$fdata["Label"] = GetFieldLabel("draes","Nome");
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


	$tdatadraes["Nome"] = $fdata;
		$tdatadraes[".searchableFields"][] = "Nome";
//	DRAE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DRAE";
	$fdata["GoodName"] = "DRAE";
	$fdata["ownerTable"] = "draes";
	$fdata["Label"] = GetFieldLabel("draes","DRAE");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DRAE";

		$fdata["sourceSingle"] = "DRAE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DRAE";

	
	
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


	$tdatadraes["DRAE"] = $fdata;
		$tdatadraes[".searchableFields"][] = "DRAE";


$tables_data["draes"]=&$tdatadraes;
$field_labels["draes"] = &$fieldLabelsdraes;
$fieldToolTips["draes"] = &$fieldToolTipsdraes;
$placeHolders["draes"] = &$placeHoldersdraes;
$page_titles["draes"] = &$pageTitlesdraes;


changeTextControlsToDate( "draes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["draes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["draes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_draes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Nome,  	DRAE";
$proto0["m_strFrom"] = "FROM draes";
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
	"m_strTable" => "draes",
	"m_srcTableName" => "draes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "draes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "draes",
	"m_srcTableName" => "draes"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "draes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DRAE",
	"m_strTable" => "draes",
	"m_srcTableName" => "draes"
));

$proto10["m_sql"] = "DRAE";
$proto10["m_srcTableName"] = "draes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "draes";
$proto13["m_srcTableName"] = "draes";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "Nome";
$proto13["m_columns"][] = "DRAE";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "draes";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "draes";
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
$proto0["m_srcTableName"]="draes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_draes = createSqlQuery_draes();


	
		;

			

$tdatadraes[".sqlquery"] = $queryData_draes;



$tdatadraes[".hasEvents"] = false;

?>