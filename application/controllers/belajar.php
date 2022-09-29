<?php

class belajar extends CI_Controller
{
    public function index(){
        $this->load->view('welcome_message');
    }

    public function parsing()
    {
       //$data['bio']="Nama Saya Rizal";
       $data=array(
            'nama'=>"M Rizal Fauzi",
            'pekerjaan'=> "Mahasiswa"
       );
        $this->load->view('view_belajar', $data);
    }
}

