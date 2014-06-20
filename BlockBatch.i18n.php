<?php
/**
 * Internationalisation for BlockBatch
 *
 * @file
 * @ingroup Extensions
 */
$messages = array();

/** English
 * @author Leucosticte
 */
$messages[ 'en' ] = array(
	'blockbatch' => "Block batch of users", // Important! This is the string that appears on Special:SpecialPages
	'blockbatch-desc' => "[[Special:BlockBatch|Special page]] to block a batch of users",
        'blockbatch-iptext' => 'Use the form below to block write access from specific IP addresses or usernames.
This should be done only to prevent vandalism, and in accordance with [[{{MediaWiki:Policy-url}}|policy]].
Fill in a specific reason below (for example, citing particular pages that were vandalized).',
        'blockbatch-ipbsubmit' => 'Block these users'
);

/** German (Deutsch)
* @author Kghbln
*/
$messages[ 'de' ] = array(
	'blockbatch' => "BlockBatch",
	'blockbatch-desc' => "Ergänzt eine [[Special:BlockBatch|Spezialseite]] zum gesammelten Sperren von Benutzern",
	'blockbatch-iptext' => 'Nutze das untenstehende Forumlar, um den Schreibzugriff bestimmter Benutzer oder IP-Adressen zu sperren.
Dies sollte ausschließlich zur Verhinderung von Vandalismus und in Übereinstimmung mit der [[{{MediaWiki:Policy-url}}|Richtlinie diese Wikis]] erfolgen.
Gib zudem einen Grund für die Sperrung an, bspw. den Hinweis auf die vadalisierten Inhalte.',
	'blockbatch-ipbsubmit' => 'Benutzer sperren'
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages[ 'de-formal' ] = array(
	'blockbatch-iptext' => 'Nutzen Sie das untenstehende Forumlar, um den Schreibzugriff bestimmter Benutzer oder IP-Adressen zu sperren.
Dies sollte ausschließlich zur Verhinderung von Vandalismus und in Übereinstimmung mit der [[{{MediaWiki:Policy-url}}|Richtlinie diese Wikis]] erfolgen.
Geben Sie zudem einen Grund für die Sperrung an, bspw. den Hinweis auf die vadalisierten Inhalte.'
        );
