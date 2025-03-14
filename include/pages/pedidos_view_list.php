<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => true,
'detailsAdd' => true,
'inlineEdit' => true,
'spreadsheetMode' => false,
'reorderRows' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => true,
'addInPopup' => null,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'itens_view' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => false,
'printDetails' => true ) ),
'master' => array( 'fornecedores_view' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'cod' => array( 'totalsType' => '' ),
'status' => array( 'totalsType' => '' ),
'Data_cad' => array( 'totalsType' => '' ),
'Nome' => array( 'totalsType' => '' ),
'Execício' => array( 'totalsType' => '' ),
'cnpj_fornecedor' => array( 'totalsType' => '' ),
'Num_NP' => array( 'totalsType' => '' ),
'Parcela' => array( 'totalsType' => '' ),
'Drae' => array( 'totalsType' => '' ),
'Municipio' => array( 'totalsType' => '' ),
'Bairro' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'status',
'Nome',
'Parcela',
'Execício',
'Num_NP',
'Drae',
'Bairro',
'Municipio',
'Data_cad' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'Nome',
'Bairro',
'Municipio',
'Drae',
'Num_NP',
'Execício',
'status',
'Parcela' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array( 'Parcela',
'status' ),
'fieldItems' => array( 'Parcela' => array( 'simple_grid_field10',
'simple_grid_field9' ),
'Execício' => array( 'simple_grid_field1',
'simple_grid_field' ),
'status' => array( 'simple_grid_field8',
'simple_grid_field5' ),
'Num_NP' => array( 'grid_field_label',
'grid_field' ),
'Nome' => array( 'grid_field_label1',
'grid_field1' ),
'Drae' => array( 'grid_field2',
'grid_field_label2' ),
'Municipio' => array( 'grid_field3',
'grid_field_label3' ),
'Bairro' => array( 'grid_field4',
'grid_field_label4' ),
'Data_cad' => array( 'grid_field5',
'grid_field_label5' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'custom_button',
'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete',
'update_selected',
'details_found',
'page_size',
'print_panel',
'text' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel',
'filter_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'simple_search',
'list_options',
'notifications',
'loginform_login',
'username_button',
'list_options1' ),
'grid' => array( 'simple_grid_field8',
'simple_grid_field5',
'simple_grid_field1',
'simple_grid_field',
'grid_field_label',
'grid_field',
'details_preview',
'grid_checkbox_head',
'grid_checkbox',
'grid_alldetails_link',
'grid_details_link',
'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'simple_grid_field10',
'simple_grid_field9',
'grid_field_label1',
'grid_field1',
'grid_field_label2',
'grid_field2',
'grid_field_label4',
'grid_field4',
'grid_field_label3',
'grid_field3',
'grid_field_label5',
'grid_field5' ),
'top' => array( 'master_info' ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'custom_button' => 'above-grid',
'inline_add' => 'above-grid',
'inline_save_all' => 'above-grid',
'inline_cancel_all' => 'above-grid',
'delete' => 'above-grid',
'update_selected' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'text' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'filter_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'list_options1' => 'supertop',
'simple_grid_field8' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid',
'details_preview' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid',
'grid_edit' => 'grid',
'grid_inline_edit' => 'grid',
'grid_inline_save' => 'grid',
'grid_inline_cancel' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field9' => 'grid',
'grid_field_label1' => 'grid',
'grid_field1' => 'grid',
'grid_field_label2' => 'grid',
'grid_field2' => 'grid',
'grid_field_label4' => 'grid',
'grid_field4' => 'grid',
'grid_field_label3' => 'grid',
'grid_field3' => 'grid',
'grid_field_label5' => 'grid',
'grid_field5' => 'grid',
'master_info' => 'top' ),
'itemLocations' => array( 'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_save' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'grid_field_label1' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'grid_field_label2' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'grid_field_label4' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'grid_field_label3' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'grid_field_label5' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field' ) ),
'itemVisiblity' => array( 'print_panel' => 5,
'expand_menu_button' => 2,
'grid_edit' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'inline_add' => array( 'inline_add' ),
'inline_save_all' => array( 'inline_save_all' ),
'inline_cancel_all' => array( 'inline_cancel_all' ),
'details_found' => array( 'details_found' ),
'page_size' => array( 'page_size' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_details' => array( 'print_details' ),
'print_records' => array( 'print_records' ),
'print_button' => array( 'print_button' ),
'text' => array( 'text' ),
'pagination' => array( 'pagination' ),
'grid_field_label' => array( 'simple_grid_field10',
'simple_grid_field1',
'simple_grid_field8',
'grid_field_label',
'grid_field_label1',
'grid_field_label2',
'grid_field_label3',
'grid_field_label4',
'grid_field_label5' ),
'grid_field' => array( 'simple_grid_field9',
'simple_grid_field',
'simple_grid_field5',
'grid_field',
'grid_field1',
'grid_field2',
'grid_field3',
'grid_field4',
'grid_field5' ),
'details_preview' => array( 'details_preview' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link' ),
'grid_inline_edit' => array( 'grid_inline_edit' ),
'grid_inline_save' => array( 'grid_inline_save' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'search_panel_field' => array( 'search_panel_field1',
'search_panel_field2',
'search_panel_field',
'search_panel_field10',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6' ),
'edit_selected' => array( 'edit_selected' ),
'-' => array( '-6',
'-',
'-1',
'-2',
'-3',
'-4',
'-5',
'-7' ),
'advsearch_link' => array( 'advsearch_link' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'list_options' => array( 'list_options',
'list_options1' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'search_panel' => array( 'search_panel' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'filter_panel' => array( 'filter_panel' ),
'master_info' => array( 'master_info' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'custom_button' => array( 'custom_button' ),
'export' => array( 'export' ),
'export_selected' => array( 'export_selected' ),
'notifications' => array( 'notifications' ),
'grid_edit' => array( 'grid_edit' ),
'update_selected' => array( 'update_selected' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'status_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'Nome_fieldheadercolumn' ),
'items' => array( 'grid_field_label1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'Parcela_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'Exec_cio_fieldheadercolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'Num_NP_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'Drae_fieldheadercolumn' ),
'items' => array( 'grid_field_label2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'Bairro_fieldheadercolumn' ),
'items' => array( 'grid_field_label4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'Municipio_fieldheadercolumn' ),
'items' => array( 'grid_field_label3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'Data_cad_fieldheadercolumn' ),
'items' => array( 'grid_field_label5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inlineedit_column',
'inline_save',
'inline_cancel' ),
'items' => array( 'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_alldetails_link',
'grid_details_link' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'status_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'Nome_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'Parcela_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'Exec_cio_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'Num_NP_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'Drae_fieldcolumn' ),
'items' => array( 'grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'Bairro_fieldcolumn' ),
'items' => array( 'grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'Municipio_fieldcolumn' ),
'items' => array( 'grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'Data_cad_fieldcolumn' ),
'items' => array( 'grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9,
10,
11 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3,
4,
5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 11 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 12,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => true,
'customButtons' => array( 'New_Button2' ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'list',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'New_Button2' ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'custom_button',
'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete',
'update_selected' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'text' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel',
'filter_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'notifications',
'loginform_login',
'username_button',
'list_options1' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_details' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_details' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 12 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_details' ),
array( 'cell' => 'footcell_field1',
'colspan' => 3 ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field' ) ) ) ),
'cells' => array( 'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'align' => 'left',
'field' => 'status',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'align' => 'left',
'field' => 'status',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field1' ),
'align' => 'left',
'field' => 'Execício',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'align' => 'left',
'field' => 'Execício',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label' ),
'align' => 'left',
'field' => 'Num_NP',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'align' => 'left',
'field' => 'Num_NP',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ),
'orientation' => 'vertical',
'useFullWidth' => true ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_details' => array( 'model' => 'headcell_details',
'items' => array(  ) ),
'cell_details' => array( 'model' => 'cell_details',
'items' => array( 'grid_alldetails_link',
'grid_details_link' ) ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'align' => 'left',
'field' => 'Parcela',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'align' => 'left',
'field' => 'Parcela',
'columnName' => 'field' ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label1' ),
'align' => 'left',
'field' => 'Nome',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'align' => 'left',
'field' => 'Nome',
'columnName' => 'field' ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label2' ),
'align' => 'left',
'field' => 'Drae',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'grid_field2' ),
'align' => 'left',
'field' => 'Drae',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label4' ),
'align' => 'left',
'field' => 'Bairro',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'grid_field4' ),
'align' => 'left',
'field' => 'Bairro',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label3' ),
'align' => 'left',
'field' => 'Municipio',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'grid_field3' ),
'align' => 'left',
'field' => 'Municipio',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label5' ),
'align' => 'left',
'field' => 'Data_cad',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'grid_field5' ),
'align' => 'left',
'field' => 'Data_cad',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'inline_add' => array( 'type' => 'inline_add',
'label' => array( 'type' => 0,
'text' => 'Adicionar' ),
'icon' => array( 'glyph' => 'plus' ),
'tooltip' => array( 'type' => 0,
'text' => 'Adicionar novo Pedido.' ),
'buttonStyle' => 'link-button' ),
'inline_save_all' => array( 'type' => 'inline_save_all',
'icon' => array( 'fa' => 'save' ),
'label' => array( 'type' => 0,
'text' => 'Salvar' ),
'buttonStyle' => 'link-button' ),
'inline_cancel_all' => array( 'type' => 'inline_cancel_all',
'buttonStyle' => 'link-button',
'icon' => array( 'glyph' => 'erase' ) ),
'details_found' => array( 'type' => 'details_found' ),
'page_size' => array( 'type' => 'page_size' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_details',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'itens_view' => true ) ),
'print_records' => array( 'type' => 'print_records' ),
'print_button' => array( 'type' => 'print_button' ),
'text' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => 'Gestão de Pedidos' ),
'editedByRte' => false,
'bold' => true,
'nowrap' => true,
'color' => '#e41515',
'font-size' => '26px' ),
'pagination' => array( 'type' => 'pagination' ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'Parcela',
'clickSort' => true ),
'simple_grid_field9' => array( 'field' => 'Parcela',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true ),
'simple_grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'Execício',
'clickSort' => true ),
'simple_grid_field' => array( 'field' => 'Execício',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'status',
'clickSort' => true ),
'simple_grid_field5' => array( 'field' => 'status',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'itens_view',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => false,
'pageId' => 'list',
'caption' => array( 'page' => 'list',
'table' => 'itens_view',
'type' => 7 ) ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'itens_view',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'grid_inline_edit' => array( 'type' => 'grid_inline_edit',
'buttonStyle' => 'success',
'buttonSize' => 'xtra-small' ),
'grid_inline_save' => array( 'type' => 'grid_inline_save' ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'Num_NP',
'clickSort' => true ),
'grid_field' => array( 'field' => 'Num_NP',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field_label1' => array( 'type' => 'grid_field_label',
'field' => 'Nome',
'clickSort' => true ),
'grid_field1' => array( 'field' => 'Nome',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'nowrap' => true ),
'search_panel_field1' => array( 'field' => 'Nome',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'Execício',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field' => array( 'field' => 'Num_NP',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'status',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'Parcela',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'edit_selected' => array( 'type' => 'edit_selected' ),
'-6' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( '-',
'-5',
'-4',
'-3',
'-2',
'-1',
'edit_selected',
'export_selected',
'delete_selected',
'-7',
'export' ) ),
'-' => array( 'type' => '-' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu',
'menuId' => 'main' ),
'simple_search' => array( 'type' => 'simple_search' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field1',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field',
'search_panel_field2',
'search_panel_field10',
'search_panel_field3' ),
'_flexiblePanel' => true ),
'list_options1' => array( 'type' => 'list_options',
'items' => array( 'advsearch_link',
'show_search_panel',
'hide_search_panel' ) ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'-3' => array( 'type' => '-' ),
'-4' => array( 'type' => '-' ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array(  ) ),
'-5' => array( 'type' => '-' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'fornecedores_view' => 'true' ) ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'delete' => array( 'type' => 'delete',
'buttonStyle' => 'link-button',
'icon' => array( 'glyph' => 'trash' ) ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'grid_field2' => array( 'field' => 'Drae',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'nowrap' => true ),
'grid_field_label2' => array( 'type' => 'grid_field_label',
'field' => 'Drae' ),
'search_panel_field4' => array( 'field' => 'Drae',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'grid_field3' => array( 'field' => 'Municipio',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'nowrap' => true ),
'grid_field_label3' => array( 'type' => 'grid_field_label',
'field' => 'Municipio' ),
'search_panel_field5' => array( 'field' => 'Municipio',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'grid_field4' => array( 'field' => 'Bairro',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'nowrap' => true ),
'grid_field_label4' => array( 'type' => 'grid_field_label',
'field' => 'Bairro' ),
'search_panel_field6' => array( 'field' => 'Bairro',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'grid_field5' => array( 'field' => 'Data_cad',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field_label5' => array( 'type' => 'grid_field_label',
'field' => 'Data_cad' ),
'custom_button' => array( 'eventId' => 'New_Button2',
'label' => array( 'text' => 'Imprimir',
'type' => 0 ),
'type' => 'custom_button',
'buttonStyle' => 'link-button',
'tooltip' => array( 'text' => 'Imprime o pedido selecionado.',
'type' => 0 ),
'icon' => array( 'fa' => 'print' ) ),
'export' => array( 'type' => 'export' ),
'-7' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'notifications' => array( 'type' => 'notifications' ),
'grid_edit' => array( 'type' => 'grid_edit',
'mobileDisplay' => 'mobile' ),
'update_selected' => array( 'type' => 'update_selected' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 11,
'pageWidth' => 'standard',
'reorderRows' => false,
'reorderRowsField' => '',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>