<?php 

class UserModel extends CI_Controller {
    private const TABLE_NAME = 'users';

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function create($user) {
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
        return $this->db->insert($this::TABLE_NAME, $user);
    }

    public function update($user) {
        return $this->db->where('id', $user['id'])->update($this::TABLE_NAME, $user);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete($this::TABLE_NAME);
    }

    public function findAll() {
        return $this->db->get($this::TABLE_NAME)->result_array();
    }

    public function findByID($id) {
        return $this->db->where('id', $id)->get($this::TABLE_NAME)->row_array();
    }

    public function findByUsername($username) {
        return $this->db->where('username', $username)->get($this::TABLE_NAME)->row_array();
    }
}

?>