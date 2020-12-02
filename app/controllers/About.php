<?php
class About extends Controller
{
    public function index($nama = 'Bagus', $pekerjaan = 'programmer', $umur = '20')
    {
        // echo "Hallo nama saya $nama saya adalah seorang $pekerjaan,dan berumur $umur";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        // echo 'About/page';
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
