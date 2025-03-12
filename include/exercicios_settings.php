<?php
$tdataexercicios = array();
$tdataexercicios[".searchableFields"] = array();
$tdataexercicios[".ShortName"] = "exercicios";
$tdataexercicios[".OwnerID"] = "";
$tdataexercicios[".OriginalTable"] = "exercicios";


$tdataexercicios[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdataexercicios[".originalPagesByType"] = $tdataexercicios[".pagesByType"];
$tdataexercicios[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdataexercicios[".originalPages"] = $tdataexercicios[".pages"];
$tdataexercicios[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\"}" );
$tdataexercicios[".originalDefaultPages"] = $tdataexercicios[".defaultPages"];

//	field labels
$fieldLabelsexercicios = array();
$fieldToolTipsexercicios = array();
$pageTitlesexercicios = array();
$placeHoldersexercicios = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsexercicios["Portuguese(Brazil)"] = array();
	$fieldToolTipsexercicios["Portuguese(Brazil)"] = array();
	$placeHoldersexercicios["Portuguese(Brazil)"] = array();
	$pageTitlesexercicios["Portuguese(Brazil)"] = array();
	$fieldLabelsexercicios["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsexercicios["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersexercicios["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsexercicios["Portuguese(Brazil)"]["Ano"] = "Ano";
	$fieldToolTipsexercicios["Portuguese(Brazil)"]["Ano"] = "";
	$placeHoldersexercicios["Portuguese(Brazil)"]["Ano"] = "";
	if (count($fieldToolTipsexercicios["Portuguese(Brazil)"]))
		$tdataexercicios[".isUseToolTips"] = true;
}


	$tdataexercicios[".NCSearch"] = true;



$tdataexercicios[".shortTableName"] = "exercicios";
$tdataexercicios[".nSecOptions"] = 0;

$tdataexercicios[".mainTableOwnerID"] = "";
$tdataexercicios[".entityType"] = 0;
$tdataexercicios[".connId"] = "pedidos_at_localhost";


$tdataexercicios[".strOriginalTableName"] = "exercicios";

	



$tdataexercicios[".showAddInPopup"] = false;

$tdataexercicios[".showEditInPopup"] = false;

$tdataexercicios[".showViewInPopup"] = false;

$tdataexercicios[".listAjax"] = false;
//	temporary
//$tdataexercicios[".listAjax"] = false;

	$tdataexercicios[".audit"] = false;

	$tdataexercicios[".locking"] = false;


$pages = $tdataexercicios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataexercicios[".edit"] = true;
	$tdataexercicios[".afterEditAction"] = 1;
	$tdataexercicios[".closePopupAfterEdit"] = 1;
	$tdataexercicios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataexercicios[".add"] = true;
$tdataexercicios[".afterAddAction"] = 1;
$tdataexercicios[".closePopupAfterAdd"] = 1;
$tdataexercicios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataexercicios[".list"] = true;
}



$tdataexercicios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataexercicios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataexercicios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataexercicios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataexercicios[".printFriendly"] = true;
}



$tdataexercicios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataexercicios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataexercicios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataexercicios[".isUseAjaxSuggest"] = true;



																		

$tdataexercicios[".ajaxCodeSnippetAdded"] = false;

$tdataexercicios[".buttonsAdded"] = false;

$tdataexercicios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexercicios[".isUseTimeForSearch"] = false;


$tdataexercicios[".badgeColor"] = "00C2C5";


$tdataexercicios[".allSearchFields"] = array();
$tdataexercicios[".filterFields"] = array();
$tdataexercicios[".requiredSearchFields"] = array();

$tdataexercicios[".googleLikeFields"] = array();
$tdataexercicios[".googleLikeFields"][] = "id";
$tdataexercicios[".googleLikeFields"][] = "Ano";



$tdataexercicios[".tableType"] = "list";

$tdataexercicios[".printerPageOrientation"] = 0;
$tdataexercicios[".nPrinterPageScale"] = 100;

$tdataexercicios[".nPrinterSplitRecords"] = 40;

$tdataexercicios[".geocodingEnabled"] = false;










$tdataexercicios[".pageSize"] = 20;

$tdataexercicios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataexercicios[".strOrderBy"] = $tstrOrderBy;

$tdataexercicios[".orderindexes"] = array();


$tdataexercicios[".sqlHead"] = "SELECT id,  	Ano";
$tdataexercicios[".sqlFrom"] = "FROM exercicios";
$tdataexercicios[".sqlWhereExpr"] = "";
$tdataexercicios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexercicios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexercicios[".arrGroupsPerPage"] = $arrGPP;

$tdataexercicios[".highlightSearchResults"] = true;

$tableKeysexercicios = array();
$tableKeysexercicios[] = "id";
$tdataexercicios[".Keys"] = $tableKeysexercicios;


$tdataexercicios[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "exercicios";
	$fdata["Label"] = GetFieldLabel("exercicios","id");
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


	$tdataexercicios["id"] = $fdata;
		$tdataexercicios[".searchableFields"][] = "id";
//	Ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ano";
	$fdata["GoodName"] = "Ano";
	$fdata["ownerTable"] = "exercicios";
	$fdata["Label"] = GetFieldLabel("exercicios","Ano");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ano";

		$fdata["sourceSingle"] = "Ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ano";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


	$tdataexercicios["Ano"] = $fdata;
		$tdataexercicios[".searchableFields"][] = "Ano";


$tables_data["exercicios"]=&$tdataexercicios;
$field_labels["exercicios"] = &$fieldLabelsexercicios;
$fieldToolTips["exercicios"] = &$fieldToolTipsexercicios;
$placeHolders["exercicios"] = &$placeHoldersexercicios;
$page_titles["exercicios"] = &$pageTitlesexercicios;


changeTextControlsToDate( "exercicios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["exercicios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["exercicios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_exercicios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Ano";
$proto0["m_strFrom"] = "FROM exercicios";
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
	"m_strTable" => "exercicios",
	"m_srcTableName" => "exercicios"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "exercicios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Ano",
	"m_strTable" => "exercicios",
	"m_srcTableName" => "exercicios"
));

$proto8["m_sql"] = "Ano";
$proto8["m_srcTableName"] = "exercicios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "exercicios";
$proto11["m_srcTableName"] = "exercicios";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "Ano";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "exercicios";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "exercicios";
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
$proto0["m_srcTableName"]="exercicios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exercicios = createSqlQuery_exercicios();


	
		;

		

$tdataexercicios[".sqlquery"] = $queryData_exercicios;



$tdataexercicios[".hasEvents"] = false;

?>