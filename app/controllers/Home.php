<?php
//harus extends Controller untuk memanggil view
class Home extends Controller
{
    public function index()
    {
        // echo 'home/index';
        //view ke folder views home
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
