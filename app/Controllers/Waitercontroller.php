<?php

namespace App\Controllers;
use App\Models\Waiter;

use App\Controllers\BaseController;
//use CodeIgniter\HTTP\ResponseInterface;

class Waitercontroller extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function show()
      {
      
        $userModel = new Waiter();
        $data['waiter'] = $userModel->findAll();
        
        return view('Viewwaiter', $data);
      
        
    }

    public function create()
    {
      return view('addwaiter');
    }
    public function store(){
      $userModel = new Waiter();
      $data = [
          'name' => $this->request->getVar('name'),
          'address'  => $this->request->getVar('address'),
          'email'  => $this->request->getVar('email'),     
          'phone_no'  => $this->request->getVar('phone_no'), 
          'gender'  => $this->request->getVar('gender'), 
      ];
      $userModel->insert($data);
      return $this->response->redirect(site_url('/waiter'));
  }

  public function deletewaiter($id = null){
    $userModel = new Waiter();
    $data['waiter'] = $userModel->where('id', $id)->delete($id);
    return $this->response->redirect(site_url('/waiter'));
} 

public function singlewaiter($id = null){
    $userModel = new Waiter();
    $data['cust_obj'] = $userModel->where('id', $id)->first();
    return view('edit_waiter', $data);
}

public function update(){
  $userModel = new Waiter();
  $id = $this->request->getVar('id');
  $data = [
    'name' => $this->request->getVar('name'),
    'address'  => $this->request->getVar('address'),
    'email'  => $this->request->getVar('email'),     
    'phone_no'  => $this->request->getVar('phone_no'),
    'phone_no'  => $this->request->getVar('gender'),
  ];
  $userModel->update($id, $data);
  return $this->response->redirect(site_url('/waiter'));
}

}
