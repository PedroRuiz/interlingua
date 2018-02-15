<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documento extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
		
    }
	
	/**
	 * remap allows get a param in index function
	 * */
	function _remap($file)
	{
		$this->index($file);
	}
    
    function index($file)
    {	
		
		if ( is_null($this->uri->segment(2)) || ! is_file("assets/xml/pages/$file.xml" )) redirect('Error404') ;
		
		$archivo = $this->return_file("assets/xml/pages/$file.xml");
		
		$to_view	=	array(
			'archivo'			=>	$this->get_archivo(),
			'texto'				=>	$this->parse_text($archivo),
			'document'			=>	$this->return_file("assets/xml/pages/$file.xml"),
			'leger_active'	=>	TRUE,
			'meta'				=>	$this->meta_content("assets/xml/pages/$file.xml")
		);
		
		$document=$this->return_file("assets/xml/pages/$file.xml"); 
		
		$view = ( !isset($document['designo'])) ? 'pages' : $document['designo'];
		
		$this->load->view($view,$to_view);
		
    }
	
}