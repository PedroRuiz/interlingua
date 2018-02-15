<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->output->set_status_header('404');
        $this->load->view('error_404');
    }
}