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
        // $data = Product::paginate(5);
        // return view('product', compact('data'));
    }

    public function showProduct(Product $product)
    {
        $data = Product::paginate(5);
        
        return view('product', compact('data'));
    }
    
    public function addProduct(Request $request)
    {
        return view('addProduct');
    }

    public function simpan(Request $request, Product $product)
    {
        // $request->validate([
        //             'product_title' => 'required',
        //             'product_slug' => 'required',
        //             'product_image' => 'required',
        //             'product_price' => 'required',
        //             ]);

        $product->product_title = $request->title;
        $product->product_slug = \Str::slug($request->title);
        $product->product_image = $request->image;
        $product->product_price = $request->price;
        $product->save();
        
        return redirect('product');
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
        // $request->validate([
        //     'product_title' => 'required',
        //     'product_slug' => 'required',
        //     'product_image' => 'required',
        //     'product_price' => 'required',
        //     ]);

        // $product->update([
        //     'product_title' => $request->input('title'),
        //     'product_slug' => $request->input('slug'),
        //     'product_image' => $request->input('image'),
        //     'product_price' => $request->input('price'),
        //     ]);
            
            return redirect('product');
        }
        
    public function delProduct($slug)
    {
        Product::where('product_slug', $slug)->delete();
        
        return redirect('product');
    }
}
