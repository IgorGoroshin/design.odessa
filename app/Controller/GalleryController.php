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
class GalleryController extends AppController{
    public function index(){
    $gals = ClassRegistry::init('Project');
    $imgs = ClassRegistry::init('Images');
    $guls = $gals->getAllRootDirectories();
    foreach($guls as $galId => $galData){
        $guls[$galId]['Project']['data'] = $gals->getAllSubDirectories($galData['Project']['id']);
        foreach($guls[$galId]['Project']['data'] as $subImgIds => $subImgsLink){
            $guls[$galId]['Project']['data'][$subImgIds]['Project']['links'] = $imgs->getPreviews($subImgsLink['Project']['id']);
        }
    }
    $guls['domain'] = $this->getDomain();
    $this->set('data',$guls);
    }
}
