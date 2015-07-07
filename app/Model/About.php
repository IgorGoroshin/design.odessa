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
class About extends AppModel {

    var $name = "Articles";
    public function getAbout(){
        $result = $this->find('all',array(
            'conditions' => array('id' => 1),
            'fields' => array('id','title','text')
            ));
        return $result;
    }
    public function getMainInfo(){
        $result = $this->find('all',array(
            'conditions' => array('id' => 2),
            'fields' => array('id','title','text')
            ));
        return $result;
    }
    public function getAddress(){
        $result = $this->find('first',array(
            'conditions' => array('id' => 3),
            'fields' => array('id','title','text')
            ));
        return $result;
    }
    public function getPhone(){
        $result = $this->find('first',array(
            'conditions' => array('id' => 4),
            'fields' => array('id','title','text')
            ));
        return $result;
    }
}
