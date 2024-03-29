<?php
/**
 * Vector - Modern version of MonoBook with fresh look and many usability
 * improvements.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Skins
 */

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Agora',
	'namemsg' => 'skinname-agora',
	'descriptionmsg' => 'agora-skin-desc',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Agora',
	'author' => array( 'Open source has no ownership'),
);

// Register files
$wgAutoloadClasses['SkinAgora'] = __DIR__ . '/SkinAgora.php';
$wgAutoloadClasses['AgoraTemplate'] = __DIR__ . '/AgoraTemplate.php';
$wgMessagesDirs['Agora'] = __DIR__ . '/i18n';

// Register skin
$wgValidSkinNames['agora'] = 'Agora';
