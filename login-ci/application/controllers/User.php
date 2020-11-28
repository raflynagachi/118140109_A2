<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Model','model_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $this->register();
    }

    public function register(){
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('role', 'role', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        
        $data['title'] = 'Register';

        if ($this->form_validation->run() === FALSE)
        {            
            $this->load->view('template/header', $data);
            $this->load->view('user/register');
            $this->load->view('template/footer');
        }
        else
        { 
            if ($this->model_model->set_user())
            {                             
                $this->session->set_flashdata('msg_success','Registrasi sukses!');
                redirect('user/register');            
            }
            else
            {                
                $this->session->set_flashdata('msg_error','Registrasi gagal!');
                redirect('user/register');
            }
        }
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');        
        
        $data['title'] = 'Login';
        
        if ($this->form_validation->run() === FALSE)
        {            
            $this->load->view('template/header', $data);
            $this->load->view('user/login');
            $this->load->view('template/footer');
        }
        else
        { 
            if ($user = $this->model_model->get_user_login($username, $password))
            {   
                /*$user_data = array(
                              'username' => $username,
                              'is_logged_in' => true
                         );
                     
                $this->session->set_userdata($user_data);*/
                
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('role',$user['role']);
                $this->session->set_userdata('is_logged_in', true);
                
                $this->session->set_flashdata('msg_success','Login Berhasil!');
                redirect('news');                
            }
            else
            {
                $this->session->set_flashdata('msg_error','Login gagal!');
                
                $currentClass = $this->router->fetch_class(); // class = controller
                $currentAction = $this->router->fetch_method(); // action = function
                
                redirect("$currentClass/$currentAction");
                //redirect('user/login');
            }
        }
    }

    public function logout(){
        if ($this->session->userdata('is_logged_in')) {
            
            //$this->session->unset_userdata(array('email' => '', 'is_logged_in' => ''));
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('is_logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->set_userdata('role',$user['role']);         
        }
        redirect('news');
    }
}
?>