<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Username extends Controller
{
    public function index() {
        echo view('templates/header');
        echo view('username');
    }
}