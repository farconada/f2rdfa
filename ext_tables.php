<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
    $_EXTKEY,
    'Person',
    'f2rdfa Person'
);


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'f2rdfa');

// Flexform para person
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_person'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_person', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_person.xml');

    // Icono en el asistente de elementos de contenido
if (TYPO3_MODE == 'BE') {
    $TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_f2rdfa_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'Classes/Util/class.tx_f2rdfa_wizicon.php';
}
?>