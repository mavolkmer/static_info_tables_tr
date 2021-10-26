<?php
defined('TYPO3') || die;

call_user_func(function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TypoScript/Extbase/setup.typoscript">'
    );


    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['staticInfoTablesTr_importStaticData']
        = \Renolit\StaticInfoTablesTr\Updates\ImportStaticDataUpdateWizard::class;

}, 'static_info_tables_tr');