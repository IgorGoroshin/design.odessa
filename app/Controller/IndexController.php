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
class IndexController extends AppController{
    //put your code here
    public function index(){
    $this->set('title_for_layout', 'Главная');
    $About = ClassRegistry::init('About');
    $about = $About->getMainInfo();
    $links[0] = '/img/projects/4/1.jpg';
    $links[1] = '/img/projects/7/1.jpg';
    $links[2] = '/img/projects/8/1.jpg';
    $about['links'] = $links;
    $this->set('data',$about);
    }
}
