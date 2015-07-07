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
class Galleries extends AppModel {

    var $name = "Projects";
    public function getGalleries(){
        $result = $this->find('all',array(
            'conditions' => array('parent_id' => 'null'),
            'fields' => array('id','name','parent_id','path')
            ));
        return $result;
    }
}
