<?php
			$optionsArray = array( 'totals' => array( 'Cod_NP' => array( 'totalsType' => '' ),
'Parcela' => array( 'totalsType' => '' ),
'Data' => array( 'totalsType' => '' ),
'Valor' => array( 'totalsType' => '' ),
'Saldo' => array( 'totalsType' => '' ),
'Escola' => array( 'totalsType' => '' ),
'Num_NP' => array( 'totalsType' => '' ),
'Execício' => array( 'totalsType' => '' ),
'Debito' => array( 'totalsType' => '' ),
'saldo1' => array( 'totalsType' => '' ),
'Nome' => array( 'totalsType' => '' ),
'agf' => array( 'totalsType' => '' ),
'Tec_resp' => array( 'totalsType' => '' ),
'Drae' => array( 'totalsType' => '' ),
'Bairro' => array( 'totalsType' => '' ),
'Direc' => array( 'totalsType' => '' ),
'Municipio' => array( 'totalsType' => '' ),
'fullname' => array( 'totalsType' => '' ),
'Sd_ant' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Parcela',
'Data',
'Valor',
'Escola',
'Num_NP',
'Debito',
'Cod_NP',
'Execício',
'saldo1',
'Nome',
'agf',
'Drae',
'Bairro',
'Direc',
'Municipio',
'fullname',
'Sd_ant' ),
'exportFields' => array( 'Parcela',
'Data',
'Valor',
'Escola',
'Num_NP',
'Debito',
'Cod_NP',
'Execício',
'saldo1',
'Nome',
'agf',
'Drae',
'Bairro',
'Direc',
'Municipio',
'fullname',
'Sd_ant' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Parcela' => array( 'export_field1' ),
'Data' => array( 'export_field2' ),
'Valor' => array( 'export_field3' ),
'Escola' => array( 'export_field5' ),
'Num_NP' => array( 'export_field6' ),
'Debito' => array( 'export_field' ),
'Cod_NP' => array( 'export_field4' ),
'Execício' => array( 'export_field8' ),
'saldo1' => array( 'export_field9' ),
'Nome' => array( 'export_field10' ),
'agf' => array( 'export_field11' ),
'Drae' => array( 'export_field13' ),
'Bairro' => array( 'export_field14' ),
'Direc' => array( 'export_field15' ),
'Municipio' => array( 'export_field16' ),
'fullname' => array( 'export_field17' ),
'Sd_ant' => array( 'export_field12' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field5',
'export_field6',
'export_field',
'export_field4',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17',
'export_field12' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field' => 'grid',
'export_field4' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_field15' => 'grid',
'export_field16' => 'grid',
'export_field17' => 'grid',
'export_field12' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field5',
'export_field6',
'export_field',
'export_field4',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17',
'export_field12' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field5',
'export_field6',
'export_field',
'export_field4',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17',
'export_field12' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field1' => array( 'field' => 'Parcela',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'Data',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'Valor',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'Escola',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'Num_NP',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'Debito',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'Cod_NP',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'Execício',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'saldo1',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'Nome',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'agf',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'Drae',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'Bairro',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'Direc',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'Municipio',
'type' => 'export_field' ),
'export_field17' => array( 'field' => 'fullname',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'Sd_ant',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>