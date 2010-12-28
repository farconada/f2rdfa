<?php
if (!defined ('TYPO3_MODE'))    die ('Access denied.');

/**
 * Esta extension configura varios plugins
 */
// TODO hacer que las acciones sean cacheables

Tx_Extbase_Utility_Extension::configurePlugin(
    $_EXTKEY,
    'Person',
    array(
        'Rdfa' => 'person',
    ),
    array(
        'Rdfa' => 'person',
    )
);



// Preview del plugin en la vista de lista
if (TYPO3_MODE == 'BE') {
            // Hook for the TV page module used for preview of content
        $TYPO3_CONF_VARS['EXTCONF']['templavoila']['mod1']['renderPreviewContentClass']['f2rdfa_bepreview'] = 'EXT:f2rdfa/Classes/Util/class.tx_f2rdfa_bepreview.php:tx_f2rdfa_bepreview';
}

?>
