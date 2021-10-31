<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        echo view('templates/header');
        echo view('login');
    }

    public function auth() {
        $session = session();
        $model = new UserModel();
        $stuid = $this->request->getVar('stuid');
        $password = $this->request->getVar('password');
        $data = $model->where('stuid', $stuid)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $ses_data = [
                    'userid' => $data['userid'],
                    'stuid' => $data['stuid'],
                    'fname' => $data['fname'],
                    'lname' => $data['lname'],
                    'sex' => $data['sex'],
                    'major' => $data['major'],
                    'stuclass' => $data['stuclass'],
                    'educationyear' => $data['educationyear'],
                    'address' => $data['address'],
                    'province' => $data['province'],
                    'district' => $data['district'],
                    'subdistrict' => $data['subdistrict'],
                    'zipcode' => $data['zipcode'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Home');
            } else {
                $session->setFlashdata('msg', 'รหัสผ่านไม่ถูกต้อง!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'ไม่พบข้อมูลนักศึกษา');
            return redirect()->to('/login');
        }
    }
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}