<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Student extends CI_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
		$this->load->helper('url'); 
		$this->load->database(); 
		//$this->load->model('StudentApi_model'); 
    }
	/*
	*
	*	Student Dashboard
	*
	*/
	 public function dashboard()
    {
       /*  $url = 'http://macrew.info/summerandjune/dev/example/users';
		$result = curlGet($url);
		echo '<pre>'; print_r(json_decode($result, true)); */
		echo 'Student Dashboard';
		$user_session = $this->session->userdata('logged_in');
		echo '<pre>'; print_r($user_session); die('here');
    }
	
    public function getData()
    {
        $url = 'http://macrew.info/summerandjune/dev/example/users';
		$result = curlGet($url);
		echo '<pre>'; print_r(json_decode($result, true));
    }
	
	public function postData()
    {
        $url = 'http://macrew.info/summerandjune/dev/example/users';
		$params = array('name'=>'Mam','email'=>'manoj@gmail.com');
		$result = curlPost($url,$params);
		echo '<pre>'; print_r(json_decode($result, true));
    }
	
	public function deleteData()
    {
        $url = 'http://macrew.info/summerandjune/dev/example/users/id/';
		$id = 7;
		$params = array('name'=>'Mam','email'=>'manoj@gmail.com');
		$result = curlDelete($url,$id);
		echo '<pre>'; print_r($result);
    }
}
