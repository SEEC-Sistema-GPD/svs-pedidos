<?php
$tdataitens_view = array();
$tdataitens_view[".searchableFields"] = array();
$tdataitens_view[".ShortName"] = "itens_view";
$tdataitens_view[".OwnerID"] = "";
$tdataitens_view[".OriginalTable"] = "itens";


$tdataitens_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataitens_view[".originalPagesByType"] = $tdataitens_view[".pagesByType"];
$tdataitens_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataitens_view[".originalPages"] = $tdataitens_view[".pages"];
$tdataitens_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataitens_view[".originalDefaultPages"] = $tdataitens_view[".defaultPages"];

//	field labels
$fieldLabelsitens_view = array();
$fieldToolTipsitens_view = array();
$pageTitlesitens_view = array();
$placeHoldersitens_view = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsitens_view["Portuguese(Brazil)"] = array();
	$fieldToolTipsitens_view["Portuguese(Brazil)"] = array();
	$placeHoldersitens_view["Portuguese(Brazil)"] = array();
	$pageTitlesitens_view["Portuguese(Brazil)"] = array();
	$fieldLabelsitens_view["Portuguese(Brazil)"]["cod"] = "Cod";
	$fieldToolTipsitens_view["Portuguese(Brazil)"]["cod"] = "";
	$placeHoldersitens_view["Portuguese(Brazil)"]["cod"] = "";
	$fieldLabelsitens_view["Portuguese(Brazil)"]["cod_ped"] = "Cod Ped";
	$fieldToolTipsitens_view["Portuguese(Brazil)"]["cod_ped"] = "";
	$placeHoldersitens_view["Portuguese(Brazil)"]["cod_ped"] = "";
	$fieldLabelsitens_view["Portuguese(Brazil)"]["genero"] = "Gênero";
	$fieldToolTipsitens_view["Portuguese(Brazil)"]["genero"] = "";
	$placeHoldersitens_view["Portuguese(Brazil)"]["genero"] = "";
	$fieldLabelsitens_view["Portuguese(Brazil)"]["qtd"] = "Qtd";
	$fieldToolTipsitens_view["Portuguese(Brazil)"]["qtd"] = "";
	$placeHoldersitens_view["Portuguese(Brazil)"]["qtd"] = "";
	$fieldLabelsitens_view["Portuguese(Brazil)"]["valor"] = "Valor";
	$fieldToolTipsitens_view["Portuguese(Brazil)"]["valor"] = "";
	$placeHoldersitens_view["Portuguese(Brazil)"]["valor"] = "";
	$fieldLabelsitens_view["Portuguese(Brazil)"]["total"] = "Total";
	$fieldToolTipsitens_view["Portuguese(Brazil)"]["total"] = "";
	$placeHoldersitens_view["Portuguese(Brazil)"]["total"] = "";
	$fieldLabelsitens_view["Portuguese(Brazil)"]["cod_np"] = "Cod Np";
	$fieldToolTipsitens_view["Portuguese(Brazil)"]["cod_np"] = "";
	$placeHoldersitens_view["Portuguese(Brazil)"]["cod_np"] = "";
	$fieldLabelsitens_view["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsitens_view["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersitens_view["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsitens_view["Portuguese(Brazil)"]["Und"] = "Und";
	$fieldToolTipsitens_view["Portuguese(Brazil)"]["Und"] = "";
	$placeHoldersitens_view["Portuguese(Brazil)"]["Und"] = "";
	$pageTitlesitens_view["Portuguese(Brazil)"]["print"] = "";
	$pageTitlesitens_view["Portuguese(Brazil)"]["search"] = "Itens, Busca Avancada";
	$pageTitlesitens_view["Portuguese(Brazil)"]["list"] = "Itens";
	if (count($fieldToolTipsitens_view["Portuguese(Brazil)"]))
		$tdataitens_view[".isUseToolTips"] = true;
}


	$tdataitens_view[".NCSearch"] = true;



$tdataitens_view[".shortTableName"] = "itens_view";
$tdataitens_view[".nSecOptions"] = 0;

$tdataitens_view[".mainTableOwnerID"] = "";
$tdataitens_view[".entityType"] = 1;
$tdataitens_view[".connId"] = "pedidos_at_localhost";


$tdataitens_view[".strOriginalTableName"] = "itens";

	



$tdataitens_view[".showAddInPopup"] = false;

$tdataitens_view[".showEditInPopup"] = false;

$tdataitens_view[".showViewInPopup"] = false;

$tdataitens_view[".listAjax"] = false;
//	temporary
//$tdataitens_view[".listAjax"] = false;

	$tdataitens_view[".audit"] = false;

	$tdataitens_view[".locking"] = false;


$pages = $tdataitens_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitens_view[".edit"] = true;
	$tdataitens_view[".afterEditAction"] = 1;
	$tdataitens_view[".closePopupAfterEdit"] = 1;
	$tdataitens_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitens_view[".add"] = true;
$tdataitens_view[".afterAddAction"] = 1;
$tdataitens_view[".closePopupAfterAdd"] = 1;
$tdataitens_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitens_view[".list"] = true;
}



