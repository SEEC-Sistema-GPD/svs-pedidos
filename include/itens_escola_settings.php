<?php
$tdataitens_escola = array();
$tdataitens_escola[".searchableFields"] = array();
$tdataitens_escola[".ShortName"] = "itens_escola";
$tdataitens_escola[".OwnerID"] = "cod";
$tdataitens_escola[".OriginalTable"] = "itens";


$tdataitens_escola[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataitens_escola[".originalPagesByType"] = $tdataitens_escola[".pagesByType"];
$tdataitens_escola[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataitens_escola[".originalPages"] = $tdataitens_escola[".pages"];
$tdataitens_escola[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataitens_escola[".originalDefaultPages"] = $tdataitens_escola[".defaultPages"];

//	field labels
$fieldLabelsitens_escola = array();
$fieldToolTipsitens_escola = array();
$pageTitlesitens_escola = array();
$placeHoldersitens_escola = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsitens_escola["Portuguese(Brazil)"] = array();
	$fieldToolTipsitens_escola["Portuguese(Brazil)"] = array();
	$placeHoldersitens_escola["Portuguese(Brazil)"] = array();
	$pageTitlesitens_escola["Portuguese(Brazil)"] = array();
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["cod"] = "Cod";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["cod"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["cod"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["cod_ped"] = "Cod Ped";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["cod_ped"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["cod_ped"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["genero"] = "Gênero";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["genero"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["genero"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["qtd"] = "Qtd";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["qtd"] = "(Use vírgual para fração)";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["qtd"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["valor"] = "Valor";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["valor"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["valor"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["total"] = "Total";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["total"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["total"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["cod_np"] = "Cod Np";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["cod_np"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["cod_np"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["resto"] = "Resto";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["resto"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["resto"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["Marca"] = "Marca";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["Marca"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["Marca"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["Valor_Para"] = "Valor Para";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["Valor_Para"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["Valor_Para"] = "";
	$fieldLabelsitens_escola["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsitens_escola["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersitens_escola["Portuguese(Brazil)"]["Nome"] = "";
	$pageTitlesitens_escola["Portuguese(Brazil)"]["list"] = "Itens";
	$pageTitlesitens_escola["Portuguese(Brazil)"]["print"] = "";
	if (count($fieldToolTipsitens_escola["Portuguese(Brazil)"]))
		$tdataitens_escola[".isUseToolTips"] = true;
}


	$tdataitens_escola[".NCSearch"] = true;



$tdataitens_escola[".shortTableName"] = "itens_escola";
$tdataitens_escola[".nSecOptions"] = 0;

$tdataitens_escola[".mainTableOwnerID"] = "cod";
$tdataitens_escola[".entityType"] = 1;
$tdataitens_escola[".connId"] = "pedidos_at_localhost";


$tdataitens_escola[".strOriginalTableName"] = "itens";

	



$tdataitens_escola[".showAddInPopup"] = false;

$tdataitens_escola[".showEditInPopup"] = false;

$tdataitens_escola[".showViewInPopup"] = false;

$tdataitens_escola[".listAjax"] = false;
//	temporary
//$tdataitens_escola[".listAjax"] = false;

	$tdataitens_escola[".audit"] = false;

	$tdataitens_escola[".locking"] = false;


$pages = $tdataitens_escola[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitens_escola[".edit"] = true;
	$tdataitens_escola[".afterEditAction"] = 1;
	$tdataitens_escola[".closePopupAfterEdit"] = 1;
	$tdataitens_escola[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitens_escola[".add"] = true;
$tdataitens_escola[".afterAddAction"] = 1;
$tdataitens_escola[".closePopupAfterAdd"] = 0;
$tdataitens_escola[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataitens_escola[".list"] = true;
}



$tdataitens_escola[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataitens_escola[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitens_escola[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitens_escola[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitens_escola[".printFriendly"] = true;
}



$tdataitens_escola[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitens_escola[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitens_escola[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitens_escola[".isUseAjaxSuggest"] = true;



								
																													

$tdataitens_escola[".ajaxCodeSnippetAdded"] = false;

$tdataitens_escola[".buttonsAdded"] = true;

$tdataitens_escola[".addPageEvents"] = true;

// use timepicker for search panel
$tdataitens_escola[".isUseTimeForSearch"] = false;


$tdataitens_escola[".badgeColor"] = "4682b4";


$tdataitens_escola[".allSearchFields"] = array();
$tdataitens_escola[".filterFields"] = array();
$tdataitens_escola[".requiredSearchFields"] = array();

$tdataitens_escola[".googleLikeFields"] = array();
$tdataitens_escola[".googleLikeFields"][] = "cod";
$tdataitens_escola[".googleLikeFields"][] = "cod_ped";
$tdataitens_escola[".googleLikeFields"][] = "genero";
$tdataitens_escola[".googleLikeFields"][] = "qtd";
$tdataitens_escola[".googleLikeFields"][] = "valor";
$tdataitens_escola[".googleLikeFields"][] = "total";
$tdataitens_escola[".googleLikeFields"][] = "cod_np";
$tdataitens_escola[".googleLikeFields"][] = "resto";
$tdataitens_escola[".googleLikeFields"][] = "Marca";
$tdataitens_escola[".googleLikeFields"][] = "Valor_Para";
$tdataitens_escola[".googleLikeFields"][] = "Nome";



$tdataitens_escola[".tableType"] = "list";

$tdataitens_escola[".printerPageOrientation"] = 0;
$tdataitens_escola[".nPrinterPageScale"] = 100;

$tdataitens_escola[".nPrinterSplitRecords"] = 40;

$tdataitens_escola[".geocodingEnabled"] = false;










$tdataitens_escola[".pageSize"] = 50;

$tdataitens_escola[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataitens_escola[".strOrderBy"] = $tstrOrderBy;

$tdataitens_escola[".orderindexes"] = array();


$tdataitens_escola[".sqlHead"] = "SELECT itens.cod,  itens.cod_ped,  itens.genero,  itens.qtd,  itens.valor,  itens.total,  itens.cod_np,  itens.resto,  itens.Marca,  cad_prod.Valor_Para,  cad_prod.Nome";
$tdataitens_escola[".sqlFrom"] = "FROM itens  INNER JOIN cad_prod ON itens.genero = cad_prod.id";
$tdataitens_escola[".sqlWhereExpr"] = "";
$tdataitens_escola[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitens_escola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitens_escola[".arrGroupsPerPage"] = $arrGPP;

$tdataitens_escola[".highlightSearchResults"] = true;

$tableKeysitens_escola = array();
$tableKeysitens_escola[] = "cod";
$tdataitens_escola[".Keys"] = $tableKeysitens_escola;


$tdataitens_escola[".hideMobileList"] = array();




//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_escola","cod");
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


	$tdataitens_escola["cod"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "cod";
//	cod_ped
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cod_ped";
	$fdata["GoodName"] = "cod_ped";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_escola","cod_ped");
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


	$tdataitens_escola["cod_ped"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "cod_ped";
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_escola","genero");
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
	$edata["LookupTable"] = "Consulta Gêneros";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"valor", 'lookupF'=>"valor");
	$edata["autoCompleteFields"][] = array('masterF'=>"Marca", 'lookupF'=>"Marca");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

				$edata["LookupWhere"] = "Fornecedor = ':master.cnpj_fornecedor'";


	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataitens_escola["genero"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "genero";
//	qtd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "qtd";
	$fdata["GoodName"] = "qtd";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_escola","qtd");
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "genero_event", "type" => "blur" );
	$edata["fieldEvents"] = $eventsData;




		$edata["IsRequired"] = true;

	
	
	
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


	$tdataitens_escola["qtd"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "qtd";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_escola","valor");
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


	$tdataitens_escola["valor"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "valor";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_escola","total");
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


	$tdataitens_escola["total"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "total";
//	cod_np
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cod_np";
	$fdata["GoodName"] = "cod_np";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_escola","cod_np");
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


	$tdataitens_escola["cod_np"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "cod_np";
//	resto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "resto";
	$fdata["GoodName"] = "resto";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_escola","resto");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "resto";

		$fdata["sourceSingle"] = "resto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itens.resto";

	
	
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


	$tdataitens_escola["resto"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "resto";
//	Marca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Marca";
	$fdata["GoodName"] = "Marca";
	$fdata["ownerTable"] = "itens";
	$fdata["Label"] = GetFieldLabel("itens_escola","Marca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Marca";

		$fdata["sourceSingle"] = "Marca";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itens.Marca";

	
	
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


	$tdataitens_escola["Marca"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "Marca";
//	Valor_Para
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Valor_Para";
	$fdata["GoodName"] = "Valor_Para";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("itens_escola","Valor_Para");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor_Para";

	
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


	$tdataitens_escola["Valor_Para"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "Valor_Para";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "cad_prod";
	$fdata["Label"] = GetFieldLabel("itens_escola","Nome");
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


	$tdataitens_escola["Nome"] = $fdata;
		$tdataitens_escola[".searchableFields"][] = "Nome";


$tables_data["itens_escola"]=&$tdataitens_escola;
$field_labels["itens_escola"] = &$fieldLabelsitens_escola;
$fieldToolTips["itens_escola"] = &$fieldToolTipsitens_escola;
$placeHolders["itens_escola"] = &$placeHoldersitens_escola;
$page_titles["itens_escola"] = &$pageTitlesitens_escola;


changeTextControlsToDate( "itens_escola" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["itens_escola"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["itens_escola"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pedidos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Pedidos_escola";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pedidos_escola";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["itens_escola"][0] = $masterParams;
				$masterTablesData["itens_escola"][0]["masterKeys"] = array();
	$masterTablesData["itens_escola"][0]["masterKeys"][]="cod";
				$masterTablesData["itens_escola"][0]["masterKeys"][]="Cod_np";
				$masterTablesData["itens_escola"][0]["detailKeys"] = array();
	$masterTablesData["itens_escola"][0]["detailKeys"][]="cod_ped";
				$masterTablesData["itens_escola"][0]["detailKeys"][]="cod_np";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_itens_escola()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "itens.cod,  itens.cod_ped,  itens.genero,  itens.qtd,  itens.valor,  itens.total,  itens.cod_np,  itens.resto,  itens.Marca,  cad_prod.Valor_Para,  cad_prod.Nome";
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
	"m_srcTableName" => "itens_escola"
));

$proto6["m_sql"] = "itens.cod";
$proto6["m_srcTableName"] = "itens_escola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_ped",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_escola"
));

$proto8["m_sql"] = "itens.cod_ped";
$proto8["m_srcTableName"] = "itens_escola";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_escola"
));

$proto10["m_sql"] = "itens.genero";
$proto10["m_srcTableName"] = "itens_escola";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "qtd",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_escola"
));

$proto12["m_sql"] = "itens.qtd";
$proto12["m_srcTableName"] = "itens_escola";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_escola"
));

$proto14["m_sql"] = "itens.valor";
$proto14["m_srcTableName"] = "itens_escola";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_escola"
));

$proto16["m_sql"] = "itens.total";
$proto16["m_srcTableName"] = "itens_escola";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_np",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_escola"
));

$proto18["m_sql"] = "itens.cod_np";
$proto18["m_srcTableName"] = "itens_escola";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "resto",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_escola"
));

$proto20["m_sql"] = "itens.resto";
$proto20["m_srcTableName"] = "itens_escola";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Marca",
	"m_strTable" => "itens",
	"m_srcTableName" => "itens_escola"
));

$proto22["m_sql"] = "itens.Marca";
$proto22["m_srcTableName"] = "itens_escola";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Para",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "itens_escola"
));

$proto24["m_sql"] = "cad_prod.Valor_Para";
$proto24["m_srcTableName"] = "itens_escola";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "itens_escola"
));

$proto26["m_sql"] = "cad_prod.Nome";
$proto26["m_srcTableName"] = "itens_escola";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "itens";
$proto29["m_srcTableName"] = "itens_escola";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cod";
$proto29["m_columns"][] = "cod_ped";
$proto29["m_columns"][] = "genero";
$proto29["m_columns"][] = "qtd";
$proto29["m_columns"][] = "valor";
$proto29["m_columns"][] = "total";
$proto29["m_columns"][] = "cod_np";
$proto29["m_columns"][] = "resto";
$proto29["m_columns"][] = "Marca";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "itens";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "itens_escola";
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
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "cad_prod";
$proto33["m_srcTableName"] = "itens_escola";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "Cod_prod";
$proto33["m_columns"][] = "Nome";
$proto33["m_columns"][] = "valor";
$proto33["m_columns"][] = "Fornecedor";
$proto33["m_columns"][] = "Und";
$proto33["m_columns"][] = "Marca";
$proto33["m_columns"][] = "Valor_Para";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN cad_prod ON itens.genero = cad_prod.id";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "itens_escola";
$proto34=array();
$proto34["m_sql"] = "cad_prod.id = itens.genero";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cad_prod",
	"m_srcTableName" => "itens_escola"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= itens.genero";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="itens_escola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_itens_escola = createSqlQuery_itens_escola();


	
		;

											

$tdataitens_escola[".sqlquery"] = $queryData_itens_escola;



include_once(getabspath("include/itens_escola_events.php"));
$tdataitens_escola[".hasEvents"] = true;

?>