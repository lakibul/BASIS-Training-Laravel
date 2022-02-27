<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    protected $products;
    public function index()
    {
        return view('product.add');
    }
    public function create(Request $request)
    {
//        return $request->all();
        $this->product = new Product();
        $this->product->name   = $request->name;
        $this->product->category  = $request->category;
        $this->product->brand  = $request->brand;
        $this->product->price  = $request->price;
        $this->product->description = $request->description;
        $image = $request->file('image');
        $imageName = 
        $this->product->save();

//        return "success"; one time session 'message' which will destroy afterwards
        return redirect()->back()->with('message', 'Product information saved successfully!');
    }
    public function manage()
    {
        $this->products = Product::orderBy('id', 'desc')->get();
        return view('product.manage-product', ['products'=>$this->products]);
    }
    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('edit-product',['student' => $this->product]);
    }
    public function update(Request $request, $id)
    {
        $this->product = Product::find($id);
        $this->product->name   = $request->name;
        $this->product->category  = $request->category;
        $this->product->brand  = $request->brand;
        $this->product->price  = $request->price;
        $this->product->description = $request->description;
        $this->product->image = $request->image;
        $this->product->save();

        return redirect('/manage-student')->with('message', 'Product info update successfully');

    }
    public function delete($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/manage-student')->with('message', 'Product info delete successfully');
    }

}
