<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {	
		$array_to_view = array(
			'information_active'	=>	TRUE,
		);
        $this->load->view('information',$array_to_view);
    }
	
    
    function national($lingua,$iso)
    {
        $_information=$this->return_file('assets/xml/information.xml')['lingua'];
		//var_dump($_information); exit;
		$a=0;
		foreach($_information as $i => $xml)
		{
			if( $xml['namelingua']==$iso)
			{
				 $_information=$_information[$a];
			}
			$a++;
		}
		$_information['namelingua']=ucwords(urldecode($lingua));
		 $array_to_view = array (
			'information_active'	=>	TRUE,
			'national'				=>	$_information,
		);
        $this->load->view('information',$array_to_view);
    }
}