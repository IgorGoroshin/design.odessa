<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProjectsController
 *
 * @author sc
 */
class ExamplesController extends AppController{
    //put your code here
    public function index(){
    $rootProjects = ClassRegistry::init('Project');
    $kartinki = ClassRegistry::init('Images');
    $data = $rootProjects->getAllRootDirectories();
    foreach($data as $projectNum => $project){
        $childProject = $rootProjects->getFirstProjectByRootProject($data[$projectNum]['Project']['id']);
        $data[$projectNum]['Project']['thumb'] = @$kartinki->getPreviewByProjectId($childProject['Project']['id']);
    }
    $data['domain'] = $this->getDomain();
    $data['description'] = 'Тут вы можете ознакомиться с нашими работами сгруппированными по типам';
    $this->set('data',$data);
    }
    public function view($projId){
        $rootProjects = ClassRegistry::init('Project');
        $images = ClassRegistry::init('Images');
        $data = $rootProjects->getAllSubDirectories($projId);
        foreach($data as $projectNum => $project){
            $data[$projectNum]['Project']['images'] = $images->getPreviews($data[$projectNum]['Project']['id']);
        }
        $data['domain'] = $this->getDomain();
        $this->set('data',$data);
    }
    public function detailed($projId){
        $images = ClassRegistry::init('Images');
        $data = $images->getImages($projId);
        $data['domain'] = $this->getDomain();
        $this->set('data',$data);
    }

}
