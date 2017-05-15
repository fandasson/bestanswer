<?php
/**
*
* Extension - Best Answer
*
* @copyright (c) 2015 kinerity <http://www.acsyste.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ANSWERED'	=> 'ZODPOVĚZENO',

	'BEST_ANSWER'	=> 'NEJLEPŠÍ ODPOVĚĎ',
	'BUTTON_MARK_ANSWER'	=> 'Označit jako nejlepší odpověď',
	'BUTTON_UNMARK_ANSWER'	=> 'Zrušit označení',

    'ENABLE_BESTANSWER'			=> 'Enable "Best Answer" feature',
    'ENABLE_BESTANSWER_EXPLAIN'	=> 'If enabled, the topic starter (if permitted) and moderators (where allowed) will be able to mark a topic reply as the "best answer".',
	'EXTENSION_NOT_ENABLED'		=> 'Rozšíření "Nejlepší odpvoěď" není pro toto fórum povolené',

	'FULL_POST'	=> 'CELÁ ODPOVĚĎ',

	'INVALID_FILTER'	=> 'The filter parameter is invalid. Please verify this variable is correct.',

	'LOG_MARK_ANSWER'	=> '<strong>Marked post as best answer</strong><br />» %1$s by %2$s',
	'LOG_UNMARK_ANSWER'	=> '<strong>Unmarked post as best answer</strong><br />» %1$s by %2$s',

	'MARK_ANSWER'			=> 'Označit jako nejlepší odpověď',
	'MARK_ANSWER_CONFIRM'	=> 'Opravdu si přejete označit tuto odpověď jako nejlepší?',

	'TOPIC_FIRST_POST'	=> 'You cannot mark this post as the best answer as it is the first post of the topic.',
	'TOPICS_ANSWERED'	=> 'Topics answered',

	'UNMARK_ANSWER'			=> 'Zrušit označení nejlepší odpovědi',
	'UNMARK_ANSWER_CONFIRM'	=> 'Opravdu si přejete tuto odpověď více nezobrazovat jako nejlepší?',
));
