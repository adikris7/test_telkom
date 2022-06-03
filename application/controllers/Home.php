<?php

    class Home extends CI_Controller{
        public function index()
        {
            $this->load->view('home/index');
        }

        public function update()
        {
            $this->load->view('home/update');
        }
    }
?>
