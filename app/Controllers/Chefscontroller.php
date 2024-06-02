<?php

namespace App\Controllers;
use App\Models\Chefs;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Chefscontroller extends BaseController
{
    public function show()
      {
      
        $chefModel = new Chefs();
        $data['Chefs'] = $chefModel->findAll();
        
        return view('ViewChef', $data);
      
        
    }
     public function create()
      {
        return view('addchef');
      }
      public function store(){
        $chefModel = new Chefs();
        $data = [
            'chefname' => $this->request->getVar('chefname'),
            'chefaddress'  => $this->request->getVar('chefaddress'),
            'chefemailid'  => $this->request->getVar('chefemailid'),
            'salary'  => $this->request->getVar('salary'),
        ];
        $chefModel->insert($data);
        return $this->response->redirect(site_url('/chef'));
    }
    
    // delete user
    public function deletechef($id = null){
        $chefModel = new Chefs();
        $data['Chefs'] = $chefModel->where('chefid', $id)->delete($id);
        return $this->response->redirect(site_url('/chef'));
    }   
      // show single user
    public function edituser($id = null){
        $chefModel = new Chefs();
        $data['user_obj'] = $chefModel->where('chefid', $id)->first();
        return view('edit_chef',$data);
    }
     // update user data
    public function updatechef(){
        $chefModel = new Chefs();
        $id = $this->request->getVar('chefid');
        $data = [
            'chefname' => $this->request->getVar('chefname'),
            'chefaddress'  => $this->request->getVar('chefaddress'),
            'chefemailid'  => $this->request->getVar('chefemailid'),
            'salary'  => $this->request->getVar('salary'),
        ];
        $chefModel->update($id, $data);
        // var_dump($data);
        // $chefModel->where('chefid', $id)->update($data);
        return $this->response->redirect(site_url('/chef'));
    }
}
