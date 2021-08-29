<?php
    class Form_Controller extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->helper(array('form'));
            $this->load->library(array('form_validation'));
        }

        public function form() {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if($this->form_validation->run() == false) {
                $this->load->view('form_validation');
            }
            else {
                $this->load->view('form_validation_success');
            }
        }
    }
?>