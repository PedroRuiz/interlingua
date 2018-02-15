<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leger extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
		
    }
	
	
	function index()
    {
				$this->load->view(
						  'leger',
						  array(
									'contento'		=>	$this->get_index(),
									'subtitle'  	=>  'Contenido producite in iste periodo.',
									'spots'			=>	$this->get_xmls(),
								));
    }
	
	private function get_index()
	{
		return array(
			'main_titulo'		=>		'Contento',
			'main_subtitulo'	=>		'Lista de nostre archivos',
			'prime_titulo'		=>		'Selige qualcunque pro leger',
		);
	}
	
	private function get_xmls($eliminar=array('legal','web'))
	{
		$_archivo	=	array();
		$array		=	get_dir_file_info('assets/xml/pages');
		ksort($array);
		foreach( $array as $file)
		{ 
			$xml	=	$this->return_file($file['server_path']); 
			if ( !in_array(strtolower($xml['typo']),$eliminar))
			{
				$_archivo[]	=	array(
					'image'	=>	(isset($xml['contento']['imagine'])) ? $xml['contento']['imagine'] : NULL,
					'text'	=>	$this->get_words( (is_array($xml['contento']['texto'])) ? $xml['contento']['texto'][0] : $xml['contento']['texto'],5).'...',
					//'texto'	=>	$this->get_words($this->parse_text($xml),5),
					'name'	=>	ucfirst(str_replace('_',' ',substr($file['name'],0,-4))),
					'href'	=>	base_url('documento/'.substr($file['name'],0,-4)),
				);
			}
			
		} 
		return $_archivo;
	}
	
	private function get_words($sentence, $count = 10)
	{
		$marks_bold		=	array('/bold','bold/');
		$bold			    =	array('','');
		
		$marks_em      = array('/em','em/');
		$em           = array('','');
	
		$sentence = str_replace($marks_bold,$bold,$sentence);
		$sentence = str_replace($marks_em,$em,$sentence);
		
		preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
		return $matches[0];
	}
}