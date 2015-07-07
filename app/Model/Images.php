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
class Images extends AppModel {

    var $name = "Images";
    public function getImages($id){
        if(!empty($id)){
        $result = $this->find('all',array(
            'conditions' => array('project_id' => $id),
            'fields' => array('id','name','project_id','link')
            ));
        return $result;
        }
        return false;
    }
    public function getPreviews($id){
        if(!empty($id)){
        $result = $this->find('all',array(
            'conditions' => array('project_id' => $id),
            'fields' => array('id','name','project_id','link'),
            'limit' => 4,
            ));
        return $result;
        }
        return false;
    }
    public function getProjectByKartinkaId($id){
        if(!empty($id)){
        $result = $this->find('all',array(
            'conditions' => array('id' => $id),
            'fields' => array('project_id')
            ));
        return $result;
        }
        return false;
    }
    public function getPreviewByProjectId($projId){
        if(!empty($projId)){
            $result = $this->find('first',array(
                'conditions' => array('project_id' => $projId),
                'fields' => array('link')
                ));
            return $result;
        }
        return false;
    }
}
