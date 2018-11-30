<?php

class Dibbas_HelloWorld_FooController extends Mage_Core_Controller_Front_Action
{
    public function IndexAction() {
        echo '<dl>';            
        foreach($this->getRequest()->getParams() as $key=>$value) {
            echo '<dt><strong>Param: </strong>'.$key.'</dt>';
            echo '<dl><strong>Value: </strong>'.$value.'</dl>';
        }
        echo '</dl>';
    }
}