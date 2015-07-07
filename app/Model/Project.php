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
class Project extends AppModel {
    var $name = "Project";
    public function getAllRootDirectories(){
        $result = $this->find('all',array(
            'conditions' => array('parent_id' => null),
            'fields' => array('id','name','parent_id')
            ));
        return $result;
    }
    public function getAllSubDirectories($id=null){
        if(!is_null($id)){
            $result = $this->find('all',array(
            'conditions' => array('parent_id' => $id),
            'fields' => array('id','name','parent_id')
            ));
        return $result;
        }
        return false;
    }
    public function getFirstProjectByRootProject($rootProjId){
        if(!empty($rootProjId)){
            $result = $this->find('first',array(
                'conditions' => array('parent_id' => $rootProjId),
                'fields' => array('id')
                ));
            return $result;
        }
        return false;
    }
}
