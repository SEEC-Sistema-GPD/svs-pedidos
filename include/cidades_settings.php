<?php
$tdatacidades = array();
$tdatacidades[".searchableFields"] = array();
$tdatacidades[".ShortName"] = "cidades";
$tdatacidades[".OwnerID"] = "";
$tdatacidades[".OriginalTable"] = "cidades";


$tdatacidades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacidades[".originalPagesByType"] = $tdatacidades[".pagesByType"];
$tdatacidades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacidades[".originalPages"] = $tdatacidades[".pages"];
$tdatacidades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacidades[".originalDefaultPages"] = $tdatacidades[".defaultPages"];

//	field labels
$fieldLabelscidades = array();
$fieldToolTipscidades = array();
$pageTitlescidades = array();
$placeHolderscidades = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscidades["Portuguese(Brazil)"] = array();
	$fieldToolTipscidades["Portuguese(Brazil)"] = array();
	$placeHolderscidades["Portuguese(Brazil)"] = array();
	$pageTitlescidades["Portuguese(Brazil)"] = array();
	$fieldLabelscidades["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipscidades["Portuguese(Brazil)"]["id"] = "";
	$placeHolderscidades["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelscidades["Portuguese(Brazil)"]["Cidade"] = "Cidade";
	$fieldToolTipscidades["Portuguese(Brazil)"]["Cidade"] = "";
	$placeHolderscidades["Portuguese(Brazil)"]["Cidade"] = "";
	if (count($fieldToolTipscidades["Portuguese(Brazil)"]))
		$tdatacidades[".isUseToolTips"] = true;
}


	$tdatacidades[".NCSearch"] = true;



$tdatacidades[".shortTableName"] = "cidades";
$tdatacidades[".nSecOptions"] = 0;

$tdatacidades[".mainTableOwnerID"] = "";
$tdatacidades[".entityType"] = 0;
$tdatacidades[".connId"] = "pedidos_at_localhost";


$tdatacidades[".strOriginalTableName"] = "cidades";

	



$tdatacidades[".showAddInPopup"] = false;

$tdatacidades[".showEditInPopup"] = false;

$tdatacidades[".showViewInPopup"] = false;

$tdatacidades[".listAjax"] = false;
//	temporary
//$tdatacidades[".listAjax"] = false;

	$tdatacidades[".audit"] = false;

	$tdatacidades[".locking"] = false;


$pages = $tdatacidades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacidades[".edit"] = true;
	$tdatacidades[".afterEditAction"] = 1;
	$tdatacidades[".closePopupAfterEdit"] = 1;
	$tdatacidades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacidades[".add"] = true;
$tdatacidades[".afterAddAction"] = 1;
$tdatacidades[".closePopupAfterAdd"] = 1;
$tdatacidades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacidades[".list"] = true;
}



$tdatacidades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacidades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacidades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacidades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacidades[".printFriendly"] = true;
}



$tdatacidades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacidades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacidades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacidades[".isUseAjaxSuggest"] = true;



																		

$tdatacidades[".ajaxCodeSnippetAdded"] = false;

$tdatacidades[".buttonsAdded"] = false;

$tdatacidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacidades[".isUseTimeForSearch"] = false;


$tdatacidades[".badgeColor"] = "E8926F";


$tdatacidades[".allSearchFields"] = array();
$tdatacidades[".filterFields"] = array();
$tdatacidades[".requiredSearchFields"] = array();

$tdatacidades[".googleLikeFields"] = array();
$tdatacidades[".googleLikeFields"][] = "id";
$tdatacidades[".googleLikeFields"][] = "Cidade";



$tdatacidades[".tableType"] = "list";

$tdatacidades[".printerPageOrientation"] = 0;
$tdatacidades[".nPrinterPageScale"] = 100;

$tdatacidades[".nPrinterSplitRecords"] = 40;

$tdatacidades[".geocodingEnabled"] = false;










$tdatacidades[".pageSize"] = 20;

$tdatacidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacidades[".strOrderBy"] = $tstrOrderBy;

$tdatacidades[".orderindexes"] = array();


$tdatacidades[".sqlHead"] = "SELECT id,  	Cidade";
$tdatacidades[".sqlFrom"] = "FROM cidades";
$tdatacidades[".sqlWhereExpr"] = "";
$tdatacidades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacidades[".arrGroupsPerPage"] = $arrGPP;

$tdatacidades[".highlightSearchResults"] = true;

$tableKeyscidades = array();
$tableKeyscidades[] = "id";
$tdatacidades[".Keys"] = $tableKeyscidades;


$tdatacidades[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","id");
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


	$tdatacidades["id"] = $fdata;
		$tdatacidades[".searchableFields"][] = "id";
//	Cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cidade";
	$fdata["GoodName"] = "Cidade";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","Cidade");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cidade";

		$fdata["sourceSingle"] = "Cidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cidade";

	
	
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


	$tdatacidades["Cidade"] = $fdata;
		$tdatacidades[".searchableFields"][] = "Cidade";


$tables_data["cidades"]=&$tdatacidades;
$field_labels["cidades"] = &$fieldLabelscidades;
$fieldToolTips["cidades"] = &$fieldToolTipscidades;
$placeHolders["cidades"] = &$placeHolderscidades;
$page_titles["cidades"] = &$pageTitlescidades;


changeTextControlsToDate( "cidades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cidades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cidades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Cidade";
$proto0["m_strFrom"] = "FROM cidades";
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
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "cidades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cidade",
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto8["m_sql"] = "Cidade";
$proto8["m_srcTableName"] = "cidades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cidades";
$proto11["m_srcTableName"] = "cidades";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "Cidade";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cidades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cidades";
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
$proto0["m_srcTableName"]="cidades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cidades = createSqlQuery_cidades();


	
		;

		

$tdatacidades[".sqlquery"] = $queryData_cidades;



$tdatacidades[".hasEvents"] = false;

?>