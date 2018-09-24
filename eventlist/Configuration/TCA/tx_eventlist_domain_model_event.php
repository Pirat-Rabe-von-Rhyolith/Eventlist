<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event',
        'label' => 'event_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'event_name,event_location,event_date,event_link,event_description,veranstalter,tags',
        'iconfile' => 'EXT:eventlist/Resources/Public/Icons/tx_eventlist_domain_model_event.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, event_name, event_location, event_date, event_link, event_description, veranstalter, tags',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, event_name, event_location, event_date, event_link, event_description, veranstalter, tags, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_eventlist_domain_model_event',
                'foreign_table_where' => 'AND tx_eventlist_domain_model_event.pid=###CURRENT_PID### AND tx_eventlist_domain_model_event.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'event_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.event_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'event_location' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.event_location',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],
        'event_date' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.event_date',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'event_link' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.event_link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'event_description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.event_description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'veranstalter' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.veranstalter',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_eventlist_domain_model_veranstalter',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'tags' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.tags',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectCheckBox',
                'foreign_table' => 'tx_eventlist_domain_model_tag',
                'MM' => 'tx_eventlist_event_tag_mm',
            ],
            
        ],
    
    ],
];
