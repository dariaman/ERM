<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller{

  function index()
  {
  	// echo var_dump($this->data['content']);
	// $this->data['content'] = $this->load->view('welcome_message');
  	// $this->data['content'] = 'welcome_message.php';
  	// $this->data['content'] = 'template/content.php';

	// $this->load->view('template/content.php',$data ?? '');
	// $this->template->load('_main','welcome_message',$data);
    $this->template->load('template/main','welcome_message','');
  	// $this->load->view('_main');
  }

}