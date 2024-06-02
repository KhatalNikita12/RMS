<?php

namespace App\Controllers;
use App\Models\Cart;
use App\Models\Fooditem;
use CodeIgniter\Shield\Models\UserModel as User;
use CodeIgniter\HTTP\ResponseInterface;

class CartController extends BaseController // Corrected the class name here
{

    public function show()
    {
       
        $cartModel = new Cart();
        $data['cart'] = $cartModel->findAll();
        
        return view('Viewcart', $data);
    }
    
    

    public function cartview()
    {
        $cartModel = new Cart();
        $userId = service('auth')->id();
        $data['cart'] = $cartModel->findAll();
        // $cartModel = new Cart();
    
        // Fetch cart items associated with the user's ID
        $data['cart'] = $cartModel->where('user_id', $userId)->findAll();
        // Calculate total sum
        $total = 0;
        foreach ($data['cart'] as $item) {
            $total += $item['total'];
        }
        $data['total'] = $total;
    
        return view('CartDetail', $data);
    }
    

    public function addToCart($foodId)
    {
        $foodModel = new Fooditem();
        $cartModel = new Cart();
        $userId = service('auth')->id();
    
        $food = $foodModel->find($foodId);
        if (!$food) {
            return redirect()->back()->with('error', 'Food not found.');
        }
    
        // Check if the food item already exists in the cart for the current user
        $existingCartItem = $cartModel->where('food_id', $foodId)
                                      ->where('user_id', $userId)
                                      ->first();
    
        if ($existingCartItem) {
            // If the food item exists for the current user, update its quantity
            $cartData = [
                'quantity' => $existingCartItem['quantity'] + 1,
            ];
    
            // Update the cart item
            $cartModel->update($existingCartItem['cart_id'], $cartData);
    
            // Update the total value
            $total = $food['price'] * $cartData['quantity'];
            $cartModel->set('total', $total)->update($existingCartItem['cart_id']);
    
            // Fetch the updated cart item including total
            $updatedCartItem = $cartModel->find($existingCartItem['cart_id']);
    
            return redirect()->to('/cartview')->with('status', 'Food added to cart successfully')->with('cartItem', $updatedCartItem);
        } else {
            // If the food item doesn't exist for the current user, add it to the cart
            $cartData = [
                'food_image' => $food['image'],
                'food_name' => $food['food_name'],
                'price' => $food['price'],
                'quantity' => 1,
                'total' => $food['price'], // Initial total value
                'food_id' => $food['id'],
                'user_id' => $userId,
            ];
    
            // Insert the new cart item
            $cartModel->insert($cartData);
    
            return redirect()->to('/cartview')->with('status', 'Food added to cart successfully');
        }
    }
    
public function bill($bid=null)
{
    $cartModel = new Cart();
    $data['cart'] = $cartModel->find($bid); // Assuming you have a method to fetch booking details by id
    return view('bill_detail', $data);
}
public function deletecart($id = null){
    $cartModel = new Cart();
    $data['cart'] = $cartModel->where('cart_id', $id)->delete($id);
    return $this->response->redirect(site_url('/cartview'));
}

public function update_cart_quantity() {
    $id = $this->input->getpost('cart_id');
    $quantity = $this->input->getpost('quantity');

    // Update the quantity for the specific cart item
    $updateStatus = $this->cart_model->update_quantity($id, $quantity);

    if ($updateStatus) {
        $subtotal = $this->cart_model->get_subtotal($id); // Implement this method
        $total = $this->cart_model->get_total(); // Implement this method

        echo json_encode(['success' => true, 'subtotal' => $subtotal, 'total' => $total]);
    } else {
        // Handle error
        echo json_encode(['success' => false]);
    }
}


}
