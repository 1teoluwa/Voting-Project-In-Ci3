<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class TOOLS
{
    function offCanvas()
    {
		$CI=& get_instance();
		$CI->load->view("Includes/Offcanvas");
	}
}
