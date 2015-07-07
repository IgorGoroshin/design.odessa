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
class ProjectsController extends AppController{
    //put your code here
    public function index(){
        $this->set('title_for_layout', 'Проекты');
        $Project = ClassRegistry::init('Project');
        $Image = ClassRegistry::init('Images');
        $rootProjects = $Project->getAllRootDirectories();
        foreach($rootProjects as $rootProjectNumber => $rootProject){
            $rootProjects[$rootProjectNumber]['Project']['data'] = $Project->getAllSubDirectories($rootProjects[$rootProjectNumber]['Project']['id']);
            $rootProjects[$rootProjectNumber]['Project']['is_root_directory'] = true;
        }
        foreach($rootProjects as $rootProjectNumber => $rootProject){
            foreach($rootProject['Project']['data'] as $childProjectNumber => $childProjectData){
                $rootProjects[$rootProjectNumber]['Project']['data'][$childProjectNumber]['Project']['preview'] = $Image->getPreviewByProjectId($childProjectData['Project']['id']);
            }
        }
        $projects = $rootProjects;
        $this->set('projects',$projects);
        $response['domain'] = $this->getDomain();
        $response['sfdomain'] = $this->getstaticFilesDomain();
        $this->set('data',$response);
    }
    public function view($id){
        
        $this->set('title_for_layout', 'Проект');
        if(!empty($id)){
            $response['domain'] = $this->getDomain();
            $response['sfdomain'] = $this->getstaticFilesDomain();
            $Images = ClassRegistry::init('Images');
            $response['Images'] = $Images->getImages($id);
            $response['ProjectIds'] = $Images->getProjectByKartinkaId($id);
            $Project = ClassRegistry::init('Project');
            $rootProjects = $Project->getAllRootDirectories();
            foreach($rootProjects as $rootProjectNumber => $rootProject){
                $rootProjects[$rootProjectNumber]['Project']['data'] = $Project->getAllSubDirectories($rootProjects[$rootProjectNumber]['Project']['id']);
                $rootProjects[$rootProjectNumber]['Project']['is_root_directory'] = true;
            }
            $projects = $rootProjects;
            $this->set('projects',$projects);
            $this->set('data',$response);
        }
        return false;
    }
    public function getMenu(){
        $Project = ClassRegistry::init('Project');
        $rootProjects = $Project->getAllRootDirectories();
        foreach($rootProjects as $rootProjectNumber => $rootProject){
            $rootProjects[$rootProjectNumber]['Project']['data'] = $Project->getAllSubDirectories($rootProjects[$rootProjectNumber]['Project']['id']);
            $rootProjects[$rootProjectNumber]['Project']['is_root_directory'] = true;
        }
        $projects = $rootProjects;
        $this->set('projects',$projects);
        $response['domain'] = $this->getDomain();
        $response['sfdomain'] = $this->getstaticFilesDomain();
        $this->set('data',$response);
    }
}
