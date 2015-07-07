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
class ModerateController extends ModerateAppController{

    public function checkAuth(){
        if(isset($this->request->data['Moderate']['login']) && $this->request->data['Moderate']['login'] == 'admin' && $this->request->data['Moderate']['password'] == 'admin'){
            CakeSession::write('login',$this->request->data['Moderate']['login']);
            CakeSession::write('password',$this->request->data['Moderate']['password']);
            return true;
        } elseif(!empty(CakeSession::read('login')) && !empty(CakeSession::read('password'))){
            if(CakeSession::read('login') != 'admin' && CakeSession::read('password') != 'admin'){
                return true;
            }
        } else {
            return false;
        }
    }
}
