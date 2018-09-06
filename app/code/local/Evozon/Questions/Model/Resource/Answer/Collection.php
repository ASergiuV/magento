<?php

/**
 * Class Evozon_Questions_Model_Resource_Answer_Collection
 * @author Georgiana Marian <georgiana.marian@evozon.com>
 * @category Evozon
 * @package  Evozon_Questions
 */
class Evozon_Questions_Model_Resource_Answer_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('evozon_questions/answer');
    }
}