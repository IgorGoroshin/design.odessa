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
class AboutController extends AppController{
    //put your code here
    public function index(){
    $this->set('title_for_layout', 'О компании');
    $About = ClassRegistry::init('About');
    $about = $About->getAbout();
    $this->set('data',$about);
    }
}
