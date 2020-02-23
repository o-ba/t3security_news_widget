<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
        "@import 'EXT:t3security_news_widget/Configuration/TSconfig/User/options.tsconfig'"
    );
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'tx-t3security_news_widget-widget-icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3security_news_widget/Resources/Public/Icons/Extension.svg']
    );
    $iconRegistry->registerIcon(
        'tx-t3security_news_widget-dashboard-icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:t3security_news_widget/Resources/Public/Icons/Dashboard.svg']
    );
});
