<?php

namespace App\Controllers;
use App\Models\Food;
class Foodcontroller extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
      public function show()
      {
      
        $userModel = new Food();
        $data['food'] = $userModel->findAll();
        
        return view('ViewUser', $data);
      
        
    }
     public function create()
      {
        return view('adduser');
      }
      public function store(){
        $userModel = new Food();
        $data = [
            'foodname' => $this->request->getVar('foodname'),
            'category'  => $this->request->getVar('category'),
            'price'  => $this->request->getVar('price'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/user'));
    }
    
    // delete user
    public function delete($id = null){
        $userModel = new Food();
        $data['food'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/user'));
    }   
      // show single user
    public function singleUser($id = null){
        $userModel = new Food();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }
     // update user data
    public function update(){
        $userModel = new Food();
        $id = $this->request->getVar('id');
        $data = [
            'foodname' => $this->request->getVar('foodname'),
            'category'  => $this->request->getVar('category'),
            'price'  => $this->request->getVar('price'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/user'));
    }
    
    function addToCart($proID){
        
        // Fetch specific product by ID
        $product = $this->product->getRows($proID);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => $product['name'],
            'image' => $product['image']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    
}
