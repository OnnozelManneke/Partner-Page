<?php
/**
*
* @package phpBB Extension - Partner Page
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_DMP_PARTNERS_DESC'		=> 'Hier kunt u uw partners beheren',
	'ACP_DMP_ADDED'				=> 'Partner is succesvol toegevoegd',
	'ACP_DMP_AKTIV'				=> 'Partner geactiveerd',
	'ACP_DMP_AKTIV_DESC'		=> 'Als u selecteert, wordt uw partner weergegeven op de partnerpagina',
	'ACP_DMP_BB_SET'			=> 'Activeer BBCodes',
	'ACP_DMP_COUNT'				=> ' Klik',
	'ACP_DMP_COUNTS'			=> ' Klikken',
	'ACP_DMP_DELETED'			=> 'Partner is succesvol verwijderd.',
	'ACP_DMP_DESC'				=> 'Beschrijving van de partner',
	'ACP_DMP_DESC_DESC'			=> 'Vul hier een uitgebreide omschrijving van uw partner in. Indien geactiveerd, kunt u BBCodes en Smilies gebruiken in de beschrijvingen van de partners.',
	'ACP_DMP_DESC_FRONT'		=> 'Hier vind je alle partners van je forum',
	'ACP_DMP_EMPTY_TEXT'		=> 'Geen beschrijving',
	'ACP_DMP_IMG'				=> 'Logo afbeelding van uw partner',
	'ACP_DMP_IMG_DESC'			=> 'Voer hier de URL van de logo afbeelding van uw partner in (incl. https://)',
	'ACP_DMP_BG_IMG'			=> 'Bg_header.gif van uw partner',
	'ACP_DMP_BG_IMG_DESC'		=> 'Voer hier de URL in van de Bg_header.gif afbeelding van je partner (incl. https://)',
	'ACP_DMP_KLICKS'			=> 'URL klikken',
	'ACP_DMP_KLICKS_AKTIV'		=> 'Zal worden geteld',
	'ACP_DMP_NEED_DATA'			=> 'U moet een <strong>URL</strong> en een <strong>titel</strong> invoeren als u een partner wilt toevoegen.',
	'ACP_DMP_NEED_SITE'			=> 'U moet een <strong>titel</strong> invoeren als u uw site wilt toevoegen.',
	'ACP_DMP_NEED_URL'			=> 'U moet een <strong>URL</strong> invoeren als u uw site wilt toevoegen.',
	'ACP_DMP_NO_ENTRY'			=> 'Er zijn geen partners vermeld',
	'ACP_DMP_REALY_DELETE'		=> 'Weet u zeker dat u deze partner wilt verwijderen?',
	'ACP_DMP_SAVE_KLICK'		=> 'Klik teller geactiveerd',
	'ACP_DMP_SAVE_KLICK_DESC'	=> 'Als deze optie is geselecteerd, wordt de klik teller geactiveerd en weergegeven. U kunt een startwaarde invoeren in het veld hiernaast',
	'ACP_DMP_SETTING'			=> 'Tekstinstellingen',
	'ACP_DMP_SETTING_DESC'		=> 'Selecteer of je BBCodes, Smilies en / of URL links wilt gebruiken',
	'ACP_DMP_SITE'				=> 'Sitenaam van uw partner',
	'ACP_DMP_SITE_DESC'			=> 'Voer hier de naam of sitenaam van uw partner in. Dit wordt getoond als aanklikbare titel',
	'ACP_DMP_SMILY_SET'			=> 'Activeer Smilies',
	'ACP_DMP_TITLE_ADD'			=> 'Partner toevoegen',
	'ACP_DMP_TITLE_EDIT'		=> 'Partner bewerken',
	'ACP_DMP_UPDATED'			=> 'Partner is succesvol gewijzigd',
	'ACP_DMP_URL'				=> 'URL',
	'ACP_DMP_URL_DESC'			=> 'Voer hier de URL in naar de site van uw partner (incl. https://)',
	'ACP_DMP_URL_SET'			=> 'Actief URL gebruik',
	'ACP_DMP_EDIT_EXPLAIN'		=> 'Hier kunt u een bestaande partner bewerken',
	'ACP_DMP_ADD_EXPLAIN'		=> 'Hier kunt u een nieuwe partner toevoegen',
	'TOO_FEW_CHARS'				=> 'Uw bericht bevat te weinig karakters.',
));
