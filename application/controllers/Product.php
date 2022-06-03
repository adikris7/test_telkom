<?php

    class Product extends CI_Controller{
        public function index()
        {
            $this->load->view('product/products');
        }

        public function list()
        {
            $this->load->view('product/product_list');
        }
    }
?>
