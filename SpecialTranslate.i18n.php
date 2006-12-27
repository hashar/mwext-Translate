<?php
/**
 * Internationalisation file for Translate extension.
 *
 * @package MediaWiki
 * @subpackage Extensions
*/

$wgTranslateMessages = array();

$wgTranslateMessages['en'] = array(
	'translate' => 'Translate',
	'translate-show-label' => 'Show:',
	'translate-opt-trans' => 'Untranslated only',
	'translate-opt-optional' => 'Optional',
	'translate-opt-changed' => 'Changed only',
	'translate-opt-ignored' => 'Ignored',
	'translate-opt-database' => 'In database only',
	'translate-messageclass' => 'Message class:',
	'translate-sort-label' => 'Sort:',
	'translate-sort-normal' => 'Normal',
	'translate-sort-alpha'  => 'Alphabetical',
	'translate-fetch-button' => 'Fetch',
	'translate-export-button' => 'Export',
	'translate-edit-message-in' => 'Current string in <b>$1</b> (Messages$2.php):',
	'translate-edit-message-in-fb' => 'Current string in fallback language <b>$1</b> (Messages$2.php):',
);

/* German by Raymond */
$wgTranslateMessages['de'] = array(
	'translate' => 'Übersetze',
	'translate-show-label' => 'Zeige:',
	'translate-opt-trans' => 'Nur nicht übersetzte',
	'translate-opt-optional' => 'Optional',
	'translate-opt-changed' => 'Nur veränderte',
	'translate-opt-ignored' => 'ignoriert',
	'translate-opt-database' => 'Nur in Datenbank',
	'translate-messageclass' => 'Nachrichten-Klasse:',
	'translate-sort-label' => 'Sortierung:',
	'translate-sort-normal' => 'Normal',
	'translate-sort-alpha'  => 'Alphabetisch',
	'translate-fetch-button' => 'Holen',
	'translate-export-button' => 'Exportieren',
	'translate-edit-message-in' => 'Aktueller Text in <b>$1</b> (Messages$2.php):',
	'translate-edit-message-in-fb' => 'Aktueller Text in der Standard-Sprache <b>$1</b> (Messages$2.php):',
);

$wgTranslateMessages['he'] = array(
	'translate'                    => 'תרגום',
	'translate-show-label'         => 'הצג:',
	'translate-opt-trans'          => 'רק לא מתורגמות',
	'translate-opt-optional'       => 'אופציונאליות',
	'translate-opt-changed'        => 'רק אם השתנו',
	'translate-opt-ignored'        => 'אינן לתרגום',
	'translate-opt-database'       => 'במסד הנתונים בלבד',
	'translate-messageclass'       => 'סוג ההודעה:',
	'translate-sort-label'         => 'מיון:',
	'translate-sort-normal'        => 'רגיל',
	'translate-sort-alpha'         => 'אלפביתי',
	'translate-fetch-button'       => 'קבל',
	'translate-export-button'      => 'ייצוא',
	'translate-edit-message-in'    => 'המחרוזת הנוכחית ל־<b>$1</b> (Messages$2.php):',
	'translate-edit-message-in-fb' => 'המחרוזת הנוכחית ל־<b>$1</b> בשפת הגיבוי (Messages$2.php):',
);
$wgTranslateMessages['it'] = array(
	'translate' => 'Traduzioni',
	'translate-changed' => '$1 messaggi non modificati',
	'translate-database' => '$1 messaggi non presenti nel database',
	'translate-translated' => '$1 messaggi già tradotti',
	'translate-core' => '$1 messaggi non \'core\'',
	'translate-sort' => 'Ordina per: $1',
	'translate-export' => 'Esporta:',

	'translate-edit-message-in' => 'Contenuto attuale in <b>$1</b> (Messages$2.php):',
	'translate-edit-message-in-fb' => 'Contenuto attuale nella lingua di fallback <b>$1</b> (Messages$2.php):',
);
$wgTranslateMessages['sk'] = array(
	'translate' => 'Prelož',
	'translate-changed' => '$1 správ nezmenených',
	'translate-database' => '$1 správ, ktoré nie sú v databáze',
	'translate-translated' => '$1 správ nepreložených',
	'translate-core' => '$1 správ, ktoré nie sú základnými (core) správami',
	'translate-sort' => 'Zoradiť: $1',
	'translate-export' => 'Exportovať:',

	'translate-edit-message-in' => 'Aktuálny reťazec v jazyku <b>$1</b> (Messages$2.php):',
	'translate-edit-message-in-fb' => 'Aktuálny reťazec v jazyku <b>$1</b>, ktorý sa použije ak správa nie je preložená (Messages$2.php):',
);
$wgTranslateMessages['zh-cn'] = array(
	'translate' => '翻译',
	'translate-changed' => '$1 句信息未更改',
	'translate-database' => '$1 句信息不在数据库中',
	'translate-translated' => '$1 句信息已翻译',
	'translate-core' => '$1 信息不是核心信息',
	'translate-sort' => '排序: $1',
	'translate-export' => '导出:',

	'translate-edit-message-in' => '在 <b>$1</b> 的当前字串 (Messages$2.php):',
	'translate-edit-message-in-fb' => '在 <b>$1</b> 于倚靠语言中的当前字串 (Messages$2.php):',
);
$wgTranslateMessages['zh-tw'] = array(
	'translate' => '翻譯',
	'translate-changed' => '$1 句信息未更改',
	'translate-database' => '$1 句信息不在資料庫中',
	'translate-translated' => '$1 句信息已翻譯',
	'translate-core' => '$1 信息不是核心信息',
	'translate-sort' => '排序: $1',
	'translate-export' => '匯出:',

	'translate-edit-message-in' => '在 <b>$1</b> 的現行字串 (Messages$2.php):',
	'translate-edit-message-in-fb' => '在 <b>$1</b> 於倚靠語言中的現行字串 (Messages$2.php):',
);
$wgTranslateMessages['zh-yue'] = array(
	'translate' => '翻譯',
	'translate-changed' => '$1 句信息未更改',
	'translate-database' => '$1 句信息唔響資料庫度',
	'translate-translated' => '$1 句信息已翻譯',
	'translate-core' => '$1 信息唔係核心信息',
	'translate-sort' => '排次序: $1',
	'translate-export' => '倒出:',

	'translate-edit-message-in' => '響 <b>$1</b> 嘅現行字串 (Messages$2.php):',
	'translate-edit-message-in-fb' => '響 <b>$1</b> 於倚靠語言中嘅現行字串 (Messages$2.php):',
);
$wgTranslateMessages['zh-hk'] = $wgTranslateMessages['zh-tw'];
$wgTranslateMessages['zh-sg'] = $wgTranslateMessages['zh-cn'];

?>
