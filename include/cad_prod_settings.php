<?php
$tdatacad_prod = array();
$tdatacad_prod[".searchableFields"] = array();
$tdatacad_prod[".ShortName"] = "cad_prod";
$tdatacad_prod[".OwnerID"] = "";
$tdatacad_prod[".OriginalTable"] = "cad_prod";


$tdatacad_prod[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacad_prod[".originalPagesByType"] = $tdatacad_prod[".pagesByType"];
$tdatacad_prod[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacad_prod[".originalPages"] = $tdatacad_prod[".pages"];
$tdatacad_prod[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacad_prod[".originalDefaultPages"] = $tdatacad_prod[".defaultPages"];

//	field labels
$fieldLabelscad_prod = array();
$fieldToolTipscad_prod = array();
$pageTitlescad_prod = array();
$placeHolderscad_prod = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscad_prod["Portuguese(Brazil)"] = array();
	$fieldToolTipscad_prod["Portuguese(Brazil)"] = array();
	$placeHolderscad_prod["Portuguese(Brazil)"] = array();
	$pageTitlescad_prod["Portuguese(Brazil)"] = array();
	$fieldLabelscad_prod["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipscad_prod["Portuguese(Brazil)"]["id"] = "";
	$placeHolderscad_prod["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelscad_prod["Portuguese(Brazil)"]["Cod_prod"] = "Código";
	$fieldToolTipscad_prod["Portuguese(Brazil)"]["Cod_prod"] = "";
	$placeHolderscad_prod["Portuguese(Brazil)"]["Cod_prod"] = "";
	$fieldLabelscad_prod["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipscad_prod["Portuguese(Brazil)"]["Nome"] = "";
	$placeHolderscad_prod["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelscad_prod["Portuguese(Brazil)"]["valor"] = "Valor";
	$fieldToolTipscad_prod["Portuguese(Brazil)"]["valor"] = "";
	$placeHolderscad_prod["Portuguese(Brazil)"]["valor"] = "";
	$fieldLabelscad_prod["Portuguese(Brazil)"]["Fornecedor"] = "Fornecedor";
	$fieldToolTipscad_prod["Portuguese(Brazil)"]["Fornecedor"] = "";
	$placeHolderscad_prod["Portuguese(Brazil)"]["Fornecedor"] = "";
	$fieldLabelscad_prod["Portuguese(Brazil)"]["Und"] = "Und";
	$fieldToolTipscad_prod["Portuguese(Brazil)"]["Und"] = "";
	$placeHolderscad_prod["Portuguese(Brazil)"]["Und"] = "";
	$fieldLabelscad_prod["Portuguese(Brazil)"]["Marca"] = "Marca";
	$fieldToolTipscad_prod["Portuguese(Brazil)"]["Marca"] = "";
	$placeHolderscad_prod["Portuguese(Brazil)"]["Marca"] = "";
	$fieldLabelscad_prod["Portuguese(Brazil)"]["Raz_o_Social"] = "Razão Social";
	$fieldToolTipscad_prod["Portuguese(Brazil)"]["Raz_o_Social"] = "";
	$placeHolderscad_prod["Portuguese(Brazil)"]["Raz_o_Social"] = "";
	$fieldLabelscad_prod["Portuguese(Brazil)"]["Valor_Para"] = "Preço Para";
	$fieldToolTipscad_prod["Portuguese(Brazil)"]["Valor_Para"] = "";
	$placeHolderscad_prod["Portuguese(Brazil)"]["Valor_Para"] = "";
	$pageTitlescad_prod["Portuguese(Brazil)"]["list"] = "Cadastro de  Produtos";
	$pageTitlescad_prod["Portuguese(Brazil)"]["print"] = "";
	if (count($fieldToolTipscad_prod["Portuguese(Brazil)"]))
		$tdatacad_prod[".isUseToolTips"] = true;
}


	$tdatacad_prod[".NCSearch"] = true;



$tdatacad_prod[".shortTableName"] = "cad_prod";
$tdatacad_prod[".nSecOptions"] = 0;

$tdatacad_prod[".mainTableOwnerID"] = "";
$tdatacad_prod[".entityType"] = 0;
$tdatacad_prod[".connId"] = "pedidos_at_localhost";


$tdatacad_prod[".strOriginalTableName"] = "cad_prod";

	



$tdatacad_prod[".showAddInPopup"] = false;

$tdatacad_prod[".showEditInPopup"] = false;

$tdatacad_prod[".showViewInPopup"] = false;

$tdatacad_prod[".listAjax"] = false;
//	temporary
//$tdatacad_prod[".listAjax"] = false;

	$tdatacad_prod[".audit"] = false;

	$tdatacad_prod[".locking"] = false;


$pages = $tdatacad_prod[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacad_prod[".edit"] = true;
	$tdatacad_prod[".afterEditAction"] = 1;
	$tdatacad_prod[".closePopupAfterEdit"] = 1;
	$tdatacad_prod[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacad_prod[".add"] = true;
$tdatacad_prod[".afterAddAction"] = 1;
$tdatacad_prod[".closePopupAfterAdd"] = 1;
$tdatacad_prod[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatacad_prod[".list"] = true;
}



$tdatacad_prod[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacad_prod[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacad_prod[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacad_prod[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacad_prod[".printFriendly"] = true;
}



$tdatacad_prod[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacad_prod[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacad_prod[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacad_prod[".isUseAjaxSuggest"] = true;



																																				

$tdatacad_prod[".ajaxCodeSnippetAdded"] = false;

$tdatacad_prod[".buttonsAdded"] = false;

$tdatacad_prod[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacad_prod[".isUseTimeForSearch"] = false;


$tdatacad_prod[".badgeColor"] = "1e90ff";


$tdatacad_prod[".allSearchFields"] = array();
$tdatacad_prod[".filterFields"] = array();
$tdatacad_prod[".requiredSearchFields"] = array();

$tdatacad_prod[".googleLikeFields"] = array();
$tdatacad_prod[".googleLikeFields"][] = "id";
$tdatacad_prod[".googleLikeFields"][] = "Cod_prod";
$tdatacad_prod[".googleLikeFields"][] = "Nome";
$tdatacad_prod[".googleLikeFields"][] = "valor";
$tdatacad_prod[".googleLikeFields"][] = "Fornecedor";
$tdatacad_prod[".googleLikeFields"][] = "Und";
$tdatacad_prod[".googleLikeFields"][] = "Marca";
$tdatacad_prod[".googleLikeFields"][] = "Razão Social";
$tdatacad_prod[".googleLikeFields"][] = "Valor_Para";



$tdatacad_prod[".tableType"] = "list";

$tdatacad_prod[".printerPageOrientation"] = 0;
$tdatacad_prod[".nPrinterPageScale"] = 100;

$tdatacad_prod[".nPrinterSplitRecords"] = 40;

$tdatacad_prod[".geocodingEnabled"] = false;




$tdatacad_prod[".isDisplayLoading"] = true;






$tdatacad_prod[".pageSize"] = 50;

$tdatacad_prod[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacad_prod[".strOrderBy"] = $tstrOrderBy;

$tdatacad_prod[".orderindexes"] = array();


$tdatacad_prod[".sqlHead"] = "SELECT cad_prod.id,  cad_prod.Cod_prod,  cad_prod.Nome,  cad_prod.valor,  cad_prod.Fornecedor,  cad_prod.Und,  cad_prod.Marca,  fornecedores.`Razão Social`,  cad_prod.Valor_Para";
$tdatacad_prod[".sqlFrom"] = "FROM cad_prod  INNER JOIN fornecedores ON cad_prod.Fornecedor = fornecedores.CNPJ";
$tdatacad_prod[".sqlWhereExpr"] = "";
$tdatacad_prod[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacad_prod[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacad_prod[".arrGroupsPerPage"] = $arrGPP;

$tdatacad_prod[".highlightSearchResults"] = true;

$tableKeyscad_prod = array();
$tableKeyscad_prod[] = "id";
$tableKeyscad_prod[] = "Nome";
$tableKeyscad_prod[] = "Fornecedor";
$tdatacad_prod[".Keys"] = $tableKeyscad_prod;


$tdatacad_prod[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("cad_prod","id");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatacad_prod["id"] = $fdata;
		$tdatacad_prod[".searchableFields"][] = "id";
//	Cod_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cod_prod";
	$fdata["GoodName"] = "Cod_prod";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("cad_prod","Cod_prod");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatacad_prod["Cod_prod"] = $fdata;
		$tdatacad_prod[".searchableFields"][] = "Cod_prod";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("cad_prod","Nome");
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


	$tdatacad_prod["Nome"] = $fdata;
		$tdatacad_prod[".searchableFields"][] = "Nome";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("cad_prod","valor");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatacad_prod["valor"] = $fdata;
		$tdatacad_prod[".searchableFields"][] = "valor";
//	Fornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fornecedor";
	$fdata["GoodName"] = "Fornecedor";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("cad_prod","Fornecedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fornecedor";

		$fdata["sourceSingle"] = "Fornecedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cad_prod.Fornecedor";

	
	
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


	$tdatacad_prod["Fornecedor"] = $fdata;
		$tdatacad_prod[".searchableFields"][] = "Fornecedor";
//	Und
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Und";
	$fdata["GoodName"] = "Und";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("cad_prod","Und");
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacad_prod["Und"] = $fdata;
		$tdatacad_prod[".searchableFields"][] = "Und";
//	Marca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Marca";
	$fdata["GoodName"] = "Marca";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("cad_prod","Marca");
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


	$tdatacad_prod["Marca"] = $fdata;
		$tdatacad_prod[".searchableFields"][] = "Marca";
//	Razão Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Razão Social";
	$fdata["GoodName"] = "Raz_o_Social";
	$fdata["ownerTable"] = "fornecedores";
	$fdata["Label"] = GetFieldLabel("cad_prod","Raz_o_Social");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatacad_prod["Razão Social"] = $fdata;
		$tdatacad_prod[".searchableFields"][] = "Razão Social";
//	Valor_Para
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Valor_Para";
	$fdata["GoodName"] = "Valor_Para";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("cad_prod","Valor_Para");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "direcs";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nom_direc";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom_direc";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


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


	$tdatacad_prod["Valor_Para"] = $fdata;
		$tdatacad_prod[".searchableFields"][] = "Valor_Para";


$tables_data["cad_prod"]=&$tdatacad_prod;
$field_labels["cad_prod"] = &$fieldLabelscad_prod;
$fieldToolTips["cad_prod"] = &$fieldToolTipscad_prod;
$placeHolders["cad_prod"] = &$placeHolderscad_prod;
$page_titles["cad_prod"] = &$pageTitlescad_prod;


changeTextControlsToDate( "cad_prod" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cad_prod"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cad_prod"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="fornecedores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="fornecedores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fornecedores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cad_prod"][0] = $masterParams;
				$masterTablesData["cad_prod"][0]["masterKeys"] = array();
	$masterTablesData["cad_prod"][0]["masterKeys"][]="CNPJ";
				$masterTablesData["cad_prod"][0]["detailKeys"] = array();
	$masterTablesData["cad_prod"][0]["detailKeys"][]="Fornecedor";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cad_prod()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cad_prod.id,  cad_prod.Cod_prod,  cad_prod.Nome,  cad_prod.valor,  cad_prod.Fornecedor,  cad_prod.Und,  cad_prod.Marca,  fornecedores.`Razão Social`,  cad_prod.Valor_Para";
$proto0["m_strFrom"] = "FROM cad_prod  INNER JOIN fornecedores ON cad_prod.Fornecedor = fornecedores.CNPJ";
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
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "cad_prod"
));

$proto6["m_sql"] = "cad_prod.id";
$proto6["m_srcTableName"] = "cad_prod";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cod_prod",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "cad_prod"
));

$proto8["m_sql"] = "cad_prod.Cod_prod";
$proto8["m_srcTableName"] = "cad_prod";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "cad_prod"
));

$proto10["m_sql"] = "cad_prod.Nome";
$proto10["m_srcTableName"] = "cad_prod";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "cad_prod"
));

$proto12["m_sql"] = "cad_prod.valor";
$proto12["m_srcTableName"] = "cad_prod";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fornecedor",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "cad_prod"
));

$proto14["m_sql"] = "cad_prod.Fornecedor";
$proto14["m_srcTableName"] = "cad_prod";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Und",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "cad_prod"
));

$proto16["m_sql"] = "cad_prod.Und";
$proto16["m_srcTableName"] = "cad_prod";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Marca",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "cad_prod"
));

$proto18["m_sql"] = "cad_prod.Marca";
$proto18["m_srcTableName"] = "cad_prod";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Razão Social",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "cad_prod"
));

$proto20["m_sql"] = "fornecedores.`Razão Social`";
$proto20["m_srcTableName"] = "cad_prod";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Para",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "cad_prod"
));

$proto22["m_sql"] = "cad_prod.Valor_Para";
$proto22["m_srcTableName"] = "cad_prod";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cad_prod";
$proto25["m_srcTableName"] = "cad_prod";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "Cod_prod";
$proto25["m_columns"][] = "Nome";
$proto25["m_columns"][] = "valor";
$proto25["m_columns"][] = "Fornecedor";
$proto25["m_columns"][] = "Und";
$proto25["m_columns"][] = "Marca";
$proto25["m_columns"][] = "Valor_Para";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cad_prod";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cad_prod";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "fornecedores";
$proto29["m_srcTableName"] = "cad_prod";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "CNPJ";
$proto29["m_columns"][] = "Razão Social";
$proto29["m_columns"][] = "Telefone Fixo";
$proto29["m_columns"][] = "Responsável";
$proto29["m_columns"][] = "Endereço";
$proto29["m_columns"][] = "Email";
$proto29["m_columns"][] = "Telefone Celular";
$proto29["m_columns"][] = "OBS";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN fornecedores ON cad_prod.Fornecedor = fornecedores.CNPJ";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "cad_prod";
$proto30=array();
$proto30["m_sql"] = "fornecedores.CNPJ = cad_prod.Fornecedor";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "cad_prod"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= cad_prod.Fornecedor";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cad_prod";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cad_prod = createSqlQuery_cad_prod();


	
		;

									

$tdatacad_prod[".sqlquery"] = $queryData_cad_prod;



$tdatacad_prod[".hasEvents"] = false;

?>