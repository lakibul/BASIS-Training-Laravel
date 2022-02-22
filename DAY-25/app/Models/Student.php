<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Riaz';
        $this->student->email = 'riaz@gmail.com';
        $this->student->mobile = '295565';
        $this->student->save();
    }
    public static function getAllStudent()
    {
        return [
            0 => [
                'id' => 1,
                'name'  => 'Lakib',
                'email' => 'lakib@gmail.com',
                'mobile' => '0121587265',
                'image' => asset('/img/i2.png')
            ],
            1 => [
                'id' => 2,
                'name'  => 'munna',
                'email' => 'munna@gmail.com',
                'mobile' => '0121587265',
                'image' => asset('/img/i3.jpg')
            ],
            2 => [
                'id' => 3,
                'name'  => 'habib',
                'email' => 'habib@gmail.com',
                'mobile' => '0121587265',
                'image' => asset('/img/i4.jpg')
            ],
        ];
    }
}
