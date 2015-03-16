<?php
if(! defined('CMS_CONFIGFILE_INCLUDED')){
	die('NO CONFIGFILE FOUND');
}

$cms_lang['css_action']				= 'Action';
$cms_lang['css_description']			= 'Description';
$cms_lang['css_file_new']				= 'New&nbsp;css&nbsp;file';
$cms_lang['css_file_edit']				= 'Edit&nbsp;css&nbsp;file';
$cms_lang['css_file_delete']			= 'Delete&nbsp;css&nbsp;file';
$cms_lang['css_file_duplicate']		= 'Copy&nbsp;css&nbsp;file';
$cms_lang['css_file_download']         = 'Download&nbsp;css&nbsp;file';
$cms_lang['css_file_delete_confirm']	= 'Confirm&nbsp;delete?';
$cms_lang['css_file_delete_cancel']	= 'Cancel';
$cms_lang['css_showrules']				= 'Show&nbsp;css&nbsp;rule';
$cms_lang['css_hiderules']				= 'Hide&nbsp;css&nbsp;rule';
$cms_lang['css_filename']				= 'Filename / Url';
$cms_lang['css_nofile']				= 'No css file available.';
$cms_lang['css_norules']				= 'No css rules found.';
$cms_lang['css_norulesforimport']		= 'No css rules found for import.';
$cms_lang['css_edit']					= 'Edit&nbsp;css&nbsp;rule';
$cms_lang['css_delete']				= 'Delete&nbsp;css&nbsp;rule';
$cms_lang['css_export']				= 'Export&nbsp;css&nbsp;rule';
$cms_lang['css_import']				= 'Import&nbsp;css&nbsp;rule';
$cms_lang['css_delete_confirm']		= 'Confirm&nbsp;delete';
$cms_lang['css_delete_cancel']			= 'Cancel';
$cms_lang['css_reset_form']			= 'Discard changes, reset data';
$cms_lang['css_cancel_form']			= 'Cancel, back to last screen';
$cms_lang['css_submit_form']			= 'Submit changes';
$cms_lang['css_rule_addhint']			= 'Set element information'; 
$cms_lang['css_rule_removehint']		= 'Remove element information';
$cms_lang['css_rule_helphint']			= 'Show help';
$cms_lang['css_rulename']				= 'Selector';
$cms_lang['css_rule_file']				= 'Css&nbsp;file';
$cms_lang['css_rule_file01']			= 'Css rule not assigned to any file';
$cms_lang['css_rule_list']				= 'List of css rules';
$cms_lang['css_rule_list_importable']	= 'Css&nbsp;rules<br>&nbsp;for&nbsp;import';
$cms_lang['css_rule_list_used']		= 'Css&nbsp;rules<br>&nbsp;in&nbsp;use';
$cms_lang['css_rule_listhint']			= 'Assigned css rules are selected. To select multiple rules use CTRL key.';
$cms_lang['css_rule_listempty']		= 'No css rules available.';
$cms_lang['css_rule_type']				= 'Css&nbsp;type';
$cms_lang['css_rule_type01']			= 'TAG';
$cms_lang['css_rule_type02']			= 'CLASS';
$cms_lang['css_rule_type03']			= 'ID';
$cms_lang['css_rule_type04']			= 'Import';
$cms_lang['css_rule_content']			= 'Css&nbsp;elements';
$cms_lang['css_rule_previewhint']		= 'Preview css rule';
$cms_lang['css_rule_previewtype']		= 'Preview';
$cms_lang['css_rule_previewtype1']		= 'Preview options ... ';
$cms_lang['css_rule_previewtype2']		= 'P + Style';
$cms_lang['css_rule_previewtype3']		= 'SPAN + Style';
$cms_lang['css_rule_previewtype4']		= 'TABLE CELL + Style';
$cms_lang['css_rule_previewtype5']		= 'LIST + Style';
$cms_lang['css_rule_previewtype6']		= 'NUMERATION + Style';
$cms_lang['css_rule_previewtype7']		= 'LINK - Style';
$cms_lang['css_rule_previewtype8']		= 'IMAGE + Style';
$cms_lang['css_rule_previewtype9']		= 'LINKED IMAGE + Style';
$cms_lang['css_rule_previewtype10']	= 'BORDERLESS LINKED IMAGE + Style';
$cms_lang['css_importable']			= '--- Css rules for import ---';
$cms_lang['css_used']					= '--- Css rules in use ---';
$cms_lang['css_fileimport']			= 'Upload css file';
$cms_lang['css_new']					= 'New css rule';
$cms_lang['css_created']				= 'Created';
$cms_lang['css_lastmodified']			= 'Last&nbsp;changed&nbsp;';
$cms_lang['css_editor']				= 'Editor';
$cms_lang['css_rule_checking']			= 'Validate css element';
$cms_lang['css_rule_warning']			= 'Error in css rule:';
$cms_lang['css_rule_clearhint']		= 'Clear text field';
$cms_lang['css_duplicate']				= 'Copy&nbsp;css&nbsp;rule';
$cms_lang['css_validator_001']			= 'Duplicate css elements found!,,';
$cms_lang['css_validator_002']			= 'Wrong element value,';
$cms_lang['css_validator_003']			= 'Duplicate element value found,';
$cms_lang['css_validator_004']			= 'Max. number of element values exceeded,';
$cms_lang['css_validator_005']			= 'Unknown or wrong element values found,';
$cms_lang["css_edit_rights"]           = 'Edit&nbsp;rights';
$cms_lang["css_posible_units"]			= 'Units ...';
$cms_lang["css_posible_elements"]		= 'Elements ...';

