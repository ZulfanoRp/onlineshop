<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeri extends CI_Controller {

    public function index()
    {
        $data['konten']="galeri";
        $this->load->view('template', $data);
    }

}

?>
