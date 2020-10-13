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

    public function detailProduct($slug)
    {
        $ddata = Product::where('product_slug', $slug)
                ->firstOrFail();
        
        return view('DetailProduct', compact('ddata'));
    }
    
    public function addProduct(Request $request)
    {
        return view('addProduct');
    }

    public function simpan(Request $request, Product $product)
    {

        // $product = new Product;
        $product->product_title = $request->title;
        $product->product_slug = \Str::slug($request->title);
        $product->product_image = $request->image;
        $product->product_price = $request->price;

        if(Product::where('product_slug', $product->product_slug)->exists()){
            return redirect('product/add')->with('info','this slug Already exists!');
        }else{
            $product->save();
        }
        
        return redirect('product')->with('infopr', 'Product added!');

    }

    public function editProduct($slug)
    {
        $data_edit = Product::where('product_slug', $slug)->first();

        return view('editProduct', compact('data_edit'));
    }

    public function update(Request $request, Product $product, $slug)
    {
        if(Product::where('product_slug', $request->slug)->first()){
            if(Product::where('product_slug', $request->slug)->exists()){
                return redirect('product/editProduct/'. $slug)->with('info','this slug Already exists!');
            }else{
                Product::where('product_slug', $slug)->update([
                    'product_title' => $request->title,
                    'product_slug' => $request->slug,
                    'product_image' => $request->image,
                    'product_price' => $request->price
                ]);
            }
        }else{
            Product::where('product_slug', $slug)->update([
                'product_title' => $request->title,
                'product_slug' => $request->slug,
                'product_image' => $request->image,
                'product_price' => $request->price
            ]);
        }
        
        return redirect('product')->with('infoedit', 'Product Updated!');
    }

    public function delProduct($slug)
    {
        Product::where('product_slug', $slug)->first()->delete();
        
        return redirect('product')->with('infodl', 'Product deleted!');
    }

}
