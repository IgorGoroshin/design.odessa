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
class ContactsController extends AppController{
    public function index(){
    $this->set('title_for_layout', 'Обратная связь');
    $info = ClassRegistry::init('About');
    $address = $info->getAddress();
    $phone = $info->getPhone();
    $info = [];
    $info['address'] = $address;
    $info['phone'] = $phone;
    $this->set('data',$info);
        if(isset($this->request->data['Contact']['username']) && isset($this->request->data['Contact']['phone']) && isset($this->request->data['Contact']['message'])){
        }
    }
}
