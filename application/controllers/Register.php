<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Votemodels');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('Includes/Header');
        $vname = $this->input->post('name');
        $vpword = $this->input->post('password');
        $query = $this->Votemodels->login($vname,$vpword);
        if($query)
        {
            $this->session->set_userdata('voterquery', $query);
            redirect('Register/profile');
            // print_r($query);
        }else
        {
         $query['error'] = "Invalid Information";
        }
        $this->load->view('Register/Login',$query);
        $this->load->view('Includes/Footer');
    }

    public function signup()
    {
        $this->load->view('Includes/Header');
    
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[20]');

        $vname = $this->input->post('name');
        $vemail = $this->input->post('email');
        $vpword = $this->input->post('password');
        $cpword = $this->input->post('cpassword');
        $std = $this->input->post('std');

        if ($this->form_validation->run() == true && $vpword === $cpword) {
           
            $config['file_name'] = time();  // Set the upload path
            $config['upload_path'] = 'public/images';  // Set the upload path
            $config['allowed_types'] = 'gif|jpg|png|jpeg|img';  // Set the allowed file types
            $config['max_size'] = 999999999;  // Set the maximum file size in kilobytes
        
            $this->load->library('upload', $config);
        
                if (!$this->upload->do_upload('image')) 
                {
                  $error = $this->upload->display_errors();
                  print_r($error);
                // Handle the upload error
                }else 
                {
                    $img = $this->upload->data();
                    $file_path = $img['file_name'];
                    // print_r($file_path);

                if ($std == 'voter') 
                {
                    $vv = 
                    [
                        'name' => $vname,
                        'email' => $vemail,
                        'password' => $vpword,
                        'created_at' => date('Y-m-d H:i:s'),
                        'standard' => $std,
                        'image' => $file_path
                    ];
                    $vsuccess = $this->Votemodels->createvoter($vv);
                    if($vsuccess) 
                    {
                        redirect('Register/success');
                        print_r($vsuccess);
                    }
                }elseif($std == 'party'){
                    $pp =
                    [
                        'name' => $vname,
                        'password' => $vpword,
                        'image' => $file_path,
                        'standard' => $std,
                        'file_name' => $img['file_name']
                    ];
                    $psuccess = $this->Votemodels->createparty($pp);
                    if($psuccess) 
                    {
                        redirect('Register/success');
                    }
                }else{
                    echo "Unable to Upload";
                }
            }    
        }
        $this->load->view("Register/Signup");
        $this->load->view('Includes/Footer');
    }
    public function success()
    {
        $this->load->view('Register/Success');
    }

    public function voted()
    {
        $this->load->view('Register/Voted');
    }

    public function profile()
        {
           $query['data'] = $this->session->userdata('voterquery'); 
           $voter = $query['data'];
           $vid = $voter->id;
           if ($query['data']) 
           {
               $query['getparty'] = $this->Votemodels->getparty();
            
                $pid = $this->uri->segment(3);
                $query['tvotes'] = $this->Votemodels->gettotalvotes($pid);
                $query['tvoters'] = $this->Votemodels->gettotalvoters();
                // $query['status'] = $this->session->userdata('updatedstatus');
                $query['status']= $this->Votemodels->getupdatedvoter($vid);
           }
        $this->load->view('Includes/Header');
        $this->load->view('Register/Profile',$query);
        }
    public function logout()
    {
        $this->load->view('Register/Logout');
    }
    public function vote($data)
    {
            $this->load->database();
            $query['data'] = $this->session->userdata('voterquery');
            

            $voter = $query['data'];
            $vid = $voter->id;
            $pid = $this->uri->segment(3);
            $data = 
            [
                'party_id' => $pid,
                'voter_id' => $vid,
            ];
            $dataUpdate = 
            [
                'status' => 1,
            ];

        $voted = $this->Votemodels->vote($data);
        $q = $this->Votemodels->updatestatus($vid, $dataUpdate);
        $this->session->set_userdata('updatedstatus', $q);
        // redirect('Register/profile/'.$pid,'refresh');
        $this->load->view('Register/Profile', $query);
        if($voted = true)
        {
            redirect('Register/voted');
        }
        $query['status']= $this->Votemodels->getupdatedvoter($vid);
    }

}


