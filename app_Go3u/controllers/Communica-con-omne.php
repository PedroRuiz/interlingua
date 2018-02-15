<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller
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
				//var_dump($file);
				//echo date('d-m-Y H:i:s',$file['date']).' '.$file['name'].'<br>';
				$path="$dir/".$file['name'];
				//var_dump($this->return_file($path));
				$xml=$this->return_file($path);
				$array[] = $this->compose_file($xml,$file);
			}
		}
		
		
		$this->load->view(
						  'archivo',
						  array(
									'files'		=>	$array,
									'archivo'	=>	$this->menses($mense)." de $anno",
								));
    }
	
	private function compose_file($xml,$file)
	{
		$filename	=	explode('.',$file['name']);
		return array(
		'name'			=>	$filename[0],
		'date'			=>	date('d-m-Y H:i:s',$file['date']),
		'typo'			=>	$xml['typo'],
		'taxon'			=>	$xml['taxinomia'],
		'href'			=>	base_url('documento/'.$filename[0])
		);
	}
	
}