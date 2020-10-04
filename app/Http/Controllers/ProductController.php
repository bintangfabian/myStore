<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showProduct(Product $product)
    {
        $data = $product->all();
        
        return view('product', compact('data'));
    }
    
    public function editProduct($slug)
    {
        $data_edit = Product::where('product_slug', $slug)->first();

        return view('editProduct', compact('data_edit'));
    }

    public function detailProduct($slug)
    {
        $ddata = Product::where('product_slug', $slug)
                ->firstOrFail();
        
        return view('DetailProduct', compact('ddata'));
    }

    
    public function updateProduct(Request $request, Product $product)
    {
        $request->validate([
            'product_title' => 'required',
            'product_slug' => 'required',
            'product_image' => 'required',
            ]);

        $product->update([
            'product_title' => $request->input('title'),
            'product_slug' => $request->input('slug'),
            'product_image' => $request->input('image'),
            ]);
            
            return redirect('product');
        }
        
    public function delProduct($slug)
    {
        $data_del = Product::where('product_slug', $slug)->delete();
        
        return redirect('product');
    }
}
