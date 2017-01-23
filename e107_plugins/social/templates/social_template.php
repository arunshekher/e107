<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	/**
	 * {XURL_ICONS} template
	 */
	 $SOCIAL_TEMPLATE['xurl_icons']['start'] = '<p class="xurl-social-icons hidden-print">';
	 $SOCIAL_TEMPLATE['xurl_icons']['item'] = '<a rel="external" href="{XURL_ICONS_HREF}" data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}"><span class="fa fa-fw fa-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a>';
	 $SOCIAL_TEMPLATE['xurl_icons']['end'] = '</p>';