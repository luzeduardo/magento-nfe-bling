<?php
class Lema21_Nfe_Block_Adminhtml_Sales_Order_View 
extends Mage_Adminhtml_Block_Sales_Order_View
{
    public function  __construct()
    { 
        $this->_addButton(
            'call_to_send_nfe', array( 
                'label'     => Mage::helper('Sales')->__('Emitir NF-e'), 
                'onclick'   => 'setLocation(\'' . $this->getUrlSend() . '\')', 
                'class'     => 'go' 
                ), 0, 100, 'header', 'header'
        ); 

        parent::__construct();  
    } 


    // route for send nfe
    // nfe/adminhtml_nfe/send 
    public function getUrlSend()
    {
        return $this->getUrl('nfe/adminhtml_nfe/send');
    }
} 
