<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'cnpj_fornecedor',
'Parcela',
'status',
'Exercicio',
'Saldo',
'Data_cad',
'agf',
'Num_NP' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'cnpj_fornecedor' => array( 'import_field3' ),
'Parcela' => array( 'import_field' ),
'status' => array( 'import_field2' ),
'Exercicio' => array( 'import_field6' ),
'Saldo' => array( 'import_field8' ),
'Data_cad' => array( 'import_field9' ),
'agf' => array( 'import_field1' ),
'Num_NP' => array( 'import_field4' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field3',
'import_field',
'import_field2',
'import_field6',
'import_field8',
'import_field9',
'import_field1',
'import_field4' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field3' => 'grid',
'import_field' => 'grid',
'import_field2' => 'grid',
'import_field6' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field1' => 'grid',
'import_field4' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field3',
'import_field',
'import_field2',
'import_field6',
'import_field8',
'import_field9',
'import_field1',
'import_field4' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field3',
'import_field',
'import_field2',
'import_field6',
'import_field8',
'import_field9',
'import_field1',
'import_field4' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field3' => array( 'field' => 'cnpj_fornecedor',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'Parcela',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'status',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'Exercicio',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'Saldo',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'Data_cad',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'agf',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'Num_NP',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>