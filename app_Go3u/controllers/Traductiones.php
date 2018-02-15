<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traductiones extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
		
    }
	

    function index()
    {
		$dir='assets/xml/pages';
		
		foreach( get_dir_file_info($dir) as $file)
		{ //var_dump($file); exit;
            $file_xml   =   $this->return_file('assets/xml/pages/'.$file['name']);
			if (strtolower($file_xml['typo'])=='traductiones')
			{
				$mense  =   date('m',$file['date']);
                $anno   =   date('Y',$file['date']);
				$path   =   "$dir/".$file['name'];
				
				$xml=$this->return_file($path);
				$array[] = $this->compose_file($xml,$file);
			}
		}
		
		
		$this->load->view(
						  'traductiones',
						  array(
									'files'		=>	$array,
									'archivo'	=>	'Traductiones',
								));
    }
	
}