<?php
$tdatamessages = array();
$tdatamessages[".searchableFields"] = array();
$tdatamessages[".ShortName"] = "messages";
$tdatamessages[".OwnerID"] = "";
$tdatamessages[".OriginalTable"] = "messages";


$tdatamessages[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamessages[".originalPagesByType"] = $tdatamessages[".pagesByType"];
$tdatamessages[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamessages[".originalPages"] = $tdatamessages[".pages"];
$tdatamessages[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamessages[".originalDefaultPages"] = $tdatamessages[".defaultPages"];

//	field labels
$fieldLabelsmessages = array();
$fieldToolTipsmessages = array();
$pageTitlesmessages = array();
$placeHoldersmessages = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsmessages["Portuguese(Brazil)"] = array();
	$fieldToolTipsmessages["Portuguese(Brazil)"] = array();
	$placeHoldersmessages["Portuguese(Brazil)"] = array();
	$pageTitlesmessages["Portuguese(Brazil)"] = array();
	$fieldLabelsmessages["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsmessages["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersmessages["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsmessages["Portuguese(Brazil)"]["pageName"] = "Page Name";
	$fieldToolTipsmessages["Portuguese(Brazil)"]["pageName"] = "";
	$placeHoldersmessages["Portuguese(Brazil)"]["pageName"] = "";
	$fieldLabelsmessages["Portuguese(Brazil)"]["pageType"] = "Page Type";
	$fieldToolTipsmessages["Portuguese(Brazil)"]["pageType"] = "";
	$placeHoldersmessages["Portuguese(Brazil)"]["pageType"] = "";
	$fieldLabelsmessages["Portuguese(Brazil)"]["value"] = "Value";
	$fieldToolTipsmessages["Portuguese(Brazil)"]["value"] = "";
	$placeHoldersmessages["Portuguese(Brazil)"]["value"] = "";
	$fieldLabelsmessages["Portuguese(Brazil)"]["project"] = "Project";
	$fieldToolTipsmessages["Portuguese(Brazil)"]["project"] = "";
	$placeHoldersmessages["Portuguese(Brazil)"]["project"] = "";
	if (count($fieldToolTipsmessages["Portuguese(Brazil)"]))
		$tdatamessages[".isUseToolTips"] = true;
}


	$tdatamessages[".NCSearch"] = true;



$tdatamessages[".shortTableName"] = "messages";
$tdatamessages[".nSecOptions"] = 0;

$tdatamessages[".mainTableOwnerID"] = "";
$tdatamessages[".entityType"] = 0;
$tdatamessages[".connId"] = "pedidos_at_localhost";


$tdatamessages[".strOriginalTableName"] = "messages";

	



$tdatamessages[".showAddInPopup"] = false;

$tdatamessages[".showEditInPopup"] = false;

$tdatamessages[".showViewInPopup"] = false;

$tdatamessages[".listAjax"] = false;
//	temporary
//$tdatamessages[".listAjax"] = false;

	$tdatamessages[".audit"] = false;

	$tdatamessages[".locking"] = false;


$pages = $tdatamessages[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamessages[".edit"] = true;
	$tdatamessages[".afterEditAction"] = 1;
	$tdatamessages[".closePopupAfterEdit"] = 1;
	$tdatamessages[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamessages[".add"] = true;
$tdatamessages[".afterAddAction"] = 1;
$tdatamessages[".closePopupAfterAdd"] = 1;
$tdatamessages[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamessages[".list"] = true;
}



$tdatamessages[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamessages[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamessages[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamessages[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamessages[".printFriendly"] = true;
}



$tdatamessages[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamessages[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamessages[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamessages[".isUseAjaxSuggest"] = true;



																		

$tdatamessages[".ajaxCodeSnippetAdded"] = false;

$tdatamessages[".buttonsAdded"] = false;

$tdatamessages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamessages[".isUseTimeForSearch"] = false;


$tdatamessages[".badgeColor"] = "DC143C";


$tdatamessages[".allSearchFields"] = array();
$tdatamessages[".filterFields"] = array();
$tdatamessages[".requiredSearchFields"] = array();

$tdatamessages[".googleLikeFields"] = array();
$tdatamessages[".googleLikeFields"][] = "id";
$tdatamessages[".googleLikeFields"][] = "pageName";
$tdatamessages[".googleLikeFields"][] = "pageType";
$tdatamessages[".googleLikeFields"][] = "value";
$tdatamessages[".googleLikeFields"][] = "project";



$tdatamessages[".tableType"] = "list";

$tdatamessages[".printerPageOrientation"] = 0;
$tdatamessages[".nPrinterPageScale"] = 100;

$tdatamessages[".nPrinterSplitRecords"] = 40;

$tdatamessages[".geocodingEnabled"] = false;










$tdatamessages[".pageSize"] = 20;

$tdatamessages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamessages[".strOrderBy"] = $tstrOrderBy;

$tdatamessages[".orderindexes"] = array();


$tdatamessages[".sqlHead"] = "SELECT id,  	pageName,  	pageType,  	`value`,  	project";
$tdatamessages[".sqlFrom"] = "FROM messages";
$tdatamessages[".sqlWhereExpr"] = "";
$tdatamessages[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamessages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamessages[".arrGroupsPerPage"] = $arrGPP;

$tdatamessages[".highlightSearchResults"] = true;

$tableKeysmessages = array();
$tableKeysmessages[] = "id";
$tdatamessages[".Keys"] = $tableKeysmessages;


$tdatamessages[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "messages";
	$fdata["Label"] = GetFieldLabel("messages","id");
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


	$tdatamessages["id"] = $fdata;
		$tdatamessages[".searchableFields"][] = "id";
//	pageName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pageName";
	$fdata["GoodName"] = "pageName";
	$fdata["ownerTable"] = "messages";
	$fdata["Label"] = GetFieldLabel("messages","pageName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pageName";

		$fdata["sourceSingle"] = "pageName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pageName";

	
	
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


	$tdatamessages["pageName"] = $fdata;
		$tdatamessages[".searchableFields"][] = "pageName";
//	pageType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pageType";
	$fdata["GoodName"] = "pageType";
	$fdata["ownerTable"] = "messages";
	$fdata["Label"] = GetFieldLabel("messages","pageType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pageType";

		$fdata["sourceSingle"] = "pageType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pageType";

	
	
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


	$tdatamessages["pageType"] = $fdata;
		$tdatamessages[".searchableFields"][] = "pageType";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "messages";
	$fdata["Label"] = GetFieldLabel("messages","value");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "value";

		$fdata["sourceSingle"] = "value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`value`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatamessages["value"] = $fdata;
		$tdatamessages[".searchableFields"][] = "value";
//	project
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "project";
	$fdata["GoodName"] = "project";
	$fdata["ownerTable"] = "messages";
	$fdata["Label"] = GetFieldLabel("messages","project");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "project";

		$fdata["sourceSingle"] = "project";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project";

	
	
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


	$tdatamessages["project"] = $fdata;
		$tdatamessages[".searchableFields"][] = "project";


$tables_data["messages"]=&$tdatamessages;
$field_labels["messages"] = &$fieldLabelsmessages;
$fieldToolTips["messages"] = &$fieldToolTipsmessages;
$placeHolders["messages"] = &$placeHoldersmessages;
$page_titles["messages"] = &$pageTitlesmessages;


changeTextControlsToDate( "messages" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["messages"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["messages"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_messages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	pageName,  	pageType,  	`value`,  	project";
$proto0["m_strFrom"] = "FROM messages";
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
	"m_strTable" => "messages",
	"m_srcTableName" => "messages"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "messages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pageName",
	"m_strTable" => "messages",
	"m_srcTableName" => "messages"
));

$proto8["m_sql"] = "pageName";
$proto8["m_srcTableName"] = "messages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pageType",
	"m_strTable" => "messages",
	"m_srcTableName" => "messages"
));

$proto10["m_sql"] = "pageType";
$proto10["m_srcTableName"] = "messages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "messages",
	"m_srcTableName" => "messages"
));

$proto12["m_sql"] = "`value`";
$proto12["m_srcTableName"] = "messages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "project",
	"m_strTable" => "messages",
	"m_srcTableName" => "messages"
));

$proto14["m_sql"] = "project";
$proto14["m_srcTableName"] = "messages";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "messages";
$proto17["m_srcTableName"] = "messages";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "pageName";
$proto17["m_columns"][] = "pageType";
$proto17["m_columns"][] = "value";
$proto17["m_columns"][] = "project";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "messages";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "messages";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="messages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_messages = createSqlQuery_messages();


	
		;

					

$tdatamessages[".sqlquery"] = $queryData_messages;



$tdatamessages[".hasEvents"] = false;

?>