<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Logout extends Controller
{
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}