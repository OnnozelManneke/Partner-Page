<?php
/**
*
* @package phpBB Extension - Partner Page
* @copyright (c) 2015 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'DM_PARTNERS'			=> 'Partners',
	'PARTNERS'				=> 'Partners',
	'DM_PARTNERS_EXPLAIN'	=> 'Bekijk onze partners',
	'DMP_ADD'				=> 'Nieuwe partner toevoegen',
	'DMP_ADDED'				=> 'Uw pagina is succesvol toegevoegd. De beheerder controleert uw verzoek en activeert het als alles in orde is.<br>',
	'DMP_ADD_BACK_LINK'		=> '<br>Klik %shier%s om uw invoer opnieuw te starten.',
	'DMP_BACK_LINK'			=> 'Klik %shier%s om terug te keren naar de partnerpagina.',
	'DMP_COUNT'				=> ' Klik',
	'DMP_COUNTS'			=> ' Klikken',
	'DMP_DESC'				=> 'Beschrijving van uw site(*) ',
	'DMP_DESC_DESC'			=> 'Voer een gedetailleerde beschrijving van uw pagina in. Je kunt BBCodes en Smilies gebruiken',
	'DMP_DESC_FRONT'		=> 'Hier vindt u onze partners',
	'DMP_EMPTY_TEXT'		=> 'Geen beschrijving',
	'DMP_GO_ADD'			=> 'Voeg uw site toe',
	'DMP_IMG'				=> 'Logo van uw site ',
	'DMP_IMG_DESC'			=> 'Voer hier de URL naar het logo van uw site in (<strong>incl. https://</strong>).<br>De URL mag het maximale aantal van 255 tekens niet overschrijden!<br>De afbeeldingsbreedte mag niet meer zijn dan 400px.',
	'DMP_NEED'				=> 'Velden met een (*) moeten worden ingevuld!',
	'DMP_BG_IMG'			=> 'Bg_header.gif van je partner',
	'DMP_BG_IMG_DESC'		=> 'Voer hier de URL van de Bg_header.gif afbeelding van uw partner in (<strong>incl. https://</strong>)',
	'DMP_NEED_DATA'			=> 'U moet een <strong>URL</strong> en een <strong>titel</strong> invoeren als u uw site wilt toevoegen.',
	'DMP_NEED_SITE'			=> 'U moet een <strong>titel</strong> invoeren als u uw site wilt toevoegen.',
	'DMP_NEED_URL'			=> 'U moet een <strong>URL</strong> invoeren als u uw site wilt toevoegen.',
	'DMP_NEW_ENTRY'			=> 'U heeft aanvragen voor nieuwe partners. Ga alsjeblieft naar je beheerderspaneel en controleer ze!',
	'DMP_NO_ENTRY'			=> 'Geen partners voor %s',
	'DMP_SITE'				=> 'Naam van uw site (*) ',
	'DMP_SITE_DESC'			=> 'Voer hier de naam van uw site in. Deze naam wordt weergegeven als titel.',
	'DMP_TITLE_ADD'			=> 'Voeg uw site toe',
	'DMP_TITLE_ADD_DESC'	=> 'Hier kunt u uw eigen pagina toevoegen, mocht u graag als partner van ons worden vermeld.<br>Gelieve onderstaand formulier in te vullen en uw inzending zorgvuldig te controleren! U kunt het item achteraf niet meer bewerken.',
	'DMP_URL'				=> 'URL naar uw site (*) ',
	'DMP_URL_DESC'			=> 'Voer de URL naar uw site in (<strong>incl. https://</strong>).<br>De URL mag het maximale aantal van 255 tekens niet overschrijden!',
	'DMP_VIEW_NOT_ALLOWED'	=> 'Sorry, maar u heeft geen toestemming om onze partnerpagina’s te bekijken!',
));