<?php
$tdataseleciona_drae_novo = array();
$tdataseleciona_drae_novo[".searchableFields"] = array();
$tdataseleciona_drae_novo[".ShortName"] = "seleciona_drae_novo";
$tdataseleciona_drae_novo[".OwnerID"] = "";
$tdataseleciona_drae_novo[".OriginalTable"] = "escolas";


$tdataseleciona_drae_novo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataseleciona_drae_novo[".originalPagesByType"] = $tdataseleciona_drae_novo[".pagesByType"];
$tdataseleciona_drae_novo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataseleciona_drae_novo[".originalPages"] = $tdataseleciona_drae_novo[".pages"];
$tdataseleciona_drae_novo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataseleciona_drae_novo[".originalDefaultPages"] = $tdataseleciona_drae_novo[".defaultPages"];

//	field labels
$fieldLabelsseleciona_drae_novo = array();
$fieldToolTipsseleciona_drae_novo = array();
$pageTitlesseleciona_drae_novo = array();
$placeHoldersseleciona_drae_novo = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsseleciona_drae_novo["Portuguese(Brazil)"] = array();
	$fieldToolTipsseleciona_drae_novo["Portuguese(Brazil)"] = array();
	$placeHoldersseleciona_drae_novo["Portuguese(Brazil)"] = array();
	$pageTitlesseleciona_drae_novo["Portuguese(Brazil)"] = array();
	$fieldLabelsseleciona_drae_novo["Portuguese(Brazil)"]["Drae"] = "Drae";
	$fieldToolTipsseleciona_drae_novo["Portuguese(Brazil)"]["Drae"] = "";
	$placeHoldersseleciona_drae_novo["Portuguese(Brazil)"]["Drae"] = "";
	if (count($fieldToolTipsseleciona_drae_novo["Portuguese(Brazil)"]))
		$tdataseleciona_drae_novo[".isUseToolTips"] = true;
}


	$tdataseleciona_drae_novo[".NCSearch"] = true;



$tdataseleciona_drae_novo[".shortTableName"] = "seleciona_drae_novo";
$tdataseleciona_drae_novo[".nSecOptions"] = 0;

$tdataseleciona_drae_novo[".mainTableOwnerID"] = "";
$tdataseleciona_drae_novo[".entityType"] = 1;
$tdataseleciona_drae_novo[".connId"] = "pedidos_at_localhost";


$tdataseleciona_drae_novo[".strOriginalTableName"] = "escolas";

	



$tdataseleciona_drae_novo[".showAddInPopup"] = false;

$tdataseleciona_drae_novo[".showEditInPopup"] = false;

$tdataseleciona_drae_novo[".showViewInPopup"] = false;

$tdataseleciona_drae_novo[".listAjax"] = false;
//	temporary
//$tdataseleciona_drae_novo[".listAjax"] = false;

	$tdataseleciona_drae_novo[".audit"] = false;

	$tdataseleciona_drae_novo[".locking"] = false;


$pages = $tdataseleciona_drae_novo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataseleciona_drae_novo[".edit"] = true;
	$tdataseleciona_drae_novo[".afterEditAction"] = 1;
	$tdataseleciona_drae_novo[".closePopupAfterEdit"] = 1;
	$tdataseleciona_drae_novo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataseleciona_drae_novo[".add"] = true;
$tdataseleciona_drae_novo[".afterAddAction"] = 1;
$tdataseleciona_drae_novo[".closePopupAfterAdd"] = 1;
$tdataseleciona_drae_novo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataseleciona_drae_novo[".list"] = true;
}



$tdataseleciona_drae_novo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataseleciona_drae_novo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataseleciona_drae_novo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataseleciona_drae_novo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataseleciona_drae_novo[".printFriendly"] = true;
}



$tdataseleciona_drae_novo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataseleciona_drae_novo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataseleciona_drae_novo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataseleciona_drae_novo[".isUseAjaxSuggest"] = true;



																		

$tdataseleciona_drae_novo[".ajaxCodeSnippetAdded"] = false;

$tdataseleciona_drae_novo[".buttonsAdded"] = false;

$tdataseleciona_drae_novo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseleciona_drae_novo[".isUseTimeForSearch"] = false;


$tdataseleciona_drae_novo[".badgeColor"] = "7B68EE";


$tdataseleciona_drae_novo[".allSearchFields"] = array();
$tdataseleciona_drae_novo[".filterFields"] = array();
$tdataseleciona_drae_novo[".requiredSearchFields"] = array();

