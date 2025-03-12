<?php
$tdataescolas = array();
$tdataescolas[".searchableFields"] = array();
$tdataescolas[".ShortName"] = "escolas";
$tdataescolas[".OwnerID"] = "CNPJ";
$tdataescolas[".OriginalTable"] = "escolas";


$tdataescolas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataescolas[".originalPagesByType"] = $tdataescolas[".pagesByType"];
$tdataescolas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataescolas[".originalPages"] = $tdataescolas[".pages"];
$tdataescolas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataescolas[".originalDefaultPages"] = $tdataescolas[".defaultPages"];

//	field labels
$fieldLabelsescolas = array();
$fieldToolTipsescolas = array();
$pageTitlesescolas = array();
$placeHoldersescolas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsescolas["Portuguese(Brazil)"] = array();
	$fieldToolTipsescolas["Portuguese(Brazil)"] = array();
	$placeHoldersescolas["Portuguese(Brazil)"] = array();
	$pageTitlesescolas["Portuguese(Brazil)"] = array();
	$fieldLabelsescolas["Portuguese(Brazil)"]["cod_escola"] = "FEE";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["cod_escola"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["cod_escola"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["CNPJ"] = "CNPJ";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["CNPJ"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["CNPJ"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Endere_o"] = "Endereço";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Endere_o"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Endere_o"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Email"] = "Email";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Email"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Email"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Telefone"] = "Telefone";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Telefone"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Telefone"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Descri__o"] = "Descrição";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Descri__o"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Descri__o"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Drae"] = "Drae";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Drae"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Drae"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Bairro"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Cidade"] = "Cidade";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Cidade"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Cidade"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Estado"] = "Estado";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Estado"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Estado"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Lat"] = "Lat";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Lat"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Lat"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Lng"] = "Lng";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Lng"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Lng"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Direc"] = "Direc";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Direc"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Direc"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Cep"] = "Cep";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Cep"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Cep"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Tec_resp"] = "Técnico";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Tec_resp"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Tec_resp"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Arquivos"] = "Arquivos";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Arquivos"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Arquivos"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Obs"] = "Obs";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Obs"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Obs"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["EmailDrae"] = "Email Drae";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["EmailDrae"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["EmailDrae"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["Municipio"] = "Municipio";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["Municipio"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["Municipio"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["cod_fee"] = "Cod Fee";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["cod_fee"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["cod_fee"] = "";
	$fieldLabelsescolas["Portuguese(Brazil)"]["fullname"] = "Técnico";
	$fieldToolTipsescolas["Portuguese(Brazil)"]["fullname"] = "";
	$placeHoldersescolas["Portuguese(Brazil)"]["fullname"] = "";
	$pageTitlesescolas["Portuguese(Brazil)"]["masterlist"] = "Escolas, {%CNPJ}";
	$pageTitlesescolas["Portuguese(Brazil)"]["edit"] = "Escolas, Editar [ {%Nome}]";
	$pageTitlesescolas["Portuguese(Brazil)"]["print"] = "Relação de Escolas";
	if (count($fieldToolTipsescolas["Portuguese(Brazil)"]))
		$tdataescolas[".isUseToolTips"] = true;
}


	$tdataescolas[".NCSearch"] = true;



$tdataescolas[".shortTableName"] = "escolas";
$tdataescolas[".nSecOptions"] = 1;

$tdataescolas[".mainTableOwnerID"] = "CNPJ";
$tdataescolas[".entityType"] = 0;
$tdataescolas[".connId"] = "pedidos_at_localhost";


$tdataescolas[".strOriginalTableName"] = "escolas";

	



$tdataescolas[".showAddInPopup"] = false;

$tdataescolas[".showEditInPopup"] = false;

$tdataescolas[".showViewInPopup"] = false;

$tdataescolas[".listAjax"] = false;
//	temporary
//$tdataescolas[".listAjax"] = false;

	$tdataescolas[".audit"] = false;

	$tdataescolas[".locking"] = false;


$pages = $tdataescolas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataescolas[".edit"] = true;
	$tdataescolas[".afterEditAction"] = 1;
	$tdataescolas[".closePopupAfterEdit"] = 1;
	$tdataescolas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataescolas[".add"] = true;
