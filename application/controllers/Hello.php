<?php
    class Hello extends CI_Controller {
        public function index() {
            echo 'Hello world';
        }
        public function about() {
            $this->load->view('view_about');
        }
    }
?>