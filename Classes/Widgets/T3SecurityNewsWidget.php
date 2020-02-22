<?php
declare(strict_types=1);

namespace Bo\SecurityNewsWidget\Widgets;

use TYPO3\CMS\Dashboard\Widgets\AbstractRssWidget;

/**
 * This widget will show the latest security news from the TYPO3 news RSS feed
 * right on the dashboard.
 *
 * @author  Oliver Bartsch <bo@cedev.de>
 */
class T3SecurityNewsWidget extends AbstractRssWidget
{
    protected $rssFile = 'https://typo3.org/?type=101';
    protected $lifeTime = 43200;
    protected $title = 'LLL:EXT:t3security_news_widget/Resources/Private/Language/locallang.xlf:widgets.t3securityNews.title';
    protected $description = 'LLL:EXT:t3security_news_widget/Resources/Private/Language/locallang.xlf:widgets.t3securityNews.description';
    protected $iconIdentifier = 'content-widget-rss';
    protected $moreItemsLink = 'https://typo3.org/help/security-advisories';
    protected $moreItemsText = 'LLL:EXT:t3security_news_widget/Resources/Private/Language/locallang.xlf:widgets.t3securityNews.moreItems';
}