$tdataescolas[".afterAddAction"] = 1;
$tdataescolas[".closePopupAfterAdd"] = 1;
$tdataescolas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataescolas[".list"] = true;
}



$tdataescolas[".strSortControlSettingsJSON"] = "";

$tdataescolas[".strClickActionJSON"] = "{\"fields\":{\"Arquivos\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Bairro\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"CNPJ\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cep\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Cidade\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Descrição\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Direc\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Drae\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Email\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EmailDrae\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Endereço\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Estado\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Lat\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Lng\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Municipio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Nome\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Obs\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tec_resp\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Telefone\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cod_escola\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cod_fee\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"np\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"np\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataescolas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataescolas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataescolas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataescolas[".printFriendly"] = true;
}



$tdataescolas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataescolas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataescolas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataescolas[".isUseAjaxSuggest"] = true;



																		

$tdataescolas[".ajaxCodeSnippetAdded"] = false;

$tdataescolas[".buttonsAdded"] = false;

$tdataescolas[".addPageEvents"] = true;

// use timepicker for search panel
$tdataescolas[".isUseTimeForSearch"] = false;


$tdataescolas[".badgeColor"] = "E8926F";


$tdataescolas[".allSearchFields"] = array();
$tdataescolas[".filterFields"] = array();
$tdataescolas[".requiredSearchFields"] = array();

$tdataescolas[".googleLikeFields"] = array();
$tdataescolas[".googleLikeFields"][] = "cod_escola";
$tdataescolas[".googleLikeFields"][] = "CNPJ";
$tdataescolas[".googleLikeFields"][] = "Nome";
$tdataescolas[".googleLikeFields"][] = "Endereço";
$tdataescolas[".googleLikeFields"][] = "Email";
$tdataescolas[".googleLikeFields"][] = "Telefone";
$tdataescolas[".googleLikeFields"][] = "Descrição";
$tdataescolas[".googleLikeFields"][] = "Drae";
$tdataescolas[".googleLikeFields"][] = "Bairro";
$tdataescolas[".googleLikeFields"][] = "Cidade";
$tdataescolas[".googleLikeFields"][] = "Estado";
$tdataescolas[".googleLikeFields"][] = "Lat";
$tdataescolas[".googleLikeFields"][] = "Lng";
$tdataescolas[".googleLikeFields"][] = "Direc";
$tdataescolas[".googleLikeFields"][] = "Cep";
$tdataescolas[".googleLikeFields"][] = "Tec_resp";
$tdataescolas[".googleLikeFields"][] = "Arquivos";
$tdataescolas[".googleLikeFields"][] = "Obs";
$tdataescolas[".googleLikeFields"][] = "EmailDrae";
$tdataescolas[".googleLikeFields"][] = "Municipio";
$tdataescolas[".googleLikeFields"][] = "cod_fee";
$tdataescolas[".googleLikeFields"][] = "fullname";



$tdataescolas[".tableType"] = "list";

$tdataescolas[".printerPageOrientation"] = 0;
$tdataescolas[".nPrinterPageScale"] = 100;

$tdataescolas[".nPrinterSplitRecords"] = 40;

$tdataescolas[".geocodingEnabled"] = false;










$tdataescolas[".pageSize"] = 40;

$tdataescolas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataescolas[".strOrderBy"] = $tstrOrderBy;

$tdataescolas[".orderindexes"] = array();


