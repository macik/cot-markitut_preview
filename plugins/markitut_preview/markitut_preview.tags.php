<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.edit.tags,page.add.tags
[END_COT_EXT]
==================== */

/**
 * Header file for MarkItUp Custom preview plugin
 *
 * @package markitut_preview
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 * Made with «Extension Template» (https://github.com/macik/cot-extension_template)
 */

defined('COT_CODE') or die('Wrong URL.');
$plug_name = 'markitut_preview';

define('MARKITUP_PREVIEW', true);
global $pl_cfg;
$pl_cfg = $cfg['plugin']['$plug_name'];

require cot_incfile($plug_name,'plug','resources');
switch ($m) {
	case 'add':
			$pageadd_array['PAGEADD_PREVIEW_BUTTON'] = $R['page_preview'];
			$t->assign($pageadd_array);
		break;
	case 'edit':
			$pageedit_array['PAGEEDIT_PREVIEW_BUTTON'] = $R['page_preview'];
			$t->assign($pageedit_array);
		break;
	default:
}