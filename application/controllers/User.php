<?php 

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('UserModel');
    }

    public function create() {
        $user = array(
            'name'      => $this->input->post('name'),
            'email'     => $this->input->post('email'),
            'username'  => $this->input->post('username'),
            'password'  => $this->input->post('password'),
        );

        if($this->UserModel->create($user)) {
            redirect('/user');
        }

        $data['errors'] = array(
            'main' => 'Internal server error'
        );
        $this->load->view('user/register', $data);
    }

    public function index() {
        $data['users'] = $this->UserModel->findAll();
        $this->load->view('users/index', $data);
    }

    public function delete($id) {
        if($this->UserModel->delete($id)) {
            redirect('/user');
        }
        
        $data['errors'] = array(
            'main' => 'Internal server error'
        );
        $this->load->view('user/register', $data);
    }

    public function register() {
        $this->load->view('users/register');
    }
}

?>