$tdataitens_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataitens_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitens_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitens_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitens_view[".printFriendly"] = true;
}



$tdataitens_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitens_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitens_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitens_view[".isUseAjaxSuggest"] = true;



																																				

$tdataitens_view[".ajaxCodeSnippetAdded"] = false;

$tdataitens_view[".buttonsAdded"] = false;

$tdataitens_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitens_view[".isUseTimeForSearch"] = false;


$tdataitens_view[".badgeColor"] = "7b68ee";


$tdataitens_view[".allSearchFields"] = array();
$tdataitens_view[".filterFields"] = array();
$tdataitens_view[".requiredSearchFields"] = array();

$tdataitens_view[".googleLikeFields"] = array();
$tdataitens_view[".googleLikeFields"][] = "cod";
$tdataitens_view[".googleLikeFields"][] = "cod_ped";
$tdataitens_view[".googleLikeFields"][] = "genero";
$tdataitens_view[".googleLikeFields"][] = "qtd";
$tdataitens_view[".googleLikeFields"][] = "valor";
$tdataitens_view[".googleLikeFields"][] = "total";
$tdataitens_view[".googleLikeFields"][] = "cod_np";
$tdataitens_view[".googleLikeFields"][] = "Nome";
$tdataitens_view[".googleLikeFields"][] = "Und";



$tdataitens_view[".tableType"] = "list";

$tdataitens_view[".printerPageOrientation"] = 0;
$tdataitens_view[".nPrinterPageScale"] = 100;

$tdataitens_view[".nPrinterSplitRecords"] = 40;

$tdataitens_view[".geocodingEnabled"] = false;










$tdataitens_view[".pageSize"] = 20;

$tdataitens_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataitens_view[".strOrderBy"] = $tstrOrderBy;

$tdataitens_view[".orderindexes"] = array();


$tdataitens_view[".sqlHead"] = "SELECT itens.cod,  itens.cod_ped,  itens.genero,  itens.qtd,  itens.valor,  itens.total,  itens.cod_np,  cad_prod.Nome,  cad_prod.Und";
$tdataitens_view[".sqlFrom"] = "FROM itens  INNER JOIN cad_prod ON itens.genero = cad_prod.id";
$tdataitens_view[".sqlWhereExpr"] = "";
$tdataitens_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitens_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitens_view[".arrGroupsPerPage"] = $arrGPP;

$tdataitens_view[".highlightSearchResults"] = true;

$tableKeysitens_view = array();
$tableKeysitens_view[] = "cod";
$tdataitens_view[".Keys"] = $tableKeysitens_view;


$tdataitens_view[".hideMobileList"] = array();




//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_view","cod");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cod";

		$fdata["sourceSingle"] = "cod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itens.cod";

	
	
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


	$tdataitens_view["cod"] = $fdata;
		$tdataitens_view[".searchableFields"][] = "cod";
//	cod_ped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cod_ped";
	$fdata["GoodName"] = "cod_ped";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_view","cod_ped");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cod_ped";

		$fdata["sourceSingle"] = "cod_ped";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itens.cod_ped";

	
	
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


	$tdataitens_view["cod_ped"] = $fdata;
		$tdataitens_view[".searchableFields"][] = "cod_ped";
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_view","genero");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "genero";

		$fdata["sourceSingle"] = "genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itens.genero";

	
	
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
	$edata["LookupTable"] = "cad_prod";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

				$edata["LookupWhere"] = "Fornecedor = ':master.cnpj_fornecedor'";


	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdataitens_view["genero"] = $fdata;
		$tdataitens_view[".searchableFields"][] = "genero";
//	qtd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "qtd";
	$fdata["GoodName"] = "qtd";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_view","qtd");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "qtd";

		$fdata["sourceSingle"] = "qtd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itens.qtd";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=32";

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


	$tdataitens_view["qtd"] = $fdata;
		$tdataitens_view[".searchableFields"][] = "qtd";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_view","valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor";

		$fdata["sourceSingle"] = "valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itens.valor";

	
	
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


	$tdataitens_view["valor"] = $fdata;
		$tdataitens_view[".searchableFields"][] = "valor";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_view","total");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "total";

		$fdata["sourceSingle"] = "total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itens.total";

	
	
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


	$tdataitens_view["total"] = $fdata;
		$tdataitens_view[".searchableFields"][] = "total";
