<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	/** ------------------------------------------------------- **
	 **           MANDATORY SCRIPT
    /** ------------------------------------------------------- **/
	public function index()
	{
		$url = 'http://bwc-webserv01.bdms.co.th:3000/getPromotion';
		$ch = curl_init($url);

		// Setup request to send json via POST
		$data = array(
			"keyName" => ["promotion_prevention_and_wellness_clinic"],
			"userId" => 2413
		);

		$payload = json_encode($data);

		// Attach encoded JSON string to the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

		// Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

		// Set method
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

		// Return response instead of outputting
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Execute the POST request
		$result = curl_exec($ch);

		// Close cURL resource
		curl_close($ch);

		$blog = json_decode($result);
		$blog = $blog->data;

		// echo '<pre>';
		// print_r($blog);
		// exit();

		$this->load->view('header');
		$this->load->view('index',compact('blog'));
		$this->load->view('footer');
	}
}
