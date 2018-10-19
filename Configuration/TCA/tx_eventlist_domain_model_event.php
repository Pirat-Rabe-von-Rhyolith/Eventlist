<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event',
        'label' => 'name',
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
        'searchFields' => 'name,beginning,link,description,location,organizer,tags',
        'iconfile' => 'EXT:eventlist/Resources/Public/Icons/tx_eventlist_domain_model_event.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, beginning, link, description, location, organizer, tags',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, beginning, link, description, location, organizer, tags, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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

        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'beginning' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.beginning',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'link' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'location' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.location',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_eventlist_domain_model_location',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'organizer' => [
            'exclude' => false,
            'label' => 'LLL:EXT:eventlist/Resources/Private/Language/locallang_db.xlf:tx_eventlist_domain_model_event.organizer',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_eventlist_domain_model_organizer',
                'minitems' => 0,
                'maxitems' => 1,
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
