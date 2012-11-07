<?php

class Lema21_Nfe_Adminhtml_NfeController 
extends Mage_Adminhtml_Controller_Action
{

    function sendAction()
    {
    
        try {
            $orderId = $this->getRequest()
                ->getParam('order_id');
            Mage::getModel('nfe/service_send', $orderId)->call();      
            $message = $this->__('Nota fiscal emitida com sucesso');
            Mage::getSingleton('adminhtml/session')->addSuccess($message);
        } catch (Exception $e) {      
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        }

        $this->_redirectReferer();
    }
}
