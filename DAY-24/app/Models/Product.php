<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0 => [
                'id' => 1,
                'name'  => 'X',
                'price' => '1250',
                'description' => 'description',
                'image' => asset('/img/i2.png')
            ],
            1 => [
                'id' => 2,
                'name'  => 'Y',
                'price' => '5650',
                'description' => 'description',
                'image' => asset('/img/i3.jpg')
            ],
            2 => [
                'id' => 3,
                'name'  => 'Z',
                'price' => '5750',
                'description' => 'description',
                'image' => asset('/img/i4.jpg')
            ],
        ];
    }
}
