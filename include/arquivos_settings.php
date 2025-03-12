<?php
$tdataarquivos = array();
$tdataarquivos[".searchableFields"] = array();
$tdataarquivos[".ShortName"] = "arquivos";
$tdataarquivos[".OwnerID"] = "";
$tdataarquivos[".OriginalTable"] = "arquivos";


$tdataarquivos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataarquivos[".originalPagesByType"] = $tdataarquivos[".pagesByType"];
$tdataarquivos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataarquivos[".originalPages"] = $tdataarquivos[".pages"];
$tdataarquivos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataarquivos[".originalDefaultPages"] = $tdataarquivos[".defaultPages"];

//	field labels
$fieldLabelsarquivos = array();
$fieldToolTipsarquivos = array();
$pageTitlesarquivos = array();
$placeHoldersarquivos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsarquivos["Portuguese(Brazil)"] = array();
	$fieldToolTipsarquivos["Portuguese(Brazil)"] = array();
	$placeHoldersarquivos["Portuguese(Brazil)"] = array();
	$pageTitlesarquivos["Portuguese(Brazil)"] = array();
	$fieldLabelsarquivos["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsarquivos["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersarquivos["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsarquivos["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsarquivos["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersarquivos["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsarquivos["Portuguese(Brazil)"]["Descri__o"] = "Descrição";
	$fieldToolTipsarquivos["Portuguese(Brazil)"]["Descri__o"] = "";
	$placeHoldersarquivos["Portuguese(Brazil)"]["Descri__o"] = "";
	$fieldLabelsarquivos["Portuguese(Brazil)"]["Data_cad"] = "Data Cadastro";
	$fieldToolTipsarquivos["Portuguese(Brazil)"]["Data_cad"] = "";
	$placeHoldersarquivos["Portuguese(Brazil)"]["Data_cad"] = "";
	$fieldLabelsarquivos["Portuguese(Brazil)"]["Tipo"] = "Tipo";
	$fieldToolTipsarquivos["Portuguese(Brazil)"]["Tipo"] = "";
	$placeHoldersarquivos["Portuguese(Brazil)"]["Tipo"] = "";
	$fieldLabelsarquivos["Portuguese(Brazil)"]["Arquivo"] = "Arquivo";
	$fieldToolTipsarquivos["Portuguese(Brazil)"]["Arquivo"] = "";
	$placeHoldersarquivos["Portuguese(Brazil)"]["Arquivo"] = "";
	if (count($fieldToolTipsarquivos["Portuguese(Brazil)"]))
		$tdataarquivos[".isUseToolTips"] = true;
}


	$tdataarquivos[".NCSearch"] = true;



$tdataarquivos[".shortTableName"] = "arquivos";
$tdataarquivos[".nSecOptions"] = 0;

$tdataarquivos[".mainTableOwnerID"] = "";
$tdataarquivos[".entityType"] = 0;
$tdataarquivos[".connId"] = "pedidos_at_localhost";


$tdataarquivos[".strOriginalTableName"] = "arquivos";

	



$tdataarquivos[".showAddInPopup"] = false;

$tdataarquivos[".showEditInPopup"] = false;

$tdataarquivos[".showViewInPopup"] = false;

$tdataarquivos[".listAjax"] = false;
//	temporary
//$tdataarquivos[".listAjax"] = false;

	$tdataarquivos[".audit"] = false;

	$tdataarquivos[".locking"] = false;


$pages = $tdataarquivos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataarquivos[".edit"] = true;
	$tdataarquivos[".afterEditAction"] = 0;
	$tdataarquivos[".closePopupAfterEdit"] = 1;
	$tdataarquivos[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataarquivos[".add"] = true;
$tdataarquivos[".afterAddAction"] = 0;
$tdataarquivos[".closePopupAfterAdd"] = 1;
$tdataarquivos[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataarquivos[".list"] = true;
}



$tdataarquivos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataarquivos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataarquivos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataarquivos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataarquivos[".printFriendly"] = true;
}



$tdataarquivos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataarquivos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataarquivos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataarquivos[".isUseAjaxSuggest"] = true;



																		

$tdataarquivos[".ajaxCodeSnippetAdded"] = false;

$tdataarquivos[".buttonsAdded"] = false;

$tdataarquivos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataarquivos[".isUseTimeForSearch"] = false;


$tdataarquivos[".badgeColor"] = "DAA520";


$tdataarquivos[".allSearchFields"] = array();
$tdataarquivos[".filterFields"] = array();
$tdataarquivos[".requiredSearchFields"] = array();

$tdataarquivos[".googleLikeFields"] = array();
$tdataarquivos[".googleLikeFields"][] = "id";
$tdataarquivos[".googleLikeFields"][] = "Nome";
$tdataarquivos[".googleLikeFields"][] = "Descrição";
$tdataarquivos[".googleLikeFields"][] = "Data_cad";
$tdataarquivos[".googleLikeFields"][] = "Tipo";
$tdataarquivos[".googleLikeFields"][] = "Arquivo";



$tdataarquivos[".tableType"] = "list";

$tdataarquivos[".printerPageOrientation"] = 0;
$tdataarquivos[".nPrinterPageScale"] = 100;

$tdataarquivos[".nPrinterSplitRecords"] = 40;

$tdataarquivos[".geocodingEnabled"] = false;





$tdataarquivos[".isResizeColumns"] = true;





$tdataarquivos[".pageSize"] = 20;

$tdataarquivos[".warnLeavingPages"] = true;

$tdataarquivos[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "ORDER BY Nome";
$tdataarquivos[".strOrderBy"] = $tstrOrderBy;

$tdataarquivos[".orderindexes"] = array();
	$tdataarquivos[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Nome");



$tdataarquivos[".sqlHead"] = "SELECT id,  Nome,  `Descrição`,  Data_cad,  Tipo,  Arquivo";
$tdataarquivos[".sqlFrom"] = "FROM arquivos";
$tdataarquivos[".sqlWhereExpr"] = "";
$tdataarquivos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarquivos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarquivos[".arrGroupsPerPage"] = $arrGPP;

$tdataarquivos[".highlightSearchResults"] = true;

$tableKeysarquivos = array();
$tableKeysarquivos[] = "id";
$tdataarquivos[".Keys"] = $tableKeysarquivos;


$tdataarquivos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "arquivos";
	$fdata["Label"] = GetFieldLabel("arquivos","id");
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


	$tdataarquivos["id"] = $fdata;
		$tdataarquivos[".searchableFields"][] = "id";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "arquivos";
	$fdata["Label"] = GetFieldLabel("arquivos","Nome");
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


	$tdataarquivos["Nome"] = $fdata;
		$tdataarquivos[".searchableFields"][] = "Nome";
//	Descrição
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Descrição";
	$fdata["GoodName"] = "Descri__o";
	$fdata["ownerTable"] = "arquivos";
	$fdata["Label"] = GetFieldLabel("arquivos","Descri__o");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descrição";

		$fdata["sourceSingle"] = "Descrição";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Descrição`";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataarquivos["Descrição"] = $fdata;
		$tdataarquivos[".searchableFields"][] = "Descrição";
//	Data_cad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Data_cad";
	$fdata["GoodName"] = "Data_cad";
	$fdata["ownerTable"] = "arquivos";
	$fdata["Label"] = GetFieldLabel("arquivos","Data_cad");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Data_cad";

		$fdata["sourceSingle"] = "Data_cad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data_cad";

	
	
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


	$tdataarquivos["Data_cad"] = $fdata;
		$tdataarquivos[".searchableFields"][] = "Data_cad";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "arquivos";
	$fdata["Label"] = GetFieldLabel("arquivos","Tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo";

		$fdata["sourceSingle"] = "Tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataarquivos["Tipo"] = $fdata;
		$tdataarquivos[".searchableFields"][] = "Tipo";
//	Arquivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Arquivo";
	$fdata["GoodName"] = "Arquivo";
	$fdata["ownerTable"] = "arquivos";
	$fdata["Label"] = GetFieldLabel("arquivos","Arquivo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Arquivo";

		$fdata["sourceSingle"] = "Arquivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Arquivo";

		$fdata["DeleteAssociatedFile"] = true;

		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "filies";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
			$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataarquivos["Arquivo"] = $fdata;
		$tdataarquivos[".searchableFields"][] = "Arquivo";


$tables_data["arquivos"]=&$tdataarquivos;
$field_labels["arquivos"] = &$fieldLabelsarquivos;
$fieldToolTips["arquivos"] = &$fieldToolTipsarquivos;
$placeHolders["arquivos"] = &$placeHoldersarquivos;
$page_titles["arquivos"] = &$pageTitlesarquivos;


changeTextControlsToDate( "arquivos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["arquivos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["arquivos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_arquivos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  Nome,  `Descrição`,  Data_cad,  Tipo,  Arquivo";
$proto0["m_strFrom"] = "FROM arquivos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Nome";
	
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
	"m_strTable" => "arquivos",
	"m_srcTableName" => "arquivos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "arquivos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "arquivos",
	"m_srcTableName" => "arquivos"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "arquivos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Descrição",
	"m_strTable" => "arquivos",
	"m_srcTableName" => "arquivos"
));

$proto10["m_sql"] = "`Descrição`";
$proto10["m_srcTableName"] = "arquivos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Data_cad",
	"m_strTable" => "arquivos",
	"m_srcTableName" => "arquivos"
));

$proto12["m_sql"] = "Data_cad";
$proto12["m_srcTableName"] = "arquivos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "arquivos",
	"m_srcTableName" => "arquivos"
));

$proto14["m_sql"] = "Tipo";
$proto14["m_srcTableName"] = "arquivos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Arquivo",
	"m_strTable" => "arquivos",
	"m_srcTableName" => "arquivos"
));

$proto16["m_sql"] = "Arquivo";
$proto16["m_srcTableName"] = "arquivos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "arquivos";
$proto19["m_srcTableName"] = "arquivos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "Nome";
$proto19["m_columns"][] = "Descrição";
$proto19["m_columns"][] = "Data_cad";
$proto19["m_columns"][] = "Tipo";
$proto19["m_columns"][] = "Arquivo";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "arquivos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "arquivos";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "arquivos",
	"m_srcTableName" => "arquivos"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 1;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="arquivos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_arquivos = createSqlQuery_arquivos();


	
		;

						

$tdataarquivos[".sqlquery"] = $queryData_arquivos;



$tdataarquivos[".hasEvents"] = false;

?>