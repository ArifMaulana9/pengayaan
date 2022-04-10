<?php
class Portofolio extends Controller
{
    public function index()
    {
        $data['profile'] = $this->model('PortofolioModel')->getProfile();
        $data['about'] = $this->model('PortofolioModel')->getAbout();

        $this->view('portofolio/index', $data);
    }
    public function Pesan()
    {
        if ($this->model('PortofolioModel')->getContact($_POST) > 0) {
            echo "
            <script>
            alert('berhasil');
            window.location.href='http://localhost/latihanukk/public/';
            </script>
            ";
        } else {
            echo "
            <script>
            alert('gagal');
            window.location.href='http://localhost/latihanukk/public/';
            </script>
            ";
        }
    }
}
