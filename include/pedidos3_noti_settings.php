<?php
$tdatapedidos3_noti = array();
$tdatapedidos3_noti[".searchableFields"] = array();
$tdatapedidos3_noti[".ShortName"] = "pedidos3_noti";
$tdatapedidos3_noti[".OwnerID"] = "";
$tdatapedidos3_noti[".OriginalTable"] = "pedidos3_noti";


$tdatapedidos3_noti[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapedidos3_noti[".originalPagesByType"] = $tdatapedidos3_noti[".pagesByType"];
$tdatapedidos3_noti[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapedidos3_noti[".originalPages"] = $tdatapedidos3_noti[".pages"];
$tdatapedidos3_noti[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapedidos3_noti[".originalDefaultPages"] = $tdatapedidos3_noti[".defaultPages"];

//	field labels
$fieldLabelspedidos3_noti = array();
$fieldToolTipspedidos3_noti = array();
$pageTitlespedidos3_noti = array();
$placeHolderspedidos3_noti = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"] = array();
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"] = array();
	$placeHolderspedidos3_noti["Portuguese(Brazil)"] = array();
	$pageTitlespedidos3_noti["Portuguese(Brazil)"] = array();
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["id"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["message"] = "Message";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["message"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["message"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["user"] = "User";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["user"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["user"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["provider"] = "Provider";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["provider"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["provider"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["title"] = "Title";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["title"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["title"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["url"] = "Url";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["url"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["url"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["icon"] = "Icon";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["icon"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["icon"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["created"] = "Created";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["created"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["created"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["expire"] = "Expire";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["expire"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["expire"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["type"] = "Type";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["type"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["type"] = "";
	$fieldLabelspedidos3_noti["Portuguese(Brazil)"]["group"] = "Group";
	$fieldToolTipspedidos3_noti["Portuguese(Brazil)"]["group"] = "";
	$placeHolderspedidos3_noti["Portuguese(Brazil)"]["group"] = "";
	if (count($fieldToolTipspedidos3_noti["Portuguese(Brazil)"]))
		$tdatapedidos3_noti[".isUseToolTips"] = true;
}


	$tdatapedidos3_noti[".NCSearch"] = true;



$tdatapedidos3_noti[".shortTableName"] = "pedidos3_noti";
$tdatapedidos3_noti[".nSecOptions"] = 0;

$tdatapedidos3_noti[".mainTableOwnerID"] = "";
$tdatapedidos3_noti[".entityType"] = 0;
$tdatapedidos3_noti[".connId"] = "pedidos_at_localhost";


$tdatapedidos3_noti[".strOriginalTableName"] = "pedidos3_noti";

	



$tdatapedidos3_noti[".showAddInPopup"] = false;

$tdatapedidos3_noti[".showEditInPopup"] = false;

$tdatapedidos3_noti[".showViewInPopup"] = false;

$tdatapedidos3_noti[".listAjax"] = false;
//	temporary
//$tdatapedidos3_noti[".listAjax"] = false;

	$tdatapedidos3_noti[".audit"] = false;

	$tdatapedidos3_noti[".locking"] = false;


$pages = $tdatapedidos3_noti[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapedidos3_noti[".edit"] = true;
	$tdatapedidos3_noti[".afterEditAction"] = 1;
	$tdatapedidos3_noti[".closePopupAfterEdit"] = 1;
	$tdatapedidos3_noti[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapedidos3_noti[".add"] = true;
$tdatapedidos3_noti[".afterAddAction"] = 1;
$tdatapedidos3_noti[".closePopupAfterAdd"] = 1;
$tdatapedidos3_noti[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapedidos3_noti[".list"] = true;
}



$tdatapedidos3_noti[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapedidos3_noti[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapedidos3_noti[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapedidos3_noti[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapedidos3_noti[".printFriendly"] = true;
}



$tdatapedidos3_noti[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapedidos3_noti[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapedidos3_noti[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapedidos3_noti[".isUseAjaxSuggest"] = true;



																		

$tdatapedidos3_noti[".ajaxCodeSnippetAdded"] = false;

$tdatapedidos3_noti[".buttonsAdded"] = false;

$tdatapedidos3_noti[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapedidos3_noti[".isUseTimeForSearch"] = false;


$tdatapedidos3_noti[".badgeColor"] = "9ACD32";


$tdatapedidos3_noti[".allSearchFields"] = array();
$tdatapedidos3_noti[".filterFields"] = array();
$tdatapedidos3_noti[".requiredSearchFields"] = array();

$tdatapedidos3_noti[".googleLikeFields"] = array();
$tdatapedidos3_noti[".googleLikeFields"][] = "id";
$tdatapedidos3_noti[".googleLikeFields"][] = "message";
$tdatapedidos3_noti[".googleLikeFields"][] = "user";
$tdatapedidos3_noti[".googleLikeFields"][] = "provider";
$tdatapedidos3_noti[".googleLikeFields"][] = "title";
$tdatapedidos3_noti[".googleLikeFields"][] = "url";
$tdatapedidos3_noti[".googleLikeFields"][] = "icon";
$tdatapedidos3_noti[".googleLikeFields"][] = "created";
$tdatapedidos3_noti[".googleLikeFields"][] = "expire";
$tdatapedidos3_noti[".googleLikeFields"][] = "type";
$tdatapedidos3_noti[".googleLikeFields"][] = "group";



$tdatapedidos3_noti[".tableType"] = "list";

$tdatapedidos3_noti[".printerPageOrientation"] = 0;
$tdatapedidos3_noti[".nPrinterPageScale"] = 100;

$tdatapedidos3_noti[".nPrinterSplitRecords"] = 40;

$tdatapedidos3_noti[".geocodingEnabled"] = false;










$tdatapedidos3_noti[".pageSize"] = 20;

$tdatapedidos3_noti[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapedidos3_noti[".strOrderBy"] = $tstrOrderBy;

$tdatapedidos3_noti[".orderindexes"] = array();


$tdatapedidos3_noti[".sqlHead"] = "SELECT id,  	message,  	`user`,  	provider,  	title,  	url,  	icon,  	created,  	expire,  	`type`,  	`group`";
$tdatapedidos3_noti[".sqlFrom"] = "FROM pedidos3_noti";
$tdatapedidos3_noti[".sqlWhereExpr"] = "";
$tdatapedidos3_noti[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapedidos3_noti[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapedidos3_noti[".arrGroupsPerPage"] = $arrGPP;

$tdatapedidos3_noti[".highlightSearchResults"] = true;

$tableKeyspedidos3_noti = array();
$tableKeyspedidos3_noti[] = "id";
$tdatapedidos3_noti[".Keys"] = $tableKeyspedidos3_noti;


$tdatapedidos3_noti[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","id");
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


	$tdatapedidos3_noti["id"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "id";
//	message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "message";
	$fdata["GoodName"] = "message";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","message");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "message";

		$fdata["sourceSingle"] = "message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "message";

	
	
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


	$tdatapedidos3_noti["message"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "message";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

		$fdata["sourceSingle"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatapedidos3_noti["user"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "user";
//	provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "provider";
	$fdata["GoodName"] = "provider";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "provider";

		$fdata["sourceSingle"] = "provider";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "provider";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatapedidos3_noti["provider"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "provider";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatapedidos3_noti["title"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "title";
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","url");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "url";

		$fdata["sourceSingle"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url";

	
	
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


	$tdatapedidos3_noti["url"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "url";
//	icon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "icon";
	$fdata["GoodName"] = "icon";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","icon");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "icon";

		$fdata["sourceSingle"] = "icon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "icon";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatapedidos3_noti["icon"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "icon";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

		$fdata["sourceSingle"] = "created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatapedidos3_noti["created"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "created";
//	expire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "expire";
	$fdata["GoodName"] = "expire";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","expire");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "expire";

		$fdata["sourceSingle"] = "expire";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "expire";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatapedidos3_noti["expire"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "expire";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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


	$tdatapedidos3_noti["type"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "type";
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "pedidos3_noti";
	$fdata["Label"] = GetFieldLabel("pedidos3_noti","group");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "group";

		$fdata["sourceSingle"] = "group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatapedidos3_noti["group"] = $fdata;
		$tdatapedidos3_noti[".searchableFields"][] = "group";


$tables_data["pedidos3_noti"]=&$tdatapedidos3_noti;
$field_labels["pedidos3_noti"] = &$fieldLabelspedidos3_noti;
$fieldToolTips["pedidos3_noti"] = &$fieldToolTipspedidos3_noti;
$placeHolders["pedidos3_noti"] = &$placeHolderspedidos3_noti;
$page_titles["pedidos3_noti"] = &$pageTitlespedidos3_noti;


changeTextControlsToDate( "pedidos3_noti" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pedidos3_noti"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pedidos3_noti"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pedidos3_noti()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	message,  	`user`,  	provider,  	title,  	url,  	icon,  	created,  	expire,  	`type`,  	`group`";
$proto0["m_strFrom"] = "FROM pedidos3_noti";
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
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pedidos3_noti";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "message",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto8["m_sql"] = "message";
$proto8["m_srcTableName"] = "pedidos3_noti";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto10["m_sql"] = "`user`";
$proto10["m_srcTableName"] = "pedidos3_noti";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "provider",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto12["m_sql"] = "provider";
$proto12["m_srcTableName"] = "pedidos3_noti";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto14["m_sql"] = "title";
$proto14["m_srcTableName"] = "pedidos3_noti";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto16["m_sql"] = "url";
$proto16["m_srcTableName"] = "pedidos3_noti";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "icon",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto18["m_sql"] = "icon";
$proto18["m_srcTableName"] = "pedidos3_noti";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto20["m_sql"] = "created";
$proto20["m_srcTableName"] = "pedidos3_noti";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "expire",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto22["m_sql"] = "expire";
$proto22["m_srcTableName"] = "pedidos3_noti";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto24["m_sql"] = "`type`";
$proto24["m_srcTableName"] = "pedidos3_noti";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "pedidos3_noti",
	"m_srcTableName" => "pedidos3_noti"
));

$proto26["m_sql"] = "`group`";
$proto26["m_srcTableName"] = "pedidos3_noti";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "pedidos3_noti";
$proto29["m_srcTableName"] = "pedidos3_noti";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "message";
$proto29["m_columns"][] = "user";
$proto29["m_columns"][] = "provider";
$proto29["m_columns"][] = "title";
$proto29["m_columns"][] = "url";
$proto29["m_columns"][] = "icon";
$proto29["m_columns"][] = "created";
$proto29["m_columns"][] = "expire";
$proto29["m_columns"][] = "type";
$proto29["m_columns"][] = "group";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "pedidos3_noti";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "pedidos3_noti";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pedidos3_noti";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pedidos3_noti = createSqlQuery_pedidos3_noti();


	
		;

											

$tdatapedidos3_noti[".sqlquery"] = $queryData_pedidos3_noti;



$tdatapedidos3_noti[".hasEvents"] = false;

?>