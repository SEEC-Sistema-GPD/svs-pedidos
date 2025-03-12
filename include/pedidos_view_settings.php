<?php
$tdatapedidos_view = array();
$tdatapedidos_view[".searchableFields"] = array();
$tdatapedidos_view[".ShortName"] = "pedidos_view";
$tdatapedidos_view[".OwnerID"] = "cnpj_fornecedor";
$tdatapedidos_view[".OriginalTable"] = "pedidos";


$tdatapedidos_view[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapedidos_view[".originalPagesByType"] = $tdatapedidos_view[".pagesByType"];
$tdatapedidos_view[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapedidos_view[".originalPages"] = $tdatapedidos_view[".pages"];
$tdatapedidos_view[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapedidos_view[".originalDefaultPages"] = $tdatapedidos_view[".defaultPages"];

//	field labels
$fieldLabelspedidos_view = array();
$fieldToolTipspedidos_view = array();
$pageTitlespedidos_view = array();
$placeHolderspedidos_view = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspedidos_view["Portuguese(Brazil)"] = array();
	$fieldToolTipspedidos_view["Portuguese(Brazil)"] = array();
	$placeHolderspedidos_view["Portuguese(Brazil)"] = array();
	$pageTitlespedidos_view["Portuguese(Brazil)"] = array();
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["cod"] = "Cod";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["cod"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["cod"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["status"] = "Status";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["status"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["status"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["Data_cad"] = "Data";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["Data_cad"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["Data_cad"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["Parcela"] = "Parcela";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["Parcela"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["Parcela"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["Nome"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["Exec_cio"] = "Execício";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["Exec_cio"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["Exec_cio"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["cnpj_fornecedor"] = "Cnpj Fornecedor";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["cnpj_fornecedor"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["cnpj_fornecedor"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["Num_NP"] = " NP";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["Num_NP"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["Num_NP"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["Drae"] = "Drae";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["Drae"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["Drae"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["Municipio"] = "Municipio";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["Municipio"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["Municipio"] = "";
	$fieldLabelspedidos_view["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipspedidos_view["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHolderspedidos_view["Portuguese(Brazil)"]["Bairro"] = "";
	$pageTitlespedidos_view["Portuguese(Brazil)"]["print"] = "Romaneio";
	$pageTitlespedidos_view["Portuguese(Brazil)"]["list"] = "Pedidos ";
	$pageTitlespedidos_view["Portuguese(Brazil)"]["masterprint"] = "Romaneio ";
	$pageTitlespedidos_view["Portuguese(Brazil)"]["masterlist"] = "Pedidos ";
	if (count($fieldToolTipspedidos_view["Portuguese(Brazil)"]))
		$tdatapedidos_view[".isUseToolTips"] = true;
}


	$tdatapedidos_view[".NCSearch"] = true;



$tdatapedidos_view[".shortTableName"] = "pedidos_view";
$tdatapedidos_view[".nSecOptions"] = 1;

$tdatapedidos_view[".mainTableOwnerID"] = "cnpj_fornecedor";
$tdatapedidos_view[".entityType"] = 1;
$tdatapedidos_view[".connId"] = "pedidos_at_localhost";


$tdatapedidos_view[".strOriginalTableName"] = "pedidos";

	



$tdatapedidos_view[".showAddInPopup"] = false;

$tdatapedidos_view[".showEditInPopup"] = false;

$tdatapedidos_view[".showViewInPopup"] = false;

$tdatapedidos_view[".listAjax"] = false;
//	temporary
//$tdatapedidos_view[".listAjax"] = false;

	$tdatapedidos_view[".audit"] = false;

	$tdatapedidos_view[".locking"] = false;


$pages = $tdatapedidos_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapedidos_view[".edit"] = true;
	$tdatapedidos_view[".afterEditAction"] = 1;
	$tdatapedidos_view[".closePopupAfterEdit"] = 1;
	$tdatapedidos_view[".afterEditActionDetTable"] = "itens_view";
}

if( $pages[PAGE_ADD] ) {
$tdatapedidos_view[".add"] = true;
$tdatapedidos_view[".afterAddAction"] = 1;
$tdatapedidos_view[".closePopupAfterAdd"] = 1;
$tdatapedidos_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapedidos_view[".list"] = true;
}



$tdatapedidos_view[".strSortControlSettingsJSON"] = "";

$tdatapedidos_view[".strClickActionJSON"] = "{\"fields\":{\"Cod_np\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data_cad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Execício\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Nome\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Parcela\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Razão Social\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Valor_np\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cod\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"status\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"itens_view\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"itens_view\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatapedidos_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapedidos_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapedidos_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapedidos_view[".printFriendly"] = true;
}



$tdatapedidos_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapedidos_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapedidos_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapedidos_view[".isUseAjaxSuggest"] = true;



																																				

$tdatapedidos_view[".ajaxCodeSnippetAdded"] = false;

$tdatapedidos_view[".buttonsAdded"] = false;

$tdatapedidos_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapedidos_view[".isUseTimeForSearch"] = false;


$tdatapedidos_view[".badgeColor"] = "d2691e";


$tdatapedidos_view[".allSearchFields"] = array();
$tdatapedidos_view[".filterFields"] = array();
$tdatapedidos_view[".requiredSearchFields"] = array();

$tdatapedidos_view[".googleLikeFields"] = array();
$tdatapedidos_view[".googleLikeFields"][] = "cod";
$tdatapedidos_view[".googleLikeFields"][] = "status";
$tdatapedidos_view[".googleLikeFields"][] = "Data_cad";
$tdatapedidos_view[".googleLikeFields"][] = "Nome";
$tdatapedidos_view[".googleLikeFields"][] = "Execício";
$tdatapedidos_view[".googleLikeFields"][] = "cnpj_fornecedor";
$tdatapedidos_view[".googleLikeFields"][] = "Num_NP";
$tdatapedidos_view[".googleLikeFields"][] = "Parcela";
$tdatapedidos_view[".googleLikeFields"][] = "Drae";
$tdatapedidos_view[".googleLikeFields"][] = "Municipio";
$tdatapedidos_view[".googleLikeFields"][] = "Bairro";



$tdatapedidos_view[".tableType"] = "list";

$tdatapedidos_view[".printerPageOrientation"] = 0;
$tdatapedidos_view[".nPrinterPageScale"] = 100;

$tdatapedidos_view[".nPrinterSplitRecords"] = 40;

$tdatapedidos_view[".geocodingEnabled"] = false;




$tdatapedidos_view[".isDisplayLoading"] = true;






$tdatapedidos_view[".pageSize"] = 20;

$tdatapedidos_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapedidos_view[".strOrderBy"] = $tstrOrderBy;

$tdatapedidos_view[".orderindexes"] = array();


$tdatapedidos_view[".sqlHead"] = "SELECT pedidos.cod,  pedidos.status,  pedidos.Data_cad,  escolas.Nome,  np.`Execício`,  pedidos.cnpj_fornecedor,  np.Num_NP,  np.Parcela,  escolas.Drae,  escolas.Municipio,  escolas.Bairro";
$tdatapedidos_view[".sqlFrom"] = "FROM pedidos  INNER JOIN np ON pedidos.Cod_np = np.Cod_NP  INNER JOIN escolas ON pedidos.cnpj_escola = escolas.CNPJ  INNER JOIN fornecedores ON pedidos.cnpj_fornecedor = fornecedores.CNPJ";
$tdatapedidos_view[".sqlWhereExpr"] = "";
$tdatapedidos_view[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "a",
	'name' => "Pendente",
	'nameType' => 'Text',
	'where' => "pedidos.status =\"Pendente\"",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "c",
	'name' => "Recebido",
	'nameType' => 'Text',
	'where' => "pedidos.status =\"Recebido\"",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "d",
	'name' => "Impresso",
	'nameType' => 'Text',
	'where' => "pedidos.status =\"Impresso\"",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "b",
	'name' => "Entregue",
	'nameType' => 'Text',
	'where' => "pedidos.status =\"Entregue\"",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "e",
	'name' => "Pago",
	'nameType' => 'Text',
	'where' => "pedidos.status =\"Pago\"",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdatapedidos_view[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapedidos_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapedidos_view[".arrGroupsPerPage"] = $arrGPP;

$tdatapedidos_view[".highlightSearchResults"] = true;

$tableKeyspedidos_view = array();
$tableKeyspedidos_view[] = "cod";
$tableKeyspedidos_view[] = "cnpj_fornecedor";
$tdatapedidos_view[".Keys"] = $tableKeyspedidos_view;


$tdatapedidos_view[".hideMobileList"] = array();




//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos_view","cod");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cod";

		$fdata["sourceSingle"] = "cod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.cod";

	
	
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


	$tdatapedidos_view["cod"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "cod";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos_view","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.status";

	
	
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
	$edata["LookupTable"] = "status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Status";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Status";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatapedidos_view["status"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "status";
//	Data_cad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Data_cad";
	$fdata["GoodName"] = "Data_cad";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos_view","Data_cad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Data_cad";

		$fdata["sourceSingle"] = "Data_cad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.Data_cad";

	
	
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


	$tdatapedidos_view["Data_cad"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "Data_cad";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("pedidos_view","Nome");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Nome";

	
	
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


	$tdatapedidos_view["Nome"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "Nome";
//	Execício
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Execício";
	$fdata["GoodName"] = "Exec_cio";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("pedidos_view","Exec_cio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Execício";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.`Execício`";

	
	
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


	$tdatapedidos_view["Execício"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "Execício";
//	cnpj_fornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cnpj_fornecedor";
	$fdata["GoodName"] = "cnpj_fornecedor";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos_view","cnpj_fornecedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cnpj_fornecedor";

		$fdata["sourceSingle"] = "cnpj_fornecedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos.cnpj_fornecedor";

	
	
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


	$tdatapedidos_view["cnpj_fornecedor"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "cnpj_fornecedor";
//	Num_NP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Num_NP";
	$fdata["GoodName"] = "Num_NP";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("pedidos_view","Num_NP");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Num_NP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Num_NP";

	
	
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


	$tdatapedidos_view["Num_NP"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "Num_NP";
//	Parcela
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Parcela";
	$fdata["GoodName"] = "Parcela";
	$fdata["ownerTable"] = "np";
	$fdata["Label"] = GetFieldLabel("pedidos_view","Parcela");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Parcela";

		$fdata["sourceSingle"] = "Parcela";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "np.Parcela";

	
	
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


	$tdatapedidos_view["Parcela"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "Parcela";
//	Drae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Drae";
	$fdata["GoodName"] = "Drae";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("pedidos_view","Drae");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Drae";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Drae";

	
	
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


	$tdatapedidos_view["Drae"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "Drae";
//	Municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Municipio";
	$fdata["GoodName"] = "Municipio";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("pedidos_view","Municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Municipio";

	
	
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


	$tdatapedidos_view["Municipio"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "Municipio";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("pedidos_view","Bairro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Bairro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Bairro";

	
	
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


	$tdatapedidos_view["Bairro"] = $fdata;
		$tdatapedidos_view[".searchableFields"][] = "Bairro";


$tables_data["pedidos_view"]=&$tdatapedidos_view;
$field_labels["pedidos_view"] = &$fieldLabelspedidos_view;
$fieldToolTips["pedidos_view"] = &$fieldToolTipspedidos_view;
$placeHolders["pedidos_view"] = &$placeHolderspedidos_view;
$page_titles["pedidos_view"] = &$pageTitlespedidos_view;


changeTextControlsToDate( "pedidos_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pedidos_view"] = array();
//	itens_view
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="itens_view";
		$detailsParam["dOriginalTable"] = "itens";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "itens_view";
	$detailsParam["dCaptionTable"] = GetTableCaption("itens_view");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pedidos_view"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pedidos_view"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pedidos_view"][$dIndex]["masterKeys"][]="cod";

				$detailsTablesData["pedidos_view"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pedidos_view"][$dIndex]["detailKeys"][]="cod_ped";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pedidos_view"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="fornecedores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="fornecedores_view";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fornecedores_view";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pedidos_view"][0] = $masterParams;
				$masterTablesData["pedidos_view"][0]["masterKeys"] = array();
	$masterTablesData["pedidos_view"][0]["masterKeys"][]="CNPJ";
				$masterTablesData["pedidos_view"][0]["detailKeys"] = array();
	$masterTablesData["pedidos_view"][0]["detailKeys"][]="cnpj_fornecedor";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pedidos_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pedidos.cod,  pedidos.status,  pedidos.Data_cad,  escolas.Nome,  np.`Execício`,  pedidos.cnpj_fornecedor,  np.Num_NP,  np.Parcela,  escolas.Drae,  escolas.Municipio,  escolas.Bairro";
$proto0["m_strFrom"] = "FROM pedidos  INNER JOIN np ON pedidos.Cod_np = np.Cod_NP  INNER JOIN escolas ON pedidos.cnpj_escola = escolas.CNPJ  INNER JOIN fornecedores ON pedidos.cnpj_fornecedor = fornecedores.CNPJ";
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
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos_view"
));

$proto6["m_sql"] = "pedidos.cod";
$proto6["m_srcTableName"] = "pedidos_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos_view"
));

$proto8["m_sql"] = "pedidos.status";
$proto8["m_srcTableName"] = "pedidos_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Data_cad",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos_view"
));

$proto10["m_sql"] = "pedidos.Data_cad";
$proto10["m_srcTableName"] = "pedidos_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "escolas",
	"m_srcTableName" => "pedidos_view"
));

$proto12["m_sql"] = "escolas.Nome";
$proto12["m_srcTableName"] = "pedidos_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Execício",
	"m_strTable" => "np",
	"m_srcTableName" => "pedidos_view"
));

$proto14["m_sql"] = "np.`Execício`";
$proto14["m_srcTableName"] = "pedidos_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cnpj_fornecedor",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos_view"
));

$proto16["m_sql"] = "pedidos.cnpj_fornecedor";
$proto16["m_srcTableName"] = "pedidos_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Num_NP",
	"m_strTable" => "np",
	"m_srcTableName" => "pedidos_view"
));

$proto18["m_sql"] = "np.Num_NP";
$proto18["m_srcTableName"] = "pedidos_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Parcela",
	"m_strTable" => "np",
	"m_srcTableName" => "pedidos_view"
));

$proto20["m_sql"] = "np.Parcela";
$proto20["m_srcTableName"] = "pedidos_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Drae",
	"m_strTable" => "escolas",
	"m_srcTableName" => "pedidos_view"
));

$proto22["m_sql"] = "escolas.Drae";
$proto22["m_srcTableName"] = "pedidos_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Municipio",
	"m_strTable" => "escolas",
	"m_srcTableName" => "pedidos_view"
));

$proto24["m_sql"] = "escolas.Municipio";
$proto24["m_srcTableName"] = "pedidos_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "escolas",
	"m_srcTableName" => "pedidos_view"
));

$proto26["m_sql"] = "escolas.Bairro";
$proto26["m_srcTableName"] = "pedidos_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "pedidos";
$proto29["m_srcTableName"] = "pedidos_view";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cod";
$proto29["m_columns"][] = "Exercicio";
$proto29["m_columns"][] = "cnpj_escola";
$proto29["m_columns"][] = "cnpj_fornecedor";
$proto29["m_columns"][] = "Saldo";
$proto29["m_columns"][] = "status";
$proto29["m_columns"][] = "Data_cad";
$proto29["m_columns"][] = "usuario";
$proto29["m_columns"][] = "Cod_np";
$proto29["m_columns"][] = "Parcela";
$proto29["m_columns"][] = "Valor_np";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "pedidos";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "pedidos_view";
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
$proto33["m_strName"] = "np";
$proto33["m_srcTableName"] = "pedidos_view";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "Cod_NP";
$proto33["m_columns"][] = "Parcela";
$proto33["m_columns"][] = "Data";
$proto33["m_columns"][] = "Valor";
$proto33["m_columns"][] = "Saldo";
$proto33["m_columns"][] = "Escola";
$proto33["m_columns"][] = "Num_NP";
$proto33["m_columns"][] = "Execício";
$proto33["m_columns"][] = "Debito";
$proto33["m_columns"][] = "Sd_ant";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN np ON pedidos.Cod_np = np.Cod_NP";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "pedidos_view";
$proto34=array();
$proto34["m_sql"] = "np.Cod_NP = pedidos.Cod_np";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cod_NP",
	"m_strTable" => "np",
	"m_srcTableName" => "pedidos_view"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= pedidos.Cod_np";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "escolas";
$proto37["m_srcTableName"] = "pedidos_view";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "cod_escola";
$proto37["m_columns"][] = "CNPJ";
$proto37["m_columns"][] = "Nome";
$proto37["m_columns"][] = "Endereço";
$proto37["m_columns"][] = "Email";
$proto37["m_columns"][] = "Telefone";
$proto37["m_columns"][] = "Descrição";
$proto37["m_columns"][] = "Drae";
$proto37["m_columns"][] = "Bairro";
$proto37["m_columns"][] = "Cidade";
$proto37["m_columns"][] = "Estado";
$proto37["m_columns"][] = "Lat";
$proto37["m_columns"][] = "Lng";
$proto37["m_columns"][] = "Direc";
$proto37["m_columns"][] = "Cep";
$proto37["m_columns"][] = "Tec_resp";
$proto37["m_columns"][] = "Arquivos";
$proto37["m_columns"][] = "Obs";
$proto37["m_columns"][] = "EmailDrae";
$proto37["m_columns"][] = "Municipio";
$proto37["m_columns"][] = "cod_fee";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN escolas ON pedidos.cnpj_escola = escolas.CNPJ";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "pedidos_view";
$proto38=array();
$proto38["m_sql"] = "escolas.CNPJ = pedidos.cnpj_escola";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "escolas",
	"m_srcTableName" => "pedidos_view"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= pedidos.cnpj_escola";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "fornecedores";
$proto41["m_srcTableName"] = "pedidos_view";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "CNPJ";
$proto41["m_columns"][] = "Razão Social";
$proto41["m_columns"][] = "Telefone Fixo";
$proto41["m_columns"][] = "Responsável";
$proto41["m_columns"][] = "Endereço";
$proto41["m_columns"][] = "Email";
$proto41["m_columns"][] = "Telefone Celular";
$proto41["m_columns"][] = "OBS";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN fornecedores ON pedidos.cnpj_fornecedor = fornecedores.CNPJ";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "pedidos_view";
$proto42=array();
$proto42["m_sql"] = "fornecedores.CNPJ = pedidos.cnpj_fornecedor";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "fornecedores",
	"m_srcTableName" => "pedidos_view"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= pedidos.cnpj_fornecedor";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pedidos_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pedidos_view = createSqlQuery_pedidos_view();


	
		;

											

$tdatapedidos_view[".sqlquery"] = $queryData_pedidos_view;



$tdatapedidos_view[".hasEvents"] = false;

?>