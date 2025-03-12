<?php
$tdatapedidos_usuarios = array();
$tdatapedidos_usuarios[".searchableFields"] = array();
$tdatapedidos_usuarios[".ShortName"] = "pedidos_usuarios";
$tdatapedidos_usuarios[".OwnerID"] = "";
$tdatapedidos_usuarios[".OriginalTable"] = "pedidos_usuarios";


$tdatapedidos_usuarios[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatapedidos_usuarios[".originalPagesByType"] = $tdatapedidos_usuarios[".pagesByType"];
$tdatapedidos_usuarios[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatapedidos_usuarios[".originalPages"] = $tdatapedidos_usuarios[".pages"];
$tdatapedidos_usuarios[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatapedidos_usuarios[".originalDefaultPages"] = $tdatapedidos_usuarios[".defaultPages"];

//	field labels
$fieldLabelspedidos_usuarios = array();
$fieldToolTipspedidos_usuarios = array();
$pageTitlespedidos_usuarios = array();
$placeHolderspedidos_usuarios = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"] = array();
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"] = array();
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"] = array();
	$pageTitlespedidos_usuarios["Portuguese(Brazil)"] = array();
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["ID"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["username"] = "Usuário";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["username"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["username"] = "CPF/CNPJ (somente números)";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["password"] = "Senha";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["password"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["password"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["email"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["fullname"] = "Nome Completo";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["fullname"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["fullname"] = "Nome da escola/fornecedor/usuário";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["groupid"] = "Groupid";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["groupid"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["groupid"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["active"] = "Active";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["active"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["active"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["ext_security_id"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["ext_security_id"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["fullname1"] = "Função";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["fullname1"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["fullname1"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["userpic"] = "Userpic";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["userpic"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["userpic"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["fullname2"] = "DRAE";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["fullname2"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["fullname2"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["reset_token"] = "Reset Token";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["reset_token"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["reset_token"] = "";
	$fieldLabelspedidos_usuarios["Portuguese(Brazil)"]["reset_date"] = "Reset Date";
	$fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]["reset_date"] = "";
	$placeHolderspedidos_usuarios["Portuguese(Brazil)"]["reset_date"] = "";
	if (count($fieldToolTipspedidos_usuarios["Portuguese(Brazil)"]))
		$tdatapedidos_usuarios[".isUseToolTips"] = true;
}


	$tdatapedidos_usuarios[".NCSearch"] = true;



$tdatapedidos_usuarios[".shortTableName"] = "pedidos_usuarios";
$tdatapedidos_usuarios[".nSecOptions"] = 0;

$tdatapedidos_usuarios[".mainTableOwnerID"] = "";
$tdatapedidos_usuarios[".entityType"] = 0;
$tdatapedidos_usuarios[".connId"] = "pedidos_at_localhost";


$tdatapedidos_usuarios[".strOriginalTableName"] = "pedidos_usuarios";

	



$tdatapedidos_usuarios[".showAddInPopup"] = false;

$tdatapedidos_usuarios[".showEditInPopup"] = false;

$tdatapedidos_usuarios[".showViewInPopup"] = false;

$tdatapedidos_usuarios[".listAjax"] = false;
//	temporary
//$tdatapedidos_usuarios[".listAjax"] = false;

	$tdatapedidos_usuarios[".audit"] = false;

	$tdatapedidos_usuarios[".locking"] = false;


$pages = $tdatapedidos_usuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapedidos_usuarios[".edit"] = true;
	$tdatapedidos_usuarios[".afterEditAction"] = 1;
	$tdatapedidos_usuarios[".closePopupAfterEdit"] = 1;
	$tdatapedidos_usuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapedidos_usuarios[".add"] = true;
$tdatapedidos_usuarios[".afterAddAction"] = 1;
$tdatapedidos_usuarios[".closePopupAfterAdd"] = 1;
$tdatapedidos_usuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapedidos_usuarios[".list"] = true;
}



$tdatapedidos_usuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapedidos_usuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapedidos_usuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapedidos_usuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapedidos_usuarios[".printFriendly"] = true;
}



$tdatapedidos_usuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapedidos_usuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapedidos_usuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapedidos_usuarios[".isUseAjaxSuggest"] = true;



																		

$tdatapedidos_usuarios[".ajaxCodeSnippetAdded"] = false;

$tdatapedidos_usuarios[".buttonsAdded"] = false;

$tdatapedidos_usuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapedidos_usuarios[".isUseTimeForSearch"] = false;


$tdatapedidos_usuarios[".badgeColor"] = "E8926F";


$tdatapedidos_usuarios[".allSearchFields"] = array();
$tdatapedidos_usuarios[".filterFields"] = array();
$tdatapedidos_usuarios[".requiredSearchFields"] = array();

$tdatapedidos_usuarios[".googleLikeFields"] = array();
$tdatapedidos_usuarios[".googleLikeFields"][] = "ID";
$tdatapedidos_usuarios[".googleLikeFields"][] = "username";
$tdatapedidos_usuarios[".googleLikeFields"][] = "password";
$tdatapedidos_usuarios[".googleLikeFields"][] = "email";
$tdatapedidos_usuarios[".googleLikeFields"][] = "fullname";
$tdatapedidos_usuarios[".googleLikeFields"][] = "groupid";
$tdatapedidos_usuarios[".googleLikeFields"][] = "active";
$tdatapedidos_usuarios[".googleLikeFields"][] = "ext_security_id";
$tdatapedidos_usuarios[".googleLikeFields"][] = "reset_token";
$tdatapedidos_usuarios[".googleLikeFields"][] = "reset_date";



$tdatapedidos_usuarios[".tableType"] = "list";

$tdatapedidos_usuarios[".printerPageOrientation"] = 0;
$tdatapedidos_usuarios[".nPrinterPageScale"] = 100;

$tdatapedidos_usuarios[".nPrinterSplitRecords"] = 40;

$tdatapedidos_usuarios[".geocodingEnabled"] = false;










$tdatapedidos_usuarios[".pageSize"] = 20;

$tdatapedidos_usuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapedidos_usuarios[".strOrderBy"] = $tstrOrderBy;

$tdatapedidos_usuarios[".orderindexes"] = array();


$tdatapedidos_usuarios[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id,  	fullname1,  	userpic,  	fullname2,  	reset_token,  	reset_date";
$tdatapedidos_usuarios[".sqlFrom"] = "FROM pedidos_usuarios";
$tdatapedidos_usuarios[".sqlWhereExpr"] = "";
$tdatapedidos_usuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapedidos_usuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapedidos_usuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatapedidos_usuarios[".highlightSearchResults"] = true;

$tableKeyspedidos_usuarios = array();
$tableKeyspedidos_usuarios[] = "ID";
$tdatapedidos_usuarios[".Keys"] = $tableKeyspedidos_usuarios;


$tdatapedidos_usuarios[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatapedidos_usuarios["ID"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatapedidos_usuarios["username"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatapedidos_usuarios["password"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatapedidos_usuarios["email"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatapedidos_usuarios["fullname"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdatapedidos_usuarios["groupid"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatapedidos_usuarios["active"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","ext_security_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdatapedidos_usuarios["ext_security_id"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "ext_security_id";
//	fullname1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fullname1";
	$fdata["GoodName"] = "fullname1";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","fullname1");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "fullname1";

		$fdata["sourceSingle"] = "fullname1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname1";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "funcao";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "nom_func";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom_func";

	

	
	$edata["LookupOrderBy"] = "nom_func";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapedidos_usuarios["fullname1"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "fullname1";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userpic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatapedidos_usuarios["userpic"] = $fdata;
	//	fullname2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fullname2";
	$fdata["GoodName"] = "fullname2";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","fullname2");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "fullname2";

		$fdata["sourceSingle"] = "fullname2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname2";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Seleciona_drae_novo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Drae";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Drae";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapedidos_usuarios["fullname2"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "fullname2";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","reset_token");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
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


	$tdatapedidos_usuarios["reset_token"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("pedidos_usuarios","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
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


	$tdatapedidos_usuarios["reset_date"] = $fdata;
		$tdatapedidos_usuarios[".searchableFields"][] = "reset_date";


$tables_data["pedidos_usuarios"]=&$tdatapedidos_usuarios;
$field_labels["pedidos_usuarios"] = &$fieldLabelspedidos_usuarios;
$fieldToolTips["pedidos_usuarios"] = &$fieldToolTipspedidos_usuarios;
$placeHolders["pedidos_usuarios"] = &$placeHolderspedidos_usuarios;
$page_titles["pedidos_usuarios"] = &$pageTitlespedidos_usuarios;


changeTextControlsToDate( "pedidos_usuarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pedidos_usuarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pedidos_usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pedidos_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id,  	fullname1,  	userpic,  	fullname2,  	reset_token,  	reset_date";
$proto0["m_strFrom"] = "FROM pedidos_usuarios";
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
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "pedidos_usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "pedidos_usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "pedidos_usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "pedidos_usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "pedidos_usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "pedidos_usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "pedidos_usuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "pedidos_usuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname1",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto22["m_sql"] = "fullname1";
$proto22["m_srcTableName"] = "pedidos_usuarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto24["m_sql"] = "userpic";
$proto24["m_srcTableName"] = "pedidos_usuarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname2",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto26["m_sql"] = "fullname2";
$proto26["m_srcTableName"] = "pedidos_usuarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto28["m_sql"] = "reset_token";
$proto28["m_srcTableName"] = "pedidos_usuarios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "pedidos_usuarios"
));

$proto30["m_sql"] = "reset_date";
$proto30["m_srcTableName"] = "pedidos_usuarios";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "pedidos_usuarios";
$proto33["m_srcTableName"] = "pedidos_usuarios";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "ID";
$proto33["m_columns"][] = "username";
$proto33["m_columns"][] = "password";
$proto33["m_columns"][] = "email";
$proto33["m_columns"][] = "fullname";
$proto33["m_columns"][] = "groupid";
$proto33["m_columns"][] = "active";
$proto33["m_columns"][] = "ext_security_id";
$proto33["m_columns"][] = "fullname1";
$proto33["m_columns"][] = "userpic";
$proto33["m_columns"][] = "fullname2";
$proto33["m_columns"][] = "reset_token";
$proto33["m_columns"][] = "reset_date";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "pedidos_usuarios";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "pedidos_usuarios";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pedidos_usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pedidos_usuarios = createSqlQuery_pedidos_usuarios();


	
		;

													

$tdatapedidos_usuarios[".sqlquery"] = $queryData_pedidos_usuarios;



$tdatapedidos_usuarios[".hasEvents"] = false;

?>