$tdataescolas[".sqlHead"] = "SELECT escolas.cod_escola,  escolas.CNPJ,  escolas.Nome,  escolas.`Endereço`,  escolas.Email,  escolas.Telefone,  escolas.`Descrição`,  escolas.Drae,  escolas.Bairro,  escolas.Cidade,  escolas.Estado,  escolas.Lat,  escolas.Lng,  escolas.Direc,  escolas.Cep,  escolas.Tec_resp,  escolas.Arquivos,  escolas.Obs,  escolas.EmailDrae,  escolas.Municipio,  escolas.cod_fee,  pedidos_usuarios.fullname";
$tdataescolas[".sqlFrom"] = "FROM escolas  LEFT OUTER JOIN pedidos_usuarios ON escolas.Tec_resp = pedidos_usuarios.username";
$tdataescolas[".sqlWhereExpr"] = "";
$tdataescolas[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataescolas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataescolas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataescolas[".arrGroupsPerPage"] = $arrGPP;

$tdataescolas[".highlightSearchResults"] = true;

$tableKeysescolas = array();
$tableKeysescolas[] = "cod_escola";
$tableKeysescolas[] = "CNPJ";
$tableKeysescolas[] = "Nome";
$tdataescolas[".Keys"] = $tableKeysescolas;


$tdataescolas[".hideMobileList"] = array();




//	cod_escola
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod_escola";
	$fdata["GoodName"] = "cod_escola";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","cod_escola");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cod_escola";

		$fdata["sourceSingle"] = "cod_escola";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.cod_escola";

	
	
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


	$tdataescolas["cod_escola"] = $fdata;
		$tdataescolas[".searchableFields"][] = "cod_escola";
//	CNPJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CNPJ";
	$fdata["GoodName"] = "CNPJ";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","CNPJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CNPJ";

		$fdata["sourceSingle"] = "CNPJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.CNPJ";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=14";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Cnpj %value% já está cadastrado", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataescolas["CNPJ"] = $fdata;
		$tdataescolas[".searchableFields"][] = "CNPJ";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Nome");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nome";

		$fdata["sourceSingle"] = "Nome";

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataescolas["Nome"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Nome";
//	Endereço
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Endereço";
	$fdata["GoodName"] = "Endere_o";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Endere_o");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Endereço";

		$fdata["sourceSingle"] = "Endereço";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.`Endereço`";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataescolas["Endereço"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Endereço";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

		$fdata["sourceSingle"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Email";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdataescolas["Email"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Email";
//	Telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Telefone";
	$fdata["GoodName"] = "Telefone";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Telefone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefone";

		$fdata["sourceSingle"] = "Telefone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Telefone";

	
	
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


		$edata["strEditMask"] = "(99) 9999-9999";

	



	
	
	
	
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


	$tdataescolas["Telefone"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Telefone";
//	Descrição
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Descrição";
	$fdata["GoodName"] = "Descri__o";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Descri__o");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descrição";

		$fdata["sourceSingle"] = "Descrição";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.`Descrição`";

	
	
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


	$tdataescolas["Descrição"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Descrição";
//	Drae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Drae";
	$fdata["GoodName"] = "Drae";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Drae");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Drae";

		$fdata["sourceSingle"] = "Drae";

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Seleciona_drae_novo";
			$edata["autoCompleteFieldsOnEdit"] = 1;
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


	$tdataescolas["Drae"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Drae";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Bairro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Bairro";

		$fdata["sourceSingle"] = "Bairro";

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


	$tdataescolas["Bairro"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Bairro";
//	Cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cidade";
	$fdata["GoodName"] = "Cidade";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Cidade");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cidade";

		$fdata["sourceSingle"] = "Cidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Cidade";

	
	
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


	$tdataescolas["Cidade"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Cidade";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Estado";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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


	$tdataescolas["Estado"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Estado";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Lat");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lat";

		$fdata["sourceSingle"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Lat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdataescolas["Lat"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Lng");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lng";

		$fdata["sourceSingle"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Lng";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdataescolas["Lng"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Lng";
//	Direc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Direc";
	$fdata["GoodName"] = "Direc";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Direc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direc";

		$fdata["sourceSingle"] = "Direc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Direc";

	
	
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

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "nom_direc";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom_direc";

	

	
	$edata["LookupOrderBy"] = "nom_direc";

	
	
	
	

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataescolas["Direc"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Direc";
//	Cep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Cep";
	$fdata["GoodName"] = "Cep";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Cep");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cep";

		$fdata["sourceSingle"] = "Cep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Cep";

	
	
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


	$tdataescolas["Cep"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Cep";
//	Tec_resp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Tec_resp";
	$fdata["GoodName"] = "Tec_resp";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Tec_resp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tec_resp";

		$fdata["sourceSingle"] = "Tec_resp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Tec_resp";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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


	$tdataescolas["Tec_resp"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Tec_resp";
//	Arquivos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Arquivos";
	$fdata["GoodName"] = "Arquivos";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Arquivos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Arquivos";

		$fdata["sourceSingle"] = "Arquivos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Arquivos";

	
	
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
			$edata["EditParams"].= " maxlength=3000";

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


	$tdataescolas["Arquivos"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Arquivos";
//	Obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Obs";
	$fdata["GoodName"] = "Obs";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Obs";

		$fdata["sourceSingle"] = "Obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.Obs";

	
	
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
			$edata["EditParams"].= " maxlength=3000";

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


	$tdataescolas["Obs"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Obs";
//	EmailDrae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "EmailDrae";
	$fdata["GoodName"] = "EmailDrae";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","EmailDrae");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EmailDrae";

		$fdata["sourceSingle"] = "EmailDrae";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.EmailDrae";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdataescolas["EmailDrae"] = $fdata;
		$tdataescolas[".searchableFields"][] = "EmailDrae";
//	Municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Municipio";
	$fdata["GoodName"] = "Municipio";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","Municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Municipio";

		$fdata["sourceSingle"] = "Municipio";

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


	$tdataescolas["Municipio"] = $fdata;
		$tdataescolas[".searchableFields"][] = "Municipio";
//	cod_fee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cod_fee";
	$fdata["GoodName"] = "cod_fee";
	$fdata["ownerTable"] = "escolas";
	$fdata["Label"] = GetFieldLabel("escolas","cod_fee");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cod_fee";

		$fdata["sourceSingle"] = "cod_fee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "escolas.cod_fee";

	
	
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


	$tdataescolas["cod_fee"] = $fdata;
		$tdataescolas[".searchableFields"][] = "cod_fee";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "pedidos_usuarios";
	$fdata["Label"] = GetFieldLabel("escolas","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedidos_usuarios.fullname";

	
	
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


	$tdataescolas["fullname"] = $fdata;
		$tdataescolas[".searchableFields"][] = "fullname";


$tables_data["escolas"]=&$tdataescolas;
$field_labels["escolas"] = &$fieldLabelsescolas;
$fieldToolTips["escolas"] = &$fieldToolTipsescolas;
$placeHolders["escolas"] = &$placeHoldersescolas;
$page_titles["escolas"] = &$pageTitlesescolas;


changeTextControlsToDate( "escolas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["escolas"] = array();
//	np
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="np";
		$detailsParam["dOriginalTable"] = "np";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "np";
	$detailsParam["dCaptionTable"] = GetTableCaption("np");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["escolas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["escolas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["escolas"][$dIndex]["masterKeys"][]="CNPJ";

				$detailsTablesData["escolas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["escolas"][$dIndex]["detailKeys"][]="Escola";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["escolas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_escolas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "escolas.cod_escola,  escolas.CNPJ,  escolas.Nome,  escolas.`Endereço`,  escolas.Email,  escolas.Telefone,  escolas.`Descrição`,  escolas.Drae,  escolas.Bairro,  escolas.Cidade,  escolas.Estado,  escolas.Lat,  escolas.Lng,  escolas.Direc,  escolas.Cep,  escolas.Tec_resp,  escolas.Arquivos,  escolas.Obs,  escolas.EmailDrae,  escolas.Municipio,  escolas.cod_fee,  pedidos_usuarios.fullname";
$proto0["m_strFrom"] = "FROM escolas  LEFT OUTER JOIN pedidos_usuarios ON escolas.Tec_resp = pedidos_usuarios.username";
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
	"m_strName" => "cod_escola",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto6["m_sql"] = "escolas.cod_escola";
$proto6["m_srcTableName"] = "escolas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CNPJ",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto8["m_sql"] = "escolas.CNPJ";
$proto8["m_srcTableName"] = "escolas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto10["m_sql"] = "escolas.Nome";
$proto10["m_srcTableName"] = "escolas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Endereço",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto12["m_sql"] = "escolas.`Endereço`";
$proto12["m_srcTableName"] = "escolas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto14["m_sql"] = "escolas.Email";
$proto14["m_srcTableName"] = "escolas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefone",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto16["m_sql"] = "escolas.Telefone";
$proto16["m_srcTableName"] = "escolas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Descrição",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto18["m_sql"] = "escolas.`Descrição`";
$proto18["m_srcTableName"] = "escolas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Drae",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto20["m_sql"] = "escolas.Drae";
$proto20["m_srcTableName"] = "escolas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto22["m_sql"] = "escolas.Bairro";
$proto22["m_srcTableName"] = "escolas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Cidade",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto24["m_sql"] = "escolas.Cidade";
$proto24["m_srcTableName"] = "escolas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto26["m_sql"] = "escolas.Estado";
$proto26["m_srcTableName"] = "escolas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto28["m_sql"] = "escolas.Lat";
$proto28["m_srcTableName"] = "escolas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto30["m_sql"] = "escolas.Lng";
$proto30["m_srcTableName"] = "escolas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Direc",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto32["m_sql"] = "escolas.Direc";
$proto32["m_srcTableName"] = "escolas";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Cep",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto34["m_sql"] = "escolas.Cep";
$proto34["m_srcTableName"] = "escolas";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Tec_resp",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto36["m_sql"] = "escolas.Tec_resp";
$proto36["m_srcTableName"] = "escolas";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Arquivos",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto38["m_sql"] = "escolas.Arquivos";
$proto38["m_srcTableName"] = "escolas";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Obs",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto40["m_sql"] = "escolas.Obs";
$proto40["m_srcTableName"] = "escolas";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailDrae",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto42["m_sql"] = "escolas.EmailDrae";
$proto42["m_srcTableName"] = "escolas";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Municipio",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto44["m_sql"] = "escolas.Municipio";
$proto44["m_srcTableName"] = "escolas";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_fee",
	"m_strTable" => "escolas",
	"m_srcTableName" => "escolas"
));

$proto46["m_sql"] = "escolas.cod_fee";
$proto46["m_srcTableName"] = "escolas";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "escolas"
));

$proto48["m_sql"] = "pedidos_usuarios.fullname";
$proto48["m_srcTableName"] = "escolas";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "escolas";
$proto51["m_srcTableName"] = "escolas";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "cod_escola";
$proto51["m_columns"][] = "CNPJ";
$proto51["m_columns"][] = "Nome";
$proto51["m_columns"][] = "Endereço";
$proto51["m_columns"][] = "Email";
$proto51["m_columns"][] = "Telefone";
$proto51["m_columns"][] = "Descrição";
$proto51["m_columns"][] = "Drae";
$proto51["m_columns"][] = "Bairro";
$proto51["m_columns"][] = "Cidade";
$proto51["m_columns"][] = "Estado";
$proto51["m_columns"][] = "Lat";
$proto51["m_columns"][] = "Lng";
$proto51["m_columns"][] = "Direc";
$proto51["m_columns"][] = "Cep";
$proto51["m_columns"][] = "Tec_resp";
$proto51["m_columns"][] = "Arquivos";
$proto51["m_columns"][] = "Obs";
$proto51["m_columns"][] = "EmailDrae";
$proto51["m_columns"][] = "Municipio";
$proto51["m_columns"][] = "cod_fee";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "escolas";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "escolas";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_LEFTJOIN";
			$proto55=array();
$proto55["m_strName"] = "pedidos_usuarios";
$proto55["m_srcTableName"] = "escolas";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "ID";
$proto55["m_columns"][] = "username";
$proto55["m_columns"][] = "password";
$proto55["m_columns"][] = "email";
$proto55["m_columns"][] = "fullname";
$proto55["m_columns"][] = "groupid";
$proto55["m_columns"][] = "active";
$proto55["m_columns"][] = "ext_security_id";
$proto55["m_columns"][] = "fullname1";
$proto55["m_columns"][] = "userpic";
$proto55["m_columns"][] = "fullname2";
$proto55["m_columns"][] = "reset_token";
$proto55["m_columns"][] = "reset_date";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "LEFT OUTER JOIN pedidos_usuarios ON escolas.Tec_resp = pedidos_usuarios.username";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "escolas";
$proto56=array();
$proto56["m_sql"] = "pedidos_usuarios.username = escolas.Tec_resp";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "pedidos_usuarios",
	"m_srcTableName" => "escolas"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= escolas.Tec_resp";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="escolas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_escolas = createSqlQuery_escolas();


	
		;

																						

$tdataescolas[".sqlquery"] = $queryData_escolas;



include_once(getabspath("include/escolas_events.php"));
$tdataescolas[".hasEvents"] = true;

?>