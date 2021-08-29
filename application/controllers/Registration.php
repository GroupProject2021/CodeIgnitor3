<?php
    class Registration extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
            $this->load->model('Reg_Model');
        }

        public function saveData() {
            $this->load->view('view_registration_form');

            if($this->input->post('save')) {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $mobile = $this->input->post('mobile');

                $this->Reg_Model->saveRecords($name, $email, $mobile);
                echo 'Records saved successfully';
            }
        }

        public function displayData() {
            $results['data'] = $this->Reg_Model->takeData();

            $this->load->view('view_display_data', $results);
        }

        public function deleteData() {
            $id = $this->input->get('id');
            $this->Reg_Model->deleteRecord($id);
            redirect('registration/displaydata');
        }

        public function updateData() {
            $id = $this->input->get('id');
            $results['data'] = $this->Reg_Model->displayUserById($id);
            $this->load->view('view_update_data', $results);

            if($this->input->post('update')) {
                $id = $this->input->get('id');
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $mobile = $this->input->post('mobile');

                $this->Reg_Model->updateRecords($id, $name, $email, $mobile);
                echo  "Records updated successfully";
                redirect('registration/displaydata');
                
            }
        }
    }
?>