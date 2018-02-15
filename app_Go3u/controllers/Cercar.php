<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cercar extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
		
		ini_set('memory_limit', '128M'); /****/
		
		$this->load->helper('form');
        $this->load->library(array('form_validation'=>'fv'));
		$this->load->library(array('user_agent'=>'ua'));
        
		$this->fv->set_rules($this->set_rules());
		
		$this->benchmark->mark('initio');
    }
	

	function index()
	{
		
		$to_view	=	array(
			'titulo'			=>	'Interlingua dictionary',
			'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
		);
		
		$result=FALSE;
		
		if($this->fv->run()==FALSE)
        {
            $this->load->view('cercar_mobile',$to_view);
        } else {
			$terminus=strtolower($this->input->post('terminus'));
			$diction=$this->return_file('assets/xml/diction.xml');
			
			foreach($diction['terminus'] as $dict)
			{
				$low_dict=strtolower($dict['interlingua']);
				
				if(strtolower($dict['interlingua']) == strtolower($terminus))
				{
					$to_view['result'][] = array(
						'interlingua'	=>	$dict['interlingua'],
						'anglese'		=>	'<h3>Anglese</h3><p>'.$dict['anglese'].'</p>'
					);
					
					$result=TRUE;
				}
				
			}
				
			if (! $result)
			{
				$to_view['result'][] = array(
						'interlingua'	=>	null,
						'anglese'		=>	'<h3>non trovate</h3>',
						'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
					);
					$this->load->view('cercar_mobile',$to_view);
			} else {
				$this->load->view('cercar_mobile',$to_view);
			}
		}
		
	}
	
	function prefix()
	{
		$diction=$this->return_file('assets/xml/diction.xml');
		
		$to_view	=	array(
			'titulo'			=>	'Interlingua dictionary',
			'prefix'			=>	TRUE,
			'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
		);
		
		foreach($diction['terminus'] as $dict)
		{
			if (substr($dict['interlingua'],-1,1)=='-')
			{
				$to_view['result'][] = array(
						'interlingua'	=>	'<h3>'.$dict['interlingua'].'</h3>',
						'anglese'		=>	'<p>'.$dict['anglese'].'</p>',
						'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
					);
			}
		}
		$this->load->view('cercar_mobile',$to_view);
	}
	
	function sufix()
	{
		$diction=$this->return_file('assets/xml/diction.xml');
		
		$to_view	=	array(
			'titulo'			=>	'Interlingua dictionary',
			'prefix'			=>	TRUE,
			'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
		);
		
		foreach($diction['terminus'] as $dict)
		{
			if (substr($dict['interlingua'],0,1)=='-')
			{
				$to_view['result'][] = array(
						'interlingua'	=>	'<h3>'.$dict['interlingua'].'</h3>',
						'anglese'		=>	'<p>'.$dict['anglese'].'</p>',
						'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
					);
			}
		}
		$this->load->view('cercar_mobile',$to_view);
	}
	
	function radices()
	{
		$diction=$this->return_file('assets/xml/diction.xml');
		
		$to_view	=	array(
			'titulo'			=>	'Interlingua dictionary',
			'prefix'			=>	TRUE,
			'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
		);
		
		foreach($diction['terminus'] as $dict)
		{
			if (substr($dict['interlingua'],0,1)=='-' && substr($dict['interlingua'],-1,1)=='-')
			{
				$to_view['result'][] = array(
						'interlingua'	=>	'<h3>'.$dict['interlingua'].'</h3>',
						'anglese'		=>	'<p>'.$dict['anglese'].'</p>',
						'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
					);
			}
		}
		$this->load->view('cercar_mobile',$to_view);
	}
	
	function expressiones()
	{
		$diction=$this->return_file('assets/xml/diction.xml');
		
		$to_view	=	array(
			'titulo'			=>	'Interlingua dictionary',
			'prefix'			=>	TRUE,
			'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
		);
		
		foreach($diction['terminus'] as $dict)
		{
			if (substr($dict['interlingua'],0,1)=='\'' && substr($dict['interlingua'],-1,1)=='\'')
			{
				$to_view['result'][] = array(
						'interlingua'	=>	'<h3>'.$dict['interlingua'].'</h3>',
						'anglese'		=>	'<p>'.$dict['anglese'].'</p>',
						'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
					);
			}
		}
		$this->load->view('cercar_mobile',$to_view);
	}
	
	function verbos()
	{
		$diction=$this->return_file('assets/xml/diction.xml');
		
		$to_view	=	array(
			'titulo'			=>	'Interlingua dictionary',
			'prefix'			=>	TRUE,
			'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
		);
		
		foreach($diction['terminus'] as $dict)
		{ //var_dump($dict['anglese']);exit;
			if ( (!is_array($dict['anglese'])) && strpos($dict['anglese'],'{v}'))
			{
				$to_view['result'][] = array(
						'interlingua'	=>	'<h3>'.$dict['interlingua'].'</h3>',
						'anglese'		=>	'<p>'.$dict['anglese'].'</p>',
						'mobile'		=>	($this->ua->is_mobile()) ? TRUE : FALSE
					);
			}
		}
		$this->load->view('cercar_mobile',$to_view);
	}
	
	function adjectivos()
	{
		$diction=$this->return_file('assets/xml/diction.xml');
		
		$to_view	=	array(
			'titulo'			=>	'Interlingua dictionary',
			'prefix'			=>	TRUE,
			'mobile'			=>	($this->ua->is_mobile()) ? TRUE : FALSE
		);
		
		foreach($diction['terminus'] as $dict)
		{ //var_dump($dict['anglese']);exit;
			if ( (!is_array($dict['anglese'])) && (strpos($dict['anglese'],'{adj}') || strpos($dict['interlingua'],'{adj}')))
			{
				$to_view['result'][] = array(
						'interlingua'	=>	'<h3>'.$dict['interlingua'].'</h3>',
						'anglese'		=>	'<p>'.$dict['anglese'].'</p>',
						'mobile'		=>	($this->ua->is_mobile()) ? TRUE : FALSE
					);
			}
		}
		$this->load->view('cercar_mobile',$to_view);
	}
	
	private function set_rules()
    {
        return array(
            array (
                'field'         =>  'terminus',
                'label'         =>  'terminus',
                'rules'         =>  'required|trim|htmlspecialchars',
                'errors'        => array(
                    'required'      	=>  '%s debe ser proportionate perque es qualcosa tu vole cercar',
					'htmlspecialchars'	=>	'Non aceptate signos special',
                )
            ),
        );
    }
	
}