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

namespace ProudCommerce\SummerNoteFix\Application\Controller\Admin;


use OxidEsales\Eshop\Application\Model\Article;

class ArticleMain extends ArticleMain_parent
{
    use SummernoteFix;


    /**
     * @inheritdoc
     */
    protected function _processLongDesc($sValue)
    {
        return $this->fixSummernoteContent($sValue);
    }
}