<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Tug.Eventlist',
            'Eventlisting',
            [
                'Event' => 'list,show,tag',
                'Location' => 'list, show',
            ],
            // non-cacheable actions
            [
                'Event' => 'list,show,tag',
                'Location' => 'list, show',
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    eventlisting {
                        iconIdentifier = eventlist-plugin-eventlisting
                        title = LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_eventlisting.name
                        description = LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_eventlisting.description
                        tt_content_defValues {
                            CType = list
                            list_type = eventlist_eventlisting
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'eventlist-plugin-eventlisting',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:eventlist/Resources/Public/Icons/user_plugin_eventlisting.svg']
			);
		
    }
);
