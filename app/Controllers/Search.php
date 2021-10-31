<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Search extends Controller
{
    public function index() { 
        $UserModel = new UserModel();
        $data['users'] = $UserModel->orderBy('stuid', 'DESC')->findAll();
		echo view('templates/header');
        echo view('search', $data);
    }  
}