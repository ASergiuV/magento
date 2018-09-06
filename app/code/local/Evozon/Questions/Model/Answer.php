<?php

/**
 * Class Evozon_Questions_Model_Answer
 * @category Evozon
 * @package  Evozon_Questions
 * @author Georgiana Marian <georgiana.marian@evozon.com>
 */
class Evozon_Questions_Model_Answer extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('evozon_questions/answer');
    }
}