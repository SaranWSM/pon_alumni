<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('templates/header');
        echo view('register', $data);
    }

    public function save() {
        //include helper form
        helper(['form']);
        //Set rules validation form
        $rules = [
            'stuid' => 'required|min_length[9]|max_length[9]',
            'password' => 'required|min_length[6]|max_length[36]',
            'cpassword' => 'matches[password]',
            'fname' => 'required|min_length[2]|max_length[200]',
            'lname' => 'required|min_length[2]|max_length[200]',
            'sex' => 'required|min_length[2]|max_length[200]',
            'major' => 'required|min_length[2]|max_length[200]',
            'stuclass' => 'required|min_length[2]|max_length[200]',
            'educationyear' => 'required|min_length[4]|max_length[4]',
            'address' => 'required|min_length[2]|max_length[255]',
            'province' => 'required|min_length[2]|max_length[200]',
            'district' => 'required|min_length[2]|max_length[200]',
            'subdistrict' => 'required|min_length[2]|max_length[200]',
            'zipcode' => 'required|min_length[4]|max_length[5]',
        ];
        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'stuid' => $this->request->getVar('stuid'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'fname' => $this->request->getVar('fname'),
                'lname' => $this->request->getVar('lname'),
                'sex' => $this->request->getVar('sex'),
                'major' => $this->request->getVar('major'),
                'stuclass' => $this->request->getVar('stuclass'),
                'educationyear' => $this->request->getVar('educationyear'),
                'address' => $this->request->getVar('address'),
                'province' => $this->request->getVar('province'),
                'district' => $this->request->getVar('district'),
                'subdistrict' => $this->request->getVar('subdistrict'),
                'zipcode' => $this->request->getVar('zipcode'),
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}