//	cod_np
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cod_np";
	$fdata["GoodName"] = "cod_np";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_view","cod_np");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cod_np";

		$fdata["sourceSingle"] = "cod_np";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itens.cod_np";

	
	
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


	$tdataitens_view["cod_np"] = $fdata;
		$tdataitens_view[".searchableFields"][] = "cod_np";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("itens_view","Nome");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nome";

	
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


	$tdataitens_view["Nome"] = $fdata;
		$tdataitens_view[".searchableFields"][] = "Nome";
//	Und
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Und";
	$fdata["GoodName"] = "Und";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("itens_view","Und");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Und";

	
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


	$tdataitens_view["Und"] = $fdata;
		$tdataitens_view[".searchableFields"][] = "Und";


$tables_data["itens_view"]=&$tdataitens_view;
$field_labels["itens_view"] = &$fieldLabelsitens_view;
$fieldToolTips["itens_view"] = &$fieldToolTipsitens_view;
$placeHolders["itens_view"] = &$placeHoldersitens_view;
$page_titles["itens_view"] = &$pageTitlesitens_view;


changeTextControlsToDate( "itens_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["itens_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["itens_view"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pedidos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pedidos_view";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pedidos_view";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["itens_view"][0] = $masterParams;
				$masterTablesData["itens_view"][0]["masterKeys"] = array();
	$masterTablesData["itens_view"][0]["masterKeys"][]="cod";
				$masterTablesData["itens_view"][0]["detailKeys"] = array();
	$masterTablesData["itens_view"][0]["detailKeys"][]="cod_ped";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_itens_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "itens.cod,  itens.cod_ped,  itens.genero,  itens.qtd,  itens.valor,  itens.total,  itens.cod_np,  cad_prod.Nome,  cad_prod.Und";
$proto0["m_strFrom"] = "FROM itens  INNER JOIN cad_prod ON itens.genero = cad_prod.id";
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
	"m_strName" => "cod",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_view"
));

$proto6["m_sql"] = "itens.cod";
$proto6["m_srcTableName"] = "itens_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_ped",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_view"
));

$proto8["m_sql"] = "itens.cod_ped";
$proto8["m_srcTableName"] = "itens_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_view"
));

$proto10["m_sql"] = "itens.genero";
$proto10["m_srcTableName"] = "itens_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "qtd",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_view"
));

$proto12["m_sql"] = "itens.qtd";
$proto12["m_srcTableName"] = "itens_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_view"
));

$proto14["m_sql"] = "itens.valor";
$proto14["m_srcTableName"] = "itens_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_view"
));

$proto16["m_sql"] = "itens.total";
$proto16["m_srcTableName"] = "itens_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_np",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_view"
));

$proto18["m_sql"] = "itens.cod_np";
$proto18["m_srcTableName"] = "itens_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "itens_view"
));

$proto20["m_sql"] = "cad_prod.Nome";
$proto20["m_srcTableName"] = "itens_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Und",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "itens_view"
));

$proto22["m_sql"] = "cad_prod.Und";
$proto22["m_srcTableName"] = "itens_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "itens";
$proto25["m_srcTableName"] = "itens_view";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cod";
$proto25["m_columns"][] = "cod_ped";
$proto25["m_columns"][] = "genero";
$proto25["m_columns"][] = "qtd";
$proto25["m_columns"][] = "valor";
$proto25["m_columns"][] = "total";
$proto25["m_columns"][] = "cod_np";
$proto25["m_columns"][] = "resto";
$proto25["m_columns"][] = "Marca";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "itens";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "itens_view";
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
$proto29["m_strName"] = "cad_prod";
$proto29["m_srcTableName"] = "itens_view";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "Cod_prod";
$proto29["m_columns"][] = "Nome";
$proto29["m_columns"][] = "valor";
$proto29["m_columns"][] = "Fornecedor";
$proto29["m_columns"][] = "Und";
$proto29["m_columns"][] = "Marca";
$proto29["m_columns"][] = "Valor_Para";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN cad_prod ON itens.genero = cad_prod.id";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "itens_view";
$proto30=array();
$proto30["m_sql"] = "cad_prod.id = itens.genero";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "itens_view"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= itens.genero";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="itens_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_itens_view = createSqlQuery_itens_view();


	
		;

									

$tdataitens_view[".sqlquery"] = $queryData_itens_view;



include_once(getabspath("include/itens_view_events.php"));
$tdataitens_view[".hasEvents"] = true;

?>