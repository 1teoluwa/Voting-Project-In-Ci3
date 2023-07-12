<?php
class Votemodels extends CI_Model
{
    function createvoter($data)
    {
        $this->load->database();
        $this->db->where('standard', 'voter');
        $this->db->insert('voter', $data);
        return true;
    }
    function createparty($data)
    {
        $this->load->database();
        $this->db->where('standard', 'party');
        $this->db->insert('party', $data);
        return true;
    }
    function login($name, $password)
    {
        $this->load->database();
        $this->db->where('name', $name);
        $this->db->where('password', $password);
        $query = $this->db->get('voter');
        return $query->row();
    }
    function getparty()
    {
        $this->load->database();
        $query = $this->db->get('party');
        return $query->result();
    }
    function vote($data)
    {
        $this->load->database();
       $inserted =  $this->db->insert('votes', $data);
       if($inserted)
       {
         echo true;
       }else{
        echo false;
       }
    }
    function updatestatus($id, $new_status)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $query = $this->db->update('voter', $new_status);
    }
    function getupdatedvoter($vid)
    {
        $this->db->where('id', $vid);
        $q = $this->db->get('voter');
        return $q->row();
    }
    function gettotalvotes($pid)
    {   
    // $this->db->where('id', $pid);
    $this->db->from('votes');
    $total = $this->db->count_all_results();
    return $total;
    }
    function gettotalvoters()
    {
        $this->db->from('voter');
        $total = $this->db->count_all_results();
        return $total;
    }
}
