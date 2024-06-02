<?php

namespace App\Controllers;
use App\Models\tblbookings;
use App\Models\Fooditem;
use App\Models\Customer;
use App\Models\EMP;
use App\Models\cart;
use App\Models\Waiter;
use CodeIgniter\Shield\Models\UserModel as User;
//use App\Models\User;
class Home extends BaseController
{
    public function index(): string
    {
        $NewfoodModel = new Fooditem();
        $data['fooditem'] = $NewfoodModel->findAll();
        // return view('ViewnewFood', $data);
        return view('welcome_message',$data);
    }
    // public function show(): string
    // {
    //     return view('welcome_message');
    // }
    public function side(): string
    {
        return view('sidebar');
    }
    public function contact(): string
    {
        return view('contact');
    }
    public function aboutus()
  {
    
      return view('aboutus');
  }

  public function userbody()
  {
    
    $NewfoodModel = new Fooditem();
    $data['fooditem'] = $NewfoodModel->findAll();
      return view('userbody');
  }
    public function admin(): string
    
    {
        $bookingModel = new Tblbookings();
         
        $foodModel = new fooditem();
        $userModel=new Customer();
        $userModel=new Waiter();
        $userId = new User();
        $emp = new EMP();
        $cart = new cart();
        $data['tblbookings'] = count($bookingModel->findAll()); 
        $data['foodcount'] = count($foodModel->findAll()); 
        $data['customercount'] = count($userModel->findAll()); 
        $data['waitercount'] = count($userModel->findAll()); 
        $data['user'] = count($userId->findAll());
        $data['emp'] = count($emp->findAll());
        $data['cart'] = count($cart->findAll());
        return view('dashboard', $data);
    }
}
