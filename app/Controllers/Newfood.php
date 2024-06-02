<?php

namespace App\Controllers;
use App\Models\Fooditem;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Newfood extends BaseController
{
    public function show()
    {
        $NewfoodModel = new Fooditem();
        $data['Newfood'] = $NewfoodModel->findAll();
        return view('ViewnewFood', $data);
    }

    public function create()
    {
        return view('add_food_view');
    }
    public function foodbody()
    {
        $NewfoodModel = new Fooditem();
        $data['fooditem'] = $NewfoodModel->findAll();
        return view('foodbody', $data);
    }

   
    
    public function store()
    {
        // Instantiate Fooditem model
        $model = new Fooditem();
    
        // Process image upload if a file was uploaded
        $file = $this->request->getFile('image');
        $imageName = ''; // Default value if no file uploaded
    
        if ($file->isValid() && !$file->hasMoved()) {
            // Assuming you are saving file name in the database and file itself in a folder
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName); // Move file to a folder in your project
        }
    
        // Prepare data to be inserted into the database
        $data = [
            'food_name' => $this->request->getVar('food_name'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'image' => $imageName, // Storing image file name in the database
        ];
    
        // Insert data into the database
        $model->save($data);
        
        // Redirect to the appropriate page
        return redirect()->to('/newfood')->with('status', 'Product data and image saved');
    }
    
    // Delete food item
    public function deletenewfood($id = null)
    {
        $userModel = new Fooditem();
        $userModel->where('id', $id)->delete();
        return redirect()->to('/newfood');
    } 
      
    public function editfood($id = null)
    {
        $userModel = new Fooditem();
        $data['food_obj'] = $userModel->where('id', $id)->first();
        return view('edit_food', $data);
    }
     
    // Update food data
    public function updatefood()
    {
        $userModel = new Fooditem();
        $id = $this->request->getVar('id');
        
        // Process image upload if a file was uploaded
        $file = $this->request->getFile('image');
        $imageName = ''; // Default value if no file uploaded
    
        if ($file->isValid() && !$file->hasMoved()) {
            // Assuming you are saving file name in the database and file itself in a folder
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName); // Move file to a folder in your project
        }
    
        $data = [
            'food_name' => $this->request->getVar('food_name'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'image' => $imageName, // Update image file name in the database
        ];
        
        $userModel->update($id, $data);
        return redirect()->to('/newfood');
    }
   
    
}
?>
