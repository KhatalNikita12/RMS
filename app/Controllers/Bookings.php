<?php

namespace App\Controllers;
use App\Models\Tblbookings;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Bookings extends BaseController
{
    
    public function create()
    {
      return view('reserve_table');
    }
    
    public function status()
    {
      return view('Booking_status');
    }
    public function searchstatus()
    {
      return view('search_result');
    }
    public function show()
    {
    
      $chefModel = new Tblbookings();
      $data['tblbookings'] = $chefModel->findAll();
      
      return view('ViewTable', $data);
    
      
  }
    public function store()
    {
        $model = new Tblbookings();

        $data = [
            'bookingNo'    => mt_rand(100000000, 9999999999),
            'fullName'     => $this->request->getVar('name'),
            'emailId'      => $this->request->getVar('email'),
            'phoneNumber'  => $this->request->getVar('phonenumber'),
            'bookingDate'  => $this->request->getVar('bookingdate'),
            'bookingTime'  => $this->request->getVar('bookingtime'),
            'noAdults'     => $this->request->getVar('noadults'),
            'noChildrens'  => $this->request->getVar('nochildrens'),
            'boookingStatus'  =>'notaccepted',
        ];

        if ($model->insert($data) === false) {
            $error = $model->errors();
          
            echo "<script>alert('Insert failed: " . addslashes(print_r($error, true)) . "'); window.history.back();</script>";
            return;
        }
    

        echo "<script>alert('Thank You " . $data['fullName'] . " For reserving table. Your Booking number is " . $data['bookingNo'] . "'); window.location.href='/booktable';</script>";

    }    
    public function search()
    {
        helper(['form']); // Load the form helper for the search form
        $data = [];

        if ($this->request->getMethod() == 'post') {
            $searchData = $this->request->getPost('searchdata');
            $model = new Tblbookings();
            $data['tblbookings'] = $model->searchBookings($searchData);
            $data['searchData'] = $searchData;
        }

        return view('search_results', $data);
    }
    public function deletetable($id = null){
      $Model = new Tblbookings();
      $data['tblbookings'] = $Model->where('id', $id)->delete($id);
      return $this->response->redirect(site_url('/table'));
  } 

  public function bookingDetails($bid=null)
  {
      $bookingModel = new Tblbookings();
      $data['tblbookings'] = $bookingModel->find($bid); // Assuming you have a method to fetch booking details by id
      return view('booking_detail', $data);
  }

}
