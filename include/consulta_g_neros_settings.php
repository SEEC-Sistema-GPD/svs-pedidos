<?php
$tdataconsulta_g_neros = array();
$tdataconsulta_g_neros[".searchableFields"] = array();
$tdataconsulta_g_neros[".ShortName"] = "consulta_g_neros";
$tdataconsulta_g_neros[".OwnerID"] = "";
$tdataconsulta_g_neros[".OriginalTable"] = "cad_prod";


$tdataconsulta_g_neros[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconsulta_g_neros[".originalPagesByType"] = $tdataconsulta_g_neros[".pagesByType"];
$tdataconsulta_g_neros[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconsulta_g_neros[".originalPages"] = $tdataconsulta_g_neros[".pages"];
$tdataconsulta_g_neros[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconsulta_g_neros[".originalDefaultPages"] = $tdataconsulta_g_neros[".defaultPages"];

//	field labels
$fieldLabelsconsulta_g_neros = array();
$fieldToolTipsconsulta_g_neros = array();
$pageTitlesconsulta_g_neros = array();
$placeHoldersconsulta_g_neros = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsconsulta_g_neros["Portuguese(Brazil)"] = array();
	$fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"] = array();
	$placeHoldersconsulta_g_neros["Portuguese(Brazil)"] = array();
	$pageTitlesconsulta_g_neros["Portuguese(Brazil)"] = array();
	$fieldLabelsconsulta_g_neros["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersconsulta_g_neros["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsconsulta_g_neros["Portuguese(Brazil)"]["valor"] = "Valor";
	$fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"]["valor"] = "";
	$placeHoldersconsulta_g_neros["Portuguese(Brazil)"]["valor"] = "";
	$fieldLabelsconsulta_g_neros["Portuguese(Brazil)"]["Und"] = "Und";
	$fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"]["Und"] = "";
	$placeHoldersconsulta_g_neros["Portuguese(Brazil)"]["Und"] = "";
	$fieldLabelsconsulta_g_neros["Portuguese(Brazil)"]["Marca"] = "Marca";
	$fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"]["Marca"] = "";
	$placeHoldersconsulta_g_neros["Portuguese(Brazil)"]["Marca"] = "";
	$fieldLabelsconsulta_g_neros["Portuguese(Brazil)"]["Valor_Para"] = "Valor Para";
	$fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"]["Valor_Para"] = "";
	$placeHoldersconsulta_g_neros["Portuguese(Brazil)"]["Valor_Para"] = "";
	$fieldLabelsconsulta_g_neros["Portuguese(Brazil)"]["Raz_o_Social"] = "Razão Social";
	$fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"]["Raz_o_Social"] = "";
	$placeHoldersconsulta_g_neros["Portuguese(Brazil)"]["Raz_o_Social"] = "";
	$fieldLabelsconsulta_g_neros["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersconsulta_g_neros["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsconsulta_g_neros["Portuguese(Brazil)"]["Cod_prod"] = "Cod Prod";
	$fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"]["Cod_prod"] = "";
	$placeHoldersconsulta_g_neros["Portuguese(Brazil)"]["Cod_prod"] = "";
	if (count($fieldToolTipsconsulta_g_neros["Portuguese(Brazil)"]))
		$tdataconsulta_g_neros[".isUseToolTips"] = true;
}


	$tdataconsulta_g_neros[".NCSearch"] = true;



$tdataconsulta_g_neros[".shortTableName"] = "consulta_g_neros";
$tdataconsulta_g_neros[".nSecOptions"] = 0;

$tdataconsulta_g_neros[".mainTableOwnerID"] = "";
$tdataconsulta_g_neros[".entityType"] = 1;
$tdataconsulta_g_neros[".connId"] = "pedidos_at_localhost";


$tdataconsulta_g_neros[".strOriginalTableName"] = "cad_prod";

	



$tdataconsulta_g_neros[".showAddInPopup"] = false;

$tdataconsulta_g_neros[".showEditInPopup"] = false;

$tdataconsulta_g_neros[".showViewInPopup"] = false;

$tdataconsulta_g_neros[".listAjax"] = false;
//	temporary
//$tdataconsulta_g_neros[".listAjax"] = false;

	$tdataconsulta_g_neros[".audit"] = false;

	$tdataconsulta_g_neros[".locking"] = false;


$pages = $tdataconsulta_g_neros[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulta_g_neros[".edit"] = true;
	$tdataconsulta_g_neros[".afterEditAction"] = 1;
	$tdataconsulta_g_neros[".closePopupAfterEdit"] = 1;
	$tdataconsulta_g_neros[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulta_g_neros[".add"] = true;
$tdataconsulta_g_neros[".afterAddAction"] = 1;
$tdataconsulta_g_neros[".closePopupAfterAdd"] = 1;
$tdataconsulta_g_neros[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulta_g_neros[".list"] = true;
}



$tdataconsulta_g_neros[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulta_g_neros[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulta_g_neros[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulta_g_neros[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulta_g_neros[".printFriendly"] = true;
}



$tdataconsulta_g_neros[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulta_g_neros[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulta_g_neros[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulta_g_neros[".isUseAjaxSuggest"] = true;



																		

$tdataconsulta_g_neros[".ajaxCodeSnippetAdded"] = false;

$tdataconsulta_g_neros[".buttonsAdded"] = false;

$tdataconsulta_g_neros[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulta_g_neros[".isUseTimeForSearch"] = false;


$tdataconsulta_g_neros[".badgeColor"] = "EDCA00";


$tdataconsulta_g_neros[".allSearchFields"] = array();
$tdataconsulta_g_neros[".filterFields"] = array();
$tdataconsulta_g_neros[".requiredSearchFields"] = array();

$tdataconsulta_g_neros[".googleLikeFields"] = array();
$tdataconsulta_g_neros[".googleLikeFields"][] = "Nome";



$tdataconsulta_g_neros[".tableType"] = "list";

$tdataconsulta_g_neros[".printerPageOrientation"] = 0;
$tdataconsulta_g_neros[".nPrinterPageScale"] = 100;

$tdataconsulta_g_neros[".nPrinterSplitRecords"] = 40;

$tdataconsulta_g_neros[".geocodingEnabled"] = false;










$tdataconsulta_g_neros[".pageSize"] = 20;

$tdataconsulta_g_neros[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY cad_prod.Nome";
$tdataconsulta_g_neros[".strOrderBy"] = $tstrOrderBy;

$tdataconsulta_g_neros[".orderindexes"] = array();
	$tdataconsulta_g_neros[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "cad_prod.Nome");



$tdataconsulta_g_neros[".sqlHead"] = "SELECT cad_prod.Nome,  cad_prod.valor,  cad_prod.Und,  cad_prod.Marca,  cad_prod.Valor_Para,  fornecedores.`Razão Social`,  cad_prod.id,  cad_prod.Cod_prod";
$tdataconsulta_g_neros[".sqlFrom"] = "FROM cad_prod  INNER JOIN fornecedores ON cad_prod.Fornecedor = fornecedores.CNPJ";
$tdataconsulta_g_neros[".sqlWhereExpr"] = "";
$tdataconsulta_g_neros[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulta_g_neros[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulta_g_neros[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulta_g_neros[".highlightSearchResults"] = true;

$tableKeysconsulta_g_neros = array();
$tableKeysconsulta_g_neros[] = "id";
$tdataconsulta_g_neros[".Keys"] = $tableKeysconsulta_g_neros;


$tdataconsulta_g_neros[".hideMobileList"] = array();




//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("Consulta_G_neros","Nome");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nome";

		$fdata["sourceSingle"] = "Nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cad_prod.Nome";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataconsulta_g_neros["Nome"] = $fdata;
		$tdataconsulta_g_neros[".searchableFields"][] = "Nome";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("Consulta_G_neros","valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor";

		$fdata["sourceSingle"] = "valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cad_prod.valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataconsulta_g_neros["valor"] = $fdata;
		$tdataconsulta_g_neros[".searchableFields"][] = "valor";
//	Und
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Und";
	$fdata["GoodName"] = "Und";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("Consulta_G_neros","Und");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Und";

		$fdata["sourceSingle"] = "Und";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cad_prod.Und";

	
	
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


	$tdataconsulta_g_neros["Und"] = $fdata;
		$tdataconsulta_g_neros[".searchableFields"][] = "Und";
//	Marca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Marca";
	$fdata["GoodName"] = "Marca";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("Consulta_G_neros","Marca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Marca";

		$fdata["sourceSingle"] = "Marca";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cad_prod.Marca";

	
	
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


	$tdataconsulta_g_neros["Marca"] = $fdata;
		$tdataconsulta_g_neros[".searchableFields"][] = "Marca";
//	Valor_Para
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor_Para";
	$fdata["GoodName"] = "Valor_Para";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("Consulta_G_neros","Valor_Para");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor_Para";

		$fdata["sourceSingle"] = "Valor_Para";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cad_prod.Valor_Para";

	
	
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


	$tdataconsulta_g_neros["Valor_Para"] = $fdata;
		$tdataconsulta_g_neros[".searchableFields"][] = "Valor_Para";
//	Razão Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Razão Social";
	$fdata["GoodName"] = "Raz_o_Social";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("Consulta_G_neros","Raz_o_Social");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Razão Social";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fornecedores.`Razão Social`";

	
	
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


	$tdataconsulta_g_neros["Razão Social"] = $fdata;
		$tdataconsulta_g_neros[".searchableFields"][] = "Razão Social";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("Consulta_G_neros","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cad_prod.id";

	
	
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


	$tdataconsulta_g_neros["id"] = $fdata;
		$tdataconsulta_g_neros[".searchableFields"][] = "id";
//	Cod_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cod_prod";
	$fdata["GoodName"] = "Cod_prod";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("Consulta_G_neros","Cod_prod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cod_prod";

		$fdata["sourceSingle"] = "Cod_prod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cad_prod.Cod_prod";

	
	
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


	$tdataconsulta_g_neros["Cod_prod"] = $fdata;
		$tdataconsulta_g_neros[".searchableFields"][] = "Cod_prod";


$tables_data["Consulta Gêneros"]=&$tdataconsulta_g_neros;
$field_labels["Consulta_G_neros"] = &$fieldLabelsconsulta_g_neros;
$fieldToolTips["Consulta_G_neros"] = &$fieldToolTipsconsulta_g_neros;
$placeHolders["Consulta_G_neros"] = &$placeHoldersconsulta_g_neros;
$page_titles["Consulta_G_neros"] = &$pageTitlesconsulta_g_neros;


changeTextControlsToDate( "Consulta Gêneros" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Consulta Gêneros"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Consulta Gêneros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consulta_g_neros()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cad_prod.Nome,  cad_prod.valor,  cad_prod.Und,  cad_prod.Marca,  cad_prod.Valor_Para,  fornecedores.`Razão Social`,  cad_prod.id,  cad_prod.Cod_prod";
$proto0["m_strFrom"] = "FROM cad_prod  INNER JOIN fornecedores ON cad_prod.Fornecedor = fornecedores.CNPJ";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY cad_prod.Nome";
	
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
	"m_strName" => "Nome",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto6["m_sql"] = "cad_prod.Nome";
$proto6["m_srcTableName"] = "Consulta Gêneros";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto8["m_sql"] = "cad_prod.valor";
$proto8["m_srcTableName"] = "Consulta Gêneros";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Und",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto10["m_sql"] = "cad_prod.Und";
$proto10["m_srcTableName"] = "Consulta Gêneros";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Marca",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto12["m_sql"] = "cad_prod.Marca";
$proto12["m_srcTableName"] = "Consulta Gêneros";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Para",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto14["m_sql"] = "cad_prod.Valor_Para";
$proto14["m_srcTableName"] = "Consulta Gêneros";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Razão Social",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto16["m_sql"] = "fornecedores.`Razão Social`";
$proto16["m_srcTableName"] = "Consulta Gêneros";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto18["m_sql"] = "cad_prod.id";
$proto18["m_srcTableName"] = "Consulta Gêneros";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Cod_prod",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto20["m_sql"] = "cad_prod.Cod_prod";
$proto20["m_srcTableName"] = "Consulta Gêneros";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "cad_prod";
$proto23["m_srcTableName"] = "Consulta Gêneros";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "Cod_prod";
$proto23["m_columns"][] = "Nome";
$proto23["m_columns"][] = "valor";
$proto23["m_columns"][] = "Fornecedor";
$proto23["m_columns"][] = "Und";
$proto23["m_columns"][] = "Marca";
$proto23["m_columns"][] = "Valor_Para";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "cad_prod";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Consulta Gêneros";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "fornecedores";
$proto27["m_srcTableName"] = "Consulta Gêneros";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "CNPJ";
$proto27["m_columns"][] = "Razão Social";
$proto27["m_columns"][] = "Telefone Fixo";
$proto27["m_columns"][] = "Responsável";
$proto27["m_columns"][] = "Endereço";
$proto27["m_columns"][] = "Email";
$proto27["m_columns"][] = "Telefone Celular";
$proto27["m_columns"][] = "OBS";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN fornecedores ON cad_prod.Fornecedor = fornecedores.CNPJ";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Consulta Gêneros";
$proto28=array();
$proto28["m_sql"] = "fornecedores.CNPJ = cad_prod.Fornecedor";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= cad_prod.Fornecedor";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "Consulta Gêneros"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 1;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Consulta Gêneros";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consulta_g_neros = createSqlQuery_consulta_g_neros();


	
		;

								

$tdataconsulta_g_neros[".sqlquery"] = $queryData_consulta_g_neros;



$tdataconsulta_g_neros[".hasEvents"] = false;

?>