<?php
    class Reg_Model extends CI_Model {
        public function saveRecords($name, $email, $mobile) {
            $query = "INSERT INTO users(name, email, mobile) VALUES('$name', '$email', '$mobile')";
            $this->db->query($query);
        }

        public function takeData() {
            $query = "SELECT * FROM users";
            $results = $this->db->query($query);
            return $results->result();
        }

        public function deleteRecord($id) {
            $this->db->query("DELETE FROM users WHERE id='".$id."'");
        }

        public function displayUserById($id) {
            $query = "SELECT * FROM users WHERE id='$id'";
            $results = $this->db->query($query);
            return $results->result();
        }

        public function updateRecords($id, $name, $email, $mobile) {
            $query = "UPDATE users SET name='$name', email='$email', mobile='$mobile' WHERE id='$id'";
            $this->db->query($query);
        }
    }
?>