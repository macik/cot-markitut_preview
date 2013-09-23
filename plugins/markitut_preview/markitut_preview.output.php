<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=output
[END_COT_EXT]

Made with «Extension Template» (https://github.com/macik/cot-extension_template)
==================== */
defined('COT_CODE') or die('Wrong URL.');
$plug_name = 'markitut_preview';
global $cfg;

if (defined('MARKITUP_PREVIEW') && $cfg['jquery'])
{
	$mark = 'markItUp(miniSettings);';
	$js_source = file_get_contents(realpath(dirname(__FILE__))."/js/$plug_name.js");
	$auto_refresh = ($cfg['plugin'][$plug_name]['enable_autorefresh']) ? 'var autoPreview = true;' : 'var autoPreview = false;';
	$output = str_replace($mark, $mark.$auto_refresh.$js_source , $output);
}

