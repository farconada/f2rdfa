<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
    $_EXTKEY,
    'Person',
    'f2rdfa Person'
);

Tx_Extbase_Utility_Extension::registerPlugin(
    $_EXTKEY,
    'Event',
    'f2rdfa Event'
);

Tx_Extbase_Utility_Extension::registerPlugin(
    $_EXTKEY,
    'Organization',
    'f2rdfa Organization'
);

Tx_Extbase_Utility_Extension::registerPlugin(
    $_EXTKEY,
    'Recipe',
    'f2rdfa Recipe'
);


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'f2rdfa');

// Flexform para person
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_person'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_person', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_person.xml');
// Flexform para event
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_event'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_event', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_event.xml');
// Flexform para organization
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_organization'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_organization', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_organization.xml');
// Flexform para recipe
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_recipe'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_recipe', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_recipe.xml');

    // Icono en el asistente de elementos de contenido
if (TYPO3_MODE == 'BE') {
    $TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_f2rdfa_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'Classes/Util/class.tx_f2rdfa_wizicon.php';
}
?>