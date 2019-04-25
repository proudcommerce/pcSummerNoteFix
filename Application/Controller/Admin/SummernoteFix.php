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

use OxidEsales\Eshop\Core\Model\MultiLanguageModel;

trait SummernoteFix
{
    /**
     * Objects editing language (default 0).
     *
     * @var integer
     */
    protected $_iEditLang = 0;


    /**
     * Behebt das speichern des Summernote-Editors (&gt; in manchen Browsern)
     *
     * @param string $modelClass
     * @param string $parameter
     */
    protected function saveSummernoteContent(string $modelClass, string $parameter)
    {
        /** @var MultiLanguageModel $object */
        $object = oxNew($modelClass);
        $object->loadInLang($this->_iEditLang, $this->getEditObjectId());

        /** @var string $content */
        $content = $object->$parameter->rawValue;

        $content = $this->fixSummernoteContent($content);

        $object->assign([
           $parameter => $content,
        ]);

        try {
            $object->save();
        } catch (\Exception $e) {

        }
    }

    /**
     * Führt den Summernote-Fix aus
     *
     * @param string $content
     * @return string
     */
    protected function fixSummernoteContent(string $content): string
    {
        $regex = '/(\[\{.*){1}(&gt;){1,}(.*\}\]){1}/mi';

        while(preg_match($regex, $content)) {
            $content = preg_replace($regex, '$1>$3', $content);
        }

        return $content;
    }
}