$cms_lang['css_js_previewname']         = 'previewarea';
$cms_lang['css_js_picker']              = 'colorpicker';
$cms_lang['css_js_visible']             = 'visible';
$cms_lang['css_js_hidden']              = 'hidden';
$cms_lang['css_js_nopreview']           = 'Sorry, your browser does not support the preview.';
$cms_lang['css_js_choosepreview']       = 'Please choose the preview type first!';
$cms_lang['css_js_chosseelement']       = 'Please select an element!';
$cms_lang['css_js_entervalue0']         = 'Please insert the value for the element \'';
$cms_lang['css_js_entervalue1']         = '\'!';
$cms_lang['css_js_confirmvalue']        = 'The style element contains errors! Use the element anyway?';

// 11xx = CSS
$cms_lang['err_1101']					= 'Css rule in use. Delete denied.';
$cms_lang['err_1102']					= 'Selector is faulty or missing.';
$cms_lang['err_1103']					= 'Css element is faulty or missing.';
$cms_lang['err_1104']					= 'Css rule allocation not found.';
$cms_lang['err_1105']					= 'Css file not found.';
$cms_lang['err_1106']					= 'Css filename is faulty or missing.';
$cms_lang['err_1107']					= 'Css filename is already existing. Please use a different one.';
$cms_lang['err_1108']					= 'Css rule export failed.';
$cms_lang['err_1109']					= 'Css rule import failed.';
$cms_lang['err_1110']					= 'Css rule not created.';
$cms_lang['err_1111']					= 'Css rule not assigned to css file.';
$cms_lang['err_1112']					= 'Css rule successfully exported.';
$cms_lang['err_1113']					= 'Css rule successfully imported.';
$cms_lang['err_1114']					= 'Css rule not imported. css rule name is already in use.';
$cms_lang['err_1115']					= 'Css file upload and import failed.';
$cms_lang['err_1116']					= 'Css file upload and import succeeded.';
$cms_lang['err_1117']					= 'Css file upload and import succeeded. Some css rules may contains errors.<br>&nbsp;Please check all highlighted css rules.';
$cms_lang['err_1118']					= 'Errors in css rules found! Please check highlighted css rules!';
$cms_lang['err_1119']					= 'Css rule not created.';
$cms_lang['err_1120']			   		= 'Css file in use. Delete denied.';
$cms_lang['err_1121']					= 'Css rule name is already in use. Please use a different one.';
$cms_lang['err_1122']					= 'Css file not updated! Please check your file system permissions.';
$cms_lang['err_1123']	 			   	= 'Css file not deleted! Please check your file system permissions.';

?>