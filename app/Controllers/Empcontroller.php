<?php

namespace App\Controllers;
use App\Models\EMP;

use App\Controllers\BaseController;
//use CodeIgniter\HTTP\ResponseInterface;

class EMPcontroller extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function show()
      {
      
        $EmpModel = new EMP();
        $data['employee'] = $EmpModel->findAll();
        
        return view('ViewEMP', $data);
      
        
    }

    public function create()
    {
      return view('addEMP');
    }
    public function store(){
      $EmpModel = new EMP();
      $data = [
          'name' => $this->request->getVar('name'),
          'address'  => $this->request->getVar('address'),
          'email'  => $this->request->getVar('email'),     
          'phone_no'  => $this->request->getVar('phone_no'), 
          'gender'  => $this->request->getVar('gender'), 
          'emp_type'  => $this->request->getVar('emp_type'), 
          'res_id'=>'1',
      ];
      $EmpModel->insert($data);
      return $this->response->redirect(site_url('/emp'));
  }

  public function deleteemp($id = null){
    $EmpModel = new EMP();
    $data['EMP'] = $EmpModel->where('emp_id', $id)->delete($id);
    return $this->response->redirect(site_url('/emp'));
} 

public function singleEMP($id = null){
    $EmpModel = new EMP();
    $data['emp_obj'] = $EmpModel->where('emp_id', $id)->first();
    return view('edit_EMP', $data);
}

public function update(){
  $EmpModel = new EMP();
  $id = $this->request->getVar('emp_id');
  $data = [
    'name' => $this->request->getVar('name'),
    'address'  => $this->request->getVar('address'),
    'email'  => $this->request->getVar('email'),     
    'phone_no'  => $this->request->getVar('phone_no'),
    'gender'  => $this->request->getVar('gender'),
    'emp_type'  => $this->request->getVar('emp_type'), 
  ];
  $EmpModel->update($id, $data);
  return $this->response->redirect(site_url('/emp'));
}

}