$tdataseleciona_drae_novo[".googleLikeFields"] = array();
$tdataseleciona_drae_novo[".googleLikeFields"][] = "Drae";



$tdataseleciona_drae_novo[".tableType"] = "list";

$tdataseleciona_drae_novo[".printerPageOrientation"] = 0;
$tdataseleciona_drae_novo[".nPrinterPageScale"] = 100;

$tdataseleciona_drae_novo[".nPrinterSplitRecords"] = 40;

$tdataseleciona_drae_novo[".geocodingEnabled"] = false;










$tdataseleciona_drae_novo[".pageSize"] = 20;

$tdataseleciona_drae_novo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataseleciona_drae_novo[".strOrderBy"] = $tstrOrderBy;

$tdataseleciona_drae_novo[".orderindexes"] = array();


$tdataseleciona_drae_novo[".sqlHead"] = "SELECT Drae";
$tdataseleciona_drae_novo[".sqlFrom"] = "FROM escolas";
$tdataseleciona_drae_novo[".sqlWhereExpr"] = "";
$tdataseleciona_drae_novo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseleciona_drae_novo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseleciona_drae_novo[".arrGroupsPerPage"] = $arrGPP;

$tdataseleciona_drae_novo[".highlightSearchResults"] = true;

$tableKeysseleciona_drae_novo = array();
$tdataseleciona_drae_novo[".Keys"] = $tableKeysseleciona_drae_novo;


$tdataseleciona_drae_novo[".hideMobileList"] = array();




//	Drae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Drae";
	$fdata["GoodName"] = "Drae";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("Seleciona_drae_novo","Drae");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Drae";

		$fdata["sourceSingle"] = "Drae";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Drae";

	
	
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


	$tdataseleciona_drae_novo["Drae"] = $fdata;
		$tdataseleciona_drae_novo[".searchableFields"][] = "Drae";


$tables_data["Seleciona_drae_novo"]=&$tdataseleciona_drae_novo;
$field_labels["Seleciona_drae_novo"] = &$fieldLabelsseleciona_drae_novo;
$fieldToolTips["Seleciona_drae_novo"] = &$fieldToolTipsseleciona_drae_novo;
$placeHolders["Seleciona_drae_novo"] = &$placeHoldersseleciona_drae_novo;
$page_titles["Seleciona_drae_novo"] = &$pageTitlesseleciona_drae_novo;


changeTextControlsToDate( "Seleciona_drae_novo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Seleciona_drae_novo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Seleciona_drae_novo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_seleciona_drae_novo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Drae";
$proto0["m_strFrom"] = "FROM escolas";
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
	"m_strName" => "Drae",
	"m_strTable" => "escolas",
	"m_srcTableName" => "Seleciona_drae_novo"
));

$proto6["m_sql"] = "Drae";
$proto6["m_srcTableName"] = "Seleciona_drae_novo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "escolas";
$proto9["m_srcTableName"] = "Seleciona_drae_novo";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "cod_escola";
$proto9["m_columns"][] = "CNPJ";
$proto9["m_columns"][] = "Nome";
$proto9["m_columns"][] = "Endereço";
$proto9["m_columns"][] = "Email";
$proto9["m_columns"][] = "Telefone";
$proto9["m_columns"][] = "Descrição";
$proto9["m_columns"][] = "Drae";
$proto9["m_columns"][] = "Bairro";
$proto9["m_columns"][] = "Cidade";
$proto9["m_columns"][] = "Estado";
$proto9["m_columns"][] = "Lat";
$proto9["m_columns"][] = "Lng";
$proto9["m_columns"][] = "Direc";
$proto9["m_columns"][] = "Cep";
$proto9["m_columns"][] = "Tec_resp";
$proto9["m_columns"][] = "Arquivos";
$proto9["m_columns"][] = "Obs";
$proto9["m_columns"][] = "EmailDrae";
$proto9["m_columns"][] = "Municipio";
$proto9["m_columns"][] = "cod_fee";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "escolas";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "Seleciona_drae_novo";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Seleciona_drae_novo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_seleciona_drae_novo = createSqlQuery_seleciona_drae_novo();


	
		;

	

$tdataseleciona_drae_novo[".sqlquery"] = $queryData_seleciona_drae_novo;



$tdataseleciona_drae_novo[".hasEvents"] = false;

?>