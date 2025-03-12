<?php
$tdatadirecs = array();
$tdatadirecs[".searchableFields"] = array();
$tdatadirecs[".ShortName"] = "direcs";
$tdatadirecs[".OwnerID"] = "";
$tdatadirecs[".OriginalTable"] = "direcs";


$tdatadirecs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadirecs[".originalPagesByType"] = $tdatadirecs[".pagesByType"];
$tdatadirecs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadirecs[".originalPages"] = $tdatadirecs[".pages"];
$tdatadirecs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadirecs[".originalDefaultPages"] = $tdatadirecs[".defaultPages"];

//	field labels
$fieldLabelsdirecs = array();
$fieldToolTipsdirecs = array();
$pageTitlesdirecs = array();
$placeHoldersdirecs = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsdirecs["Portuguese(Brazil)"] = array();
	$fieldToolTipsdirecs["Portuguese(Brazil)"] = array();
	$placeHoldersdirecs["Portuguese(Brazil)"] = array();
	$pageTitlesdirecs["Portuguese(Brazil)"] = array();
	$fieldLabelsdirecs["Portuguese(Brazil)"]["cod_direc"] = "Cod Direc";
	$fieldToolTipsdirecs["Portuguese(Brazil)"]["cod_direc"] = "";
	$placeHoldersdirecs["Portuguese(Brazil)"]["cod_direc"] = "";
	$fieldLabelsdirecs["Portuguese(Brazil)"]["nom_direc"] = " Direc";
	$fieldToolTipsdirecs["Portuguese(Brazil)"]["nom_direc"] = "";
	$placeHoldersdirecs["Portuguese(Brazil)"]["nom_direc"] = "";
	if (count($fieldToolTipsdirecs["Portuguese(Brazil)"]))
		$tdatadirecs[".isUseToolTips"] = true;
}


	$tdatadirecs[".NCSearch"] = true;



$tdatadirecs[".shortTableName"] = "direcs";
$tdatadirecs[".nSecOptions"] = 0;

$tdatadirecs[".mainTableOwnerID"] = "";
$tdatadirecs[".entityType"] = 0;
$tdatadirecs[".connId"] = "pedidos_at_localhost";


$tdatadirecs[".strOriginalTableName"] = "direcs";

	



$tdatadirecs[".showAddInPopup"] = false;

$tdatadirecs[".showEditInPopup"] = false;

$tdatadirecs[".showViewInPopup"] = false;

$tdatadirecs[".listAjax"] = false;
//	temporary
//$tdatadirecs[".listAjax"] = false;

	$tdatadirecs[".audit"] = false;

	$tdatadirecs[".locking"] = false;


$pages = $tdatadirecs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadirecs[".edit"] = true;
	$tdatadirecs[".afterEditAction"] = 1;
	$tdatadirecs[".closePopupAfterEdit"] = 1;
	$tdatadirecs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadirecs[".add"] = true;
$tdatadirecs[".afterAddAction"] = 1;
$tdatadirecs[".closePopupAfterAdd"] = 1;
$tdatadirecs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadirecs[".list"] = true;
}



$tdatadirecs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadirecs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadirecs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadirecs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadirecs[".printFriendly"] = true;
}



$tdatadirecs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadirecs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadirecs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadirecs[".isUseAjaxSuggest"] = true;



																		

$tdatadirecs[".ajaxCodeSnippetAdded"] = false;

$tdatadirecs[".buttonsAdded"] = false;

$tdatadirecs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadirecs[".isUseTimeForSearch"] = false;


$tdatadirecs[".badgeColor"] = "DB7093";


$tdatadirecs[".allSearchFields"] = array();
$tdatadirecs[".filterFields"] = array();
$tdatadirecs[".requiredSearchFields"] = array();

$tdatadirecs[".googleLikeFields"] = array();
$tdatadirecs[".googleLikeFields"][] = "cod_direc";
$tdatadirecs[".googleLikeFields"][] = "nom_direc";



$tdatadirecs[".tableType"] = "list";

$tdatadirecs[".printerPageOrientation"] = 0;
$tdatadirecs[".nPrinterPageScale"] = 100;

$tdatadirecs[".nPrinterSplitRecords"] = 40;

$tdatadirecs[".geocodingEnabled"] = false;










$tdatadirecs[".pageSize"] = 20;

$tdatadirecs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadirecs[".strOrderBy"] = $tstrOrderBy;

$tdatadirecs[".orderindexes"] = array();


$tdatadirecs[".sqlHead"] = "SELECT cod_direc,  	nom_direc";
$tdatadirecs[".sqlFrom"] = "FROM direcs";
$tdatadirecs[".sqlWhereExpr"] = "";
$tdatadirecs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadirecs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadirecs[".arrGroupsPerPage"] = $arrGPP;

$tdatadirecs[".highlightSearchResults"] = true;

$tableKeysdirecs = array();
$tableKeysdirecs[] = "cod_direc";
$tdatadirecs[".Keys"] = $tableKeysdirecs;


$tdatadirecs[".hideMobileList"] = array();




//	cod_direc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod_direc";
	$fdata["GoodName"] = "cod_direc";
	$fdata["ownerTable"] = "direcs";
	$fdata["Label"] = GetFieldLabel("direcs","cod_direc");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cod_direc";

		$fdata["sourceSingle"] = "cod_direc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_direc";

	
	
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


	$tdatadirecs["cod_direc"] = $fdata;
		$tdatadirecs[".searchableFields"][] = "cod_direc";
//	nom_direc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_direc";
	$fdata["GoodName"] = "nom_direc";
	$fdata["ownerTable"] = "direcs";
	$fdata["Label"] = GetFieldLabel("direcs","nom_direc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_direc";

		$fdata["sourceSingle"] = "nom_direc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_direc";

	
	
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


	$tdatadirecs["nom_direc"] = $fdata;
		$tdatadirecs[".searchableFields"][] = "nom_direc";


$tables_data["direcs"]=&$tdatadirecs;
$field_labels["direcs"] = &$fieldLabelsdirecs;
$fieldToolTips["direcs"] = &$fieldToolTipsdirecs;
$placeHolders["direcs"] = &$placeHoldersdirecs;
$page_titles["direcs"] = &$pageTitlesdirecs;


changeTextControlsToDate( "direcs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["direcs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["direcs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_direcs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cod_direc,  	nom_direc";
$proto0["m_strFrom"] = "FROM direcs";
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
	"m_strName" => "cod_direc",
	"m_strTable" => "direcs",
	"m_srcTableName" => "direcs"
));

$proto6["m_sql"] = "cod_direc";
$proto6["m_srcTableName"] = "direcs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_direc",
	"m_strTable" => "direcs",
	"m_srcTableName" => "direcs"
));

$proto8["m_sql"] = "nom_direc";
$proto8["m_srcTableName"] = "direcs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "direcs";
$proto11["m_srcTableName"] = "direcs";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cod_direc";
$proto11["m_columns"][] = "nom_direc";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "direcs";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "direcs";
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
$proto0["m_srcTableName"]="direcs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_direcs = createSqlQuery_direcs();


	
		;

		

$tdatadirecs[".sqlquery"] = $queryData_direcs;



$tdatadirecs[".hasEvents"] = false;

?>