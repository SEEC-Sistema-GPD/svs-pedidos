<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'Pedidos_escola' => array( 'preview' => true ) ),
'totals' => array( 'cod' => array( 'totalsType' => '' ),
'cod_ped' => array( 'totalsType' => '' ),
'genero' => array( 'totalsType' => '' ),
'qtd' => array( 'totalsType' => '' ),
'valor' => array( 'totalsType' => '' ),
'total' => array( 'totalsType' => 'TOTAL' ),
'cod_np' => array( 'totalsType' => '' ),
'resto' => array( 'totalsType' => '' ),
'Marca' => array( 'totalsType' => '' ),
'Valor_Para' => array( 'totalsType' => '' ),
'Nome' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'genero',
'qtd',
'valor',
'total',
'Marca',
'Valor_Para' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'genero' => array( 'simple_grid_field',
'simple_grid_field2' ),
'qtd' => array( 'simple_grid_field3',
'simple_grid_field9' ),
'valor' => array( 'simple_grid_field4',
'simple_grid_field10' ),
'total' => array( 'simple_grid_field5',
'simple_grid_field11',
'grid_field_totals' ),
'Marca' => array( 'simple_grid_field8',
'simple_grid_field14' ),
'Valor_Para' => array( 'grid_field',
'grid_field_label' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader',
'master_info' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field2',
'simple_grid_field9',
'simple_grid_field3',
'simple_grid_field10',
'simple_grid_field4',
'simple_grid_field11',
'simple_grid_field5',
'grid_field_totals',
'grid_field_label',
'grid_field',
'simple_grid_field14',
'simple_grid_field8' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages',
'inline_cancel',
'inlineadd_link' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'grid_inline_cancel' => 'above-grid',
'inline_add' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'master_info' => 'top',
'simple_grid_field' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field5' => 'grid',
'grid_field_totals' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field8' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'grid_field_totals' => array( 'location' => 'grid',
'cellId' => 'footcell_field3' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field14',
'grid_field_label' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field8',
'grid_field' ),
'master_info' => array( 'master_info' ),
'grid_field_totals' => array( 'grid_field_totals' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'genero_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'Marca_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'qtd_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'valor_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'total_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'Valor_Para_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'genero_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'Marca_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'qtd_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'valor_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'total_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'Valor_Para_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array( 'total_fieldfootercolumn' ),
'items' => array( 'grid_field_totals' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 6,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'genero',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'genero',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'align' => 'left',
'field' => 'qtd',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'align' => 'left',
'field' => 'qtd',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'align' => 'left',
'field' => 'valor',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'align' => 'left',
'field' => 'valor',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'align' => 'left',
'field' => 'total',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'align' => 'left',
'field' => 'total',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array( 'grid_field_totals' ),
'align' => 'left',
'field' => 'total',
'columnName' => 'field' ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label' ),
'align' => 'left',
'field' => 'Valor_Para',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'align' => 'left',
'field' => 'Valor_Para',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'Marca',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'Marca',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'genero',
'clickSort' => true ),
'simple_grid_field2' => array( 'field' => 'genero',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'clickSort' => true ),
'simple_grid_field3' => array( 'field' => 'qtd',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'clickSort' => true ),
'simple_grid_field4' => array( 'field' => 'valor',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'clickSort' => true ),
'simple_grid_field5' => array( 'field' => 'total',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'clickSort' => true ),
'simple_grid_field8' => array( 'field' => 'Marca',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'clickSort' => true ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'pedidos_view1' => 'true',
'Pedidos_escola' => 'true' ) ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'qtd',
'clickSort' => true ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'valor',
'clickSort' => true ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'total',
'clickSort' => true ),
'grid_field_totals' => array( 'type' => 'grid_field_totals',
'field' => 'total',
'totals' => 'TOTAL',
'bold' => true ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'Marca',
'clickSort' => true ),
'grid_field' => array( 'field' => 'Valor_Para',
'type' => 'grid_field' ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'Valor_Para' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 11,
'pageWidth' => 'standard',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>