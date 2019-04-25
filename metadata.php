<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @copyright (c) ProudCommerce | 2019
 * @link www.proudcommerce.com
 * @package pcSummerNoteFix
 * @version 1.0.0
 **/

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'           => 'pcSummerNoteFix',
    'title'        => 'pcSummerNoteFix',
    'description'  => 'Behebt Smarty-Probleme nach dem Speichern des Summernote-Editors.',
    'thumbnail'    => '',
    'version'      => '1.0.0',
    'author'       => 'ProudCommerce',
    'url'          => 'https://www.proudcommerce.com',
    'email'        => 'support@proudcommerce.com',
    'extend'       => [
        \OxidEsales\Eshop\Application\Controller\Admin\ContentMain::class
            => \ProudCommerce\SummerNoteFix\Application\Controller\Admin\ContentMain::class,

        \OxidEsales\Eshop\Application\Controller\Admin\ArticleMain::class
            => \ProudCommerce\SummerNoteFix\Application\Controller\Admin\ArticleMain::class,

        \OxidEsales\Eshop\Application\Controller\Admin\CategoryText::class
            => \ProudCommerce\SummerNoteFix\Application\Controller\Admin\CategoryText::class,
    ],

    'controllers' => [
    ],

    'events'       => [
    ],

    'templates'   => [
    ],

    'blocks' => [
    ],

    'settings' => [
    ],
];
