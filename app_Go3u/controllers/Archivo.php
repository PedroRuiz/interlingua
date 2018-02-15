<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivo extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
		
    }
	
	/**
	 * remap allows get a param in index function
	 * */
	function _remap($anno,$mense)
	{
		$this->index($anno,$mense);
	}
	
    
    function index($anno,$mense)
    {
		if ( is_null($this->uri->segment(2)) ) redirect('Error404') ;
		if ( is_null($this->uri->segment(3)) ) redirect('Error404') ;
		
		$mense=$mense[0];
		$dir='assets/xml/pages';
		
		foreach( get_dir_file_info($dir) as $file)
		{
			if (date('Y',$file['date'])==$anno && date('m',$file['date'])==$mense)
			{
				
				$path="$dir/".$file['name'];
				
				$xml=$this->return_file($path);
				$array[] = $this->compose_file($xml,$file);
			}
		}
		
		
		$this->load->view(
						  'archivo',
						  array(
									'files'		=>	$array,
									'archivo'	=>	$this->menses($mense)." de $anno",
									'subtitle'  =>  'Contenido producite in iste periodo.',
								));
    }
	
}