<?php

/**
 * Class Evozon_Question_Model_Resource_Answer
 * @author Georgiana Marian <georgiana.marian@evozon.com>
 */
class Evozon_Question_Model_Resource_Answer extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('evozon_questions/question', 'answer_id');
    }
}