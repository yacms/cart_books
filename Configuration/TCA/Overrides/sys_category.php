<?php
declare(strict_types=1);

defined('TYPO3_MODE') or die();

$_LLL_db = 'LLL:EXT:cart_books/Resources/Private/Language/locallang_db.xlf:';

$newSysCategoryColumns = [
    'cart_book_list_pid' => [
        'exclude' => 1,
        'l10n_mode' => 'mergeIfNotBlank',
        'label' => $_LLL_db . 'tx_cartbooks_domain_model_category.cart_book_list_pid',
        'config' => [
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'show_thumbs' => 1,
            'default' => 0,
            'wizards' => [
                'suggest' => [
                    'type' => 'suggest',
                    'default' => [
                        'searchWholePhrase' => true,
                    ],
                ],
            ],
        ],
    ],
    'cart_book_show_pid' => [
        'exclude' => 1,
        'l10n_mode' => 'mergeIfNotBlank',
        'label' => $_LLL_db . 'tx_cartbooks_domain_model_category.cart_book_show_pid',
        'config' => [
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'show_thumbs' => 1,
            'default' => 0,
            'wizards' => [
                'suggest' => [
                    'type' => 'suggest',
                    'default' => [
                        'searchWholePhrase' => true,
                    ],
                ],
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category', $newSysCategoryColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'sys_category',
    'cart_book_list_pid, cart_book_show_pid',
    '',
    'after:description'
);
