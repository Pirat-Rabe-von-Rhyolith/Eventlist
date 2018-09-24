<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Tug.Eventlist',
            'Eventlisting',
            'Event-Eventlisting'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('eventlist', 'Configuration/TypoScript', 'Eventlist Extension');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_eventlist_domain_model_event', 'EXT:eventlist/Resources/Private/Language/locallang_csh_tx_eventlist_domain_model_event.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_eventlist_domain_model_event');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_eventlist_domain_model_veranstalter', 'EXT:eventlist/Resources/Private/Language/locallang_csh_tx_eventlist_domain_model_veranstalter.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_eventlist_domain_model_veranstalter');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_eventlist_domain_model_tag', 'EXT:eventlist/Resources/Private/Language/locallang_csh_tx_eventlist_domain_model_tag.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_eventlist_domain_model_tag');

    }
);
