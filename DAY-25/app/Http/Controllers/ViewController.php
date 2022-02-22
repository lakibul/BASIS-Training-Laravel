<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data = [];
    private $products;

    public function index()
    {
        return view('test');
    }
    public function bitm()
    {
        $this->city = 'Dhaka';
        $this->mobile = '01123654';
        $this->data = [
            0 => [
                'name'  => 'Hasib',
                'city' => 'Dhaka',
                'mobile' => '0453555'
            ],
            1 => [
                'name'  => 'Rafa',
                'city' => 'Dhaka',
                'mobile' => '0157753555'
            ],
            2 => [
                'name'  => 'Bilal',
                'city' => 'Dhaka',
                'mobile' => '016653555'
            ],
        ];

        return view('demo', [
            'a' => $this->city,
            'b' => $this->mobile,
            'array1' => $this->data,
        ]);

    }
    public function about()
    {
        $this->products = Product::getAllProduct();
        return view('about', ['products' => $this->products]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $id)
            {
                return view('detail', ['data' => $item]);
            }
        }

    }
}
