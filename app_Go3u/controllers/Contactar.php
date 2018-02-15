<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactar extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
    
    function index()
    {
        $this->load->helper('form');
        $this->load->library(array('form_validation'=>'fv'));
        $this->fv->set_rules($this->set_rules());
        
        
        if($this->fv->run()==FALSE)
        {
            $this->load->view('contactar.php');
        } else {
            extract($_POST);
           
			$_message	=	array(
				'subject'		=> 	'Responsa automatique de contacto',
				'to'			=>	$email,
				'firstname'		=>	$nomine,
				'message'		=>	sprintf('Salute %s,<br><br>Estimate %s %s.<br> Nos responde hic a tu petition de contacto. Iste es un email automatisate pro indicar que tu message ha esite recipite.',$nomine,$nomine,$nominefamilia),
			);
            $arraydata  =   array(
                'to'            =>  $email,
				'from'			=>	'noreply@interlingua.pedroruizhidalgo.es',
                'subject'       =>  'Responsa automatique de contacto',
                'firstname'     =>  $nomine,
                'message'       =>  $this->load->view('mail/noreply',$_message,TRUE)
            );
            if ( $this->send_mail($arraydata) )
            {
				$_message	=	
                $arraydata	=	array(
					'to'				=>	'interlingua@pedroruizhidalgo.es',
					'from'				=>	'noreply@interlingua.pedroruizhidalgo.es',
					'subject'			=>	'Nove message del web',
					'message'			=>	$this->load->view(
													  'mail/responsaweb',
													  array(
															'subject'	=>	'Nove message del web',
															'email'		=>	$email,
															'nomine'	=> 	sprintf('%s %s',$nomine,$nominefamilia),
															'message'	=>	$textarea,
														),
													  TRUE)
				);
				
				if( $this->send_mail($arraydata) )
				{
					redirect(base_url());
				} else {
					exit('aborting run');
				}
                
            }
        }
    }
    
    private function set_rules()
    {
        return array(
            array (
                'field'         =>  'email',
                'label'         =>  'Email',
                'rules'         =>  'required|trim|valid_email|htmlspecialchars',
                'errors'        => array(
                    'required'      =>  '%s debe ser proportionate perque nos es a contestar te',
                    'valid_email'   =>  '%s non sembla ben construite',
                )
            ),
            array (
                'field'         =>  'nomine',
                'label'         =>  'Nomine',
                'rules'         =>  'required|trim|max_length[30]|min_length[3]|htmlspecialchars',
                'errors'        => array(
                    'required'      =>  '%s debe ser proportionate',
                    'max_length'    =>  'Longitude maxime de %s es %s',
                    'min_length'    =>  'Longitude minime de %s es %s',
                )
            ),
            array (
                'field'         =>  'nominefamilia',
                'label'         =>  'Nomine de Familia',
                'rules'         =>  'trim|max_length[30]|min_length[3]|htmlspecialchars',
                'errors'        => array(
                    'max_length'    =>  'Longitude maxime de %s es %s',
                    'min_length'    =>  'Longitude minime de %s es %s',
                )
            ),
            array(
                'field'         =>  'textarea',
                'label'         =>  'Comentario',
                'rules'         =>  'required|trim|htmlspecialchars|min_length[20]',
                'errors'        =>  array(
                    'required'      =>  '%s debe continer alicun information',
                    'min_length'    =>  'Longitude minime de %s es %s',
                )
            )
        );
    }
}