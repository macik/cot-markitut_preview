<?php
/**
* Static and dynamic resource (e.g. HTML) strings. Can be overriden by skin files and other code.
 * @package markitut_preview
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_langfile('markitut_preview','plug');

$R['page_preview'] = '<button class="markitup_preview_button btn btn-danger btn-xs" type="button" name="mypreview">'.$L['Preview'].'</button>';