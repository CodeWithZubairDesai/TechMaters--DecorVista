<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addtocart($id)
    {
        try {
            // Find the product by ID
            $prod = Product::find($id);

    
            // Check if the product exists
            if (!$prod) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Product not found',
                    'data' => null,
                ], 404);
            }
    
            // Retrieve the cart from the session or initialize an empty array
            $cart = session()->get("cart1", []);
    
            // If product is already in the cart, increase the quantity
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                // Add the product to the cart with initial quantity 1
                $cart[$id] = [
                    "PdtName" => $prod->name,
                    "PdtPrice" => $prod->price,
                    "PdtDesc" => $prod->description,
                    "quantity" => 1,
                ];
            }
    
            // Update the cart in the session
            session()->put("cart1", $cart);
    
            // Return a success response
            return response()->json([
                'status' => 'success',
                'message' => 'Product added to cart successfully',
                'data' => $cart,
            ], 200);
    
        } catch (\Throwable $th) {
            // Catch any errors and return an error response
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
                'data' => null,
            ], 500);
        }
    }
    


    // // for delete cart items from session Function

    public function deletefromsession(Request $req)
    {
        $id = $req->id;

        $cart = session()->get("cart");
        if(isset($cart[$id]))
        {
            unset($cart[$id]);
        }
        session()->put("cart",$cart);
        return json_encode("Your item has been delete successfully");

    }


    public function showCart()
    {
        $cart = session('cart1', []);
        return view('users.cart', compact('cart'));
    }

}
