<?php

namespace App\Controllers;

use App\Models\OfficerModel;

class Mainapp extends BaseController
{
    public function index(): string
    {
		$session = \Config\Services::session();
		$session->destroy();
        return view('login');
    }
	
	public function home(): string
    {
		$session = \Config\Services::session();
        $sessiondata = $session->get();
        if(!(isset($sessiondata['logged'])) || !$sessiondata['logged']){
            $this->response->redirect(base_url()); 
            return false;
        }
		$data['username'] = $sessiondata['username'];
        return view('home',$data);
    }
	
	public function addofficer(): string
    {
		$session = \Config\Services::session();
        $sessiondata = $session->get();
        if(!(isset($sessiondata['logged'])) || !$sessiondata['logged']){
            $this->response->redirect(base_url()); 
            return false;
        }
		$data['username'] = $sessiondata['username'];
        return view('addofficer',$data);
    }
	
	public function editofficer(): string
    {
		$session = \Config\Services::session();
        $sessiondata = $session->get();
        if(!(isset($sessiondata['logged'])) || !$sessiondata['logged']){
            $this->response->redirect(base_url()); 
            return false;
        }
		$data['username'] = $sessiondata['username'];
		$this->officermodel = new OfficerModel();
		$data['officers'] = $this->officermodel->getAllOfficers();
        return view('editofficer',$data);
    }
}
