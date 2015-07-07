<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Project
 *
 * @author sc
 */
class Contacts extends AppModel {

    var $name = "Contacts";
    public function setContacts(){
        $result = $this->find('all',array(
            'conditions' => array('id' => 3),
            'fields' => array('id','title','text')
            ));
        return $result;
    }
}
