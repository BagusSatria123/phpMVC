<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    //mau detail id
    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            //set flash
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            //apabila success set location ke mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            //set flash
            Flasher::setFlash('gagal', 'ditambahkan', 'danger ');
            //apabila gagal set location ke mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            //set flash
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            //apabila success set location ke mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            //set flash
            Flasher::setFlash('gagal', 'dihapus', 'danger ');
            //apabila gagal set location ke mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    //method untuk ubah mahasiswa/getubah
    public function getUbah()
    {
        // echo $_POST['id'];
        //tujuan getMahasiswaById meminta mengeluarkan data id yg diklik
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    //method untuk ubah mahasiswa/ubah
    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            //set flash
            Flasher::setFlash('berhasil', 'diubah', 'success');
            //apabila success set location ke mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            //set flash
            Flasher::setFlash('gagal', 'diubah', 'danger ');
            //apabila gagal set location ke mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}
