<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
		
    }
	

	function communica_con_omne()
	{
		$to_view	=	array(
			'archivo'			=>	$this->get_archivo(),
			'titulo'			=>	'Discopery Interlingua'
		);
		
		$this->load->view('communica_con_omne',$to_view);
		
	}
}