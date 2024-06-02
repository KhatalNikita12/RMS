<?php

namespace App\Controllers;
use App\Models\Customer;
use CodeIgniter\Shield\Models\UserModel as User;
use App\Controllers\BaseController;
//use CodeIgniter\HTTP\ResponseInterface;

class Customercontroller extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function show()
      {
      
        // $userModel = new Customer();
        // $data['customer'] = $userModel->findAll();
        
        // return view('Viewcustomer', $data);

        $userModel = new User();
        $data['User'] = $userModel->findAll();
        
        return view('Viewcustomer', $data);
      
        
    }

    public function create()
      {
        return view('addcustomer');
      }
      public function store(){
        $userModel = new Customer();
        $data = [
            'name' => $this->request->getVar('name'),
            'address'  => $this->request->getVar('address'),
            'email'  => $this->request->getVar('email'),     
            'phone_no'  => $this->request->getVar('phone_no'), 
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/customer'));
    }

    public function deletecust($id = null){
      $userModel = new Customer();
      $data['customer'] = $userModel->where('id', $id)->delete($id);
      return $this->response->redirect(site_url('/customer'));
  }   
    // show single user
  public function singlecustomer($id = null){
      $userModel = new Customer();
      $data['cust_obj'] = $userModel->where('id', $id)->first();
      return view('edit_customer', $data);
  }

  public function update(){
    $userModel = new Customer();
    $id = $this->request->getVar('id');
    $data = [
      'name' => $this->request->getVar('name'),
      'address'  => $this->request->getVar('address'),
      'email'  => $this->request->getVar('email'),     
      'phone_no'  => $this->request->getVar('phone_no'),
    ];
    $userModel->update($id, $data);
    return $this->response->redirect(site_url('/customer'));
 }
}
