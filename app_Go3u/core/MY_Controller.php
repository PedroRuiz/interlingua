<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function validate_file($xml_file)
	{
		$error 	= "Error validating file $xml_file. Aborting run";
		$dom 	= new DOMDocument;
		try{
			$dom->load($xml_file);
			$wellformed = $dom->validate();
			if (! $wellformed)
			{
				throw new Exception($error,1);
			}
		} catch (Exception $e) {
			exit($e->getMessage());
		}
		return $wellformed;
	}
    
    function return_file($xml_file)
    {
        if ( $this->validate_file($xml_file) )
		{
			return json_decode(json_encode(simplexml_load_file($xml_file,"SimpleXMLElement",LIBXML_NOCDATA)),true);
		} else {
			return NULL;
		}
    }
	
	/**
	 * arraydata must contain: $from,$to,$subject,$message.
	 **/
	function send_mail($arraydata)
	{
		if(is_array($arraydata))
		{
			extract($arraydata);
			
			$this->email->clear( TRUE );
			
			$this->email->from( $from );
			$this->email->to( $to );
			$this->email->subject( $subject );
			$this->email->message ( $message );
			
			return ($this->email->send()) ? TRUE : FALSE;
			
		} else {
			return false;
		}
	}
	
	function exists_link($link)
	{
		$file = $link;
		$file_headers = @get_headers($file);
		if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
			$exists = false;
		}
		else {
			$exists = true;
		}
		return $exists;
	}
	
	function menses($mense)
	{
		$array_mense=array('',	'januario',	'februario',	'martio',	'april',	'maio',		'junio',
								'julio',	'augusto',		'septembre','octobre',	'novembre',	'decembre');
		return $array_mense[$mense];
	}
	
	function get_archivo()
	{
		$_archivo=array();
		foreach( get_dir_file_info('assets/xml/pages') as $file)
		{
			$_month	= 	(string) $this->menses( (int) date('m',$file['date']));
			$_year	=	(string) date('Y',$file['date']);
			
			if ( !array_key_exists("$_month $_year",$_archivo))
			{
				$_archivo["$_month $_year"]['quantity']	=	1;
				$_archivo["$_month $_year"]['month']		=	(int) date('m',$file['date']);
				$_archivo["$_month $_year"]['year']		=	(int) date('Y',$file['date']);
			} else {
				$_archivo["$_month $_year"]['quantity']++;
			}
			
		}
		return $_archivo;
	}
	
	function compose_file($xml,$file)
	{
		$filename	=	explode('.',$file['name']);
		return array(
		'name'			=>	str_replace('_',' ',$filename[0]),
		'date'			=>	date('d-m-Y H:i:s',$file['date']),
		'typo'			=>	$xml['typo'],
		'taxon'			=>	$xml['taxinomia'],
		'href'			=>	base_url('documento/'.$filename[0]),
		);
	}
	
	function meta_content($file)
	{
		$file	=	$this->return_file($file);
		
		unset($array);
		foreach($file['autores'] as $autor)
		{
			$array[]	=	$autor['nomine'];
			
		}
		
		if(!is_array($file['autores']['autor']['retes']))
		{
			$array[] = $file['autores']['autor']['retes'];
		} else {
			foreach($file['autores']['autor']['retes'] as $rete)
			{
				$array[] = $rete;
			}
		}
		$array[]	=	$file['contento']['titulo'];
		
		if(!is_array($file['contento']['texto']))
		{
			$array[]	=	substr($file['contento']['texto'],0,70);
		} else {
			$array[]	=	substr($file['contento']['texto'][0],0,70);
			
		}
		return $array;
	}
	
	function parse_marks($string)
	{
		$marks_bold		=	array('/bold','bold/');
		$bold			=	array('<strong>','</strong>');
		$marks_em		=	array('/em','em/');
		$em				=	array('<em>','</em>');
		$marks_center	=	array('/center','center/');
		$center			=	array('<div class="text-xl-center text-lg-center text-md-center">','</div>');
		$marks_tit		=	array('/tit','tit/');
		$tit			=	array('<h3>','</h3>');
		$marks_img		=	array('/img','img/');
		$img			=	array('<img class="img-responsive" src=','>');
		$marks_small	=	array('/small','small/');
		$small			=	array('<small>','</small>');
		$marks_link		=	array('/link','link/');
		$link			=	array('<a href=','');
		$mark_text		= 	array('/l_','l_/');
		$text 			= 	array('>','</a>');
		
		
		
		$string=str_replace($marks_bold,$bold,$string);
		
		$string=str_replace($marks_em,$em,$string);
		
		$string=str_replace($marks_center,$center,$string);
		
		$string=str_replace($marks_tit,$tit,$string);
		
		$string=str_replace($marks_img,$img,$string);
		
		$string=str_replace($marks_small,$small,$string);
		
		$string=str_replace($mark_text,$text,$string);
		
		$string=str_replace($marks_link,$link,$string);
		
		
		return $string;
	}
	
	function parse_xml_marks($string)
	{
		$marks_bold		=	array('<bold>','</bold>');
		$bold			=	array('<strong>','</strong>');
		$marks_em	=	array('<cursiva>','</cursiva>');
		$em				=	array('<em>','</em>');
		$marks_center	=	array('<centrar>','</centrar>');
		$center			=	array('<div class="text-xl-center text-lg-center text-md-center">','</div>');
		$marks_tit		=	array('<titulo>','</titulo>');
		$tit			=	array('<h3>','</h3>');
		$marks_img		=	array('<imagine>','</imagine>');
		$img			=	array('<img class="img-responsive" src=','>');
		$marks_small	=	array('<parve>','</parve>');
		$small			=	array('<small>','</small>');
		$marks_link		=	array('<direction>','</direction>');
		$link			=	array('<a href="','>');
		$mark_text		= 	array('<textoligamine>','</textoligamine>');
		$text 			= 	array('','</a>');
		
		$string=str_replace($marks_bold,$bold,$string);
		
		$string=str_replace($marks_em,$em,$string);
		
		$string=str_replace($marks_center,$center,$string);
		
		$string=str_replace($marks_tit,$tit,$string);
		
		$string=str_replace($marks_img,$img,$string);
		
		$string=str_replace($marks_small,$small,$string);
		
		$string=str_replace($mark_text,$text,$string);
		
		$string=str_replace($marks_link,$link,$string);
		
		
		return $string;
	}
	
	function parse_text($xml_file)
	{
		$texto=null;
		
		if (!is_array($xml_file['contento']['texto']))
		{
			$texto 	=	$xml_file['contento']['texto'];
		} else {
			
			foreach($xml_file['contento']['texto'] as $text)
			{
				$texto .= $text;
			}
			
		}
		$texto=nl2br($texto);
		$texto=$this->parse_marks($texto);
		return $texto;
	}
}