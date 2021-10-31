<?php namespace App\Models;

use CodeIgniter\Model;

    class UserModel extends Model{
        protected $table = 'student';
        protected $primaryKey = 'userid';
        protected $allowedFields = ['stuid','password','fname','lname','sex','major','stuclass','educationyear','address','province','district','subdistrict','zipcode'];
    }
?>
