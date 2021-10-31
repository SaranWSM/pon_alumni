<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Edit extends Controller{
    public function index() {
       
        $UserModel = new UserModel();

        $data['userid'] = $UserModel->orderBy('stuid', 'DESC')->findAll();

        echo view('templates/header');
        return view('edit', $data);
    }
    public function show_edit($stu_id=null) {
        //    echo $stu_id;

            $session = session();
            $UserModel = new UserModel();
            // $data['users'] = $UserModel->orderBy('stu_id', $stu_id)->findAll();
            $data['users'] = $UserModel->where('stu_id', $stu_id)->first();
    
    
            return view('edit', $data);
        }
        public function profile()
        {
            $session = session();
            $id = $this->request->getVar('stuid');
            $UserModel = new UserModel();
            $data = [
                'fname' => $this->request->getVar('fname'),
                'lname' => $this->request->getVar('lname'),
            ];
            $UserModel->update($id,$data);
            $session->set($data);
            echo view('templates/header');
            return redirect()->to('edit');
        }
        public function update()
        {
            $session = session();
            $id = $this->request->getVar('stuid');
            $UserModel = new UserModel();
            $data = [
                'fname' => $this->request->getVar('fname'),
                'lname' => $this->request->getVar('lname'),
            ];
            $UserModel->update($id,$data);
            $session->set($data);
            return redirect()->to('edit');
            
        
        }
    
}