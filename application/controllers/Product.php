<?php

    class Product extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_Product');
        }
        public function index()
        {
            $this->load->view('product/products');
        }

        public function list()
        {
            $data['data_onero'] = $this->M_Product->SemuaData();
            $this->load->view('product/product_list',$data);
        }

        public function insert()
        {
            $this->load->view('product/insert');
        }

        public function update($id_barang)
        {
            $queryProductDetail = $this->M_Product->getDataProductDetail($id_barang);
            $DATA = array('queryProductDetail' => $queryProductDetail);
            $this->load->view('product/update', $DATA);
        }

        public function ActionUpdate()
        {
            $id_barang = $this->input->post('id_barang');
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $price = $this->input->post('price');
            $quantity = $this->input->post('quantity');
            $featured = $this->input->post('featured');
            $show = $this->input->post('show');

            $ArrUpdate = array (
                'title' => $title,
                'description' => $description,
                'price' => $price,
                'quantity' => $quantity,
                'featured' => $featured,
                'show' => $show,
            );
            $where = array(
                'id_barang' => $id_barang
            );

            $this->M_Product->UpdateDataProduct($ArrUpdate,$where, 'data_onero');
            redirect(base_url('product/list'));
            
        }

        public function ActionInsert()
        {
            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $price = $this->input->post('price');
            $quantity = $this->input->post('quantity');
            $featured = $this->input->post('featured');
            $show = $this->input->post('show');

            $DataInsert = array (
                'title' => $title,
                'description' => $description,
                'price' => $price,
                'quantity' => $quantity,
                'featured' => $featured,
                'show' => $show,
            );

            $this->M_Product->InsertDataProduct($DataInsert);
            redirect(base_url('product/list'));
        }

        public function ActionDelete($id_barang)
        {
            $this->M_Product->deleteDataProduct($id_barang);
            redirect(base_url('product/list'));
        }
    }
?>
