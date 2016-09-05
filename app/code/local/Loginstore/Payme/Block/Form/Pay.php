<?php

class Loginstore_Payme_Block_Form_Pay extends Mage_Payment_Block_Form_Ccsave {

    protected function _construct() {
        parent::_construct();
        $this->setTemplate('payme/form/payme.phtml');
    }

}
