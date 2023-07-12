<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Load the url_helper
$CI =& get_instance();
$CI->load->helper('url');

// Define a custom function that uses base_url()
function base_function($uri = '')
{
    return base_url($uri);
} 

function countVotes($id){
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->query("SELECT count(*) as totalentries FROM votes WHERE party_id = '$id'");
	$totalentries = $query->row()->totalentries;
	return $totalentries;
}
function getPartyVotedFor($party_id)
{
	$ci =& get_instance();
	$ci->load->database();
	$query = $ci->db->select('party.*')
                  ->from('party')
                  ->join('votes', 'party.name = votes.party_id')
                  ->where('votes.party_id', $party_id)
                  ->get();
	return $query->row();
}