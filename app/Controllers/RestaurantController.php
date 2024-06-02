<?php

namespace App\Controllers;
use App\Models\Restaurant;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RestaurantController extends BaseController
{
    public function show()
    {
    
      $userModel = new Restaurant();
      $data['restaurant'] = $userModel->findAll();
      
      return view('Viewrestaurant', $data);
    
      
  }

  public function create()
    {
      return view('addrestaurant');
    }
    public function store(){
      $userModel = new Restaurant();
      $data = [
          'restname' => $this->request->getVar('restname'),
          'address'  => $this->request->getVar('address'),
        
      ];
      $userModel->insert($data);
      return $this->response->redirect(site_url('/resturant'));
  }

  public function deletenewrestuarant($id = null){
    $userModel = new Restaurant();
    $data['restaurant'] = $userModel->where('res_id', $id)->delete($id);
    return $this->response->redirect(site_url('/resturant'));
}   
  // show single user
public function editnewrestuarant($id = null){
    $userModel = new Restaurant();
    $data['res_obj'] = $userModel->where('res_id', $id)->first();
    return view('edit_restaurant', $data);
}

public function updaterestuarant(){
  $userModel = new Restaurant();
  $id = $this->request->getVar('res_id');
  $data = [
    'restname' => $this->request->getVar('restname'),
    'address'  => $this->request->getVar('address'),
  
  ];
  $userModel->update($id, $data);
  return $this->response->redirect(site_url('/resturant'));
}
}
