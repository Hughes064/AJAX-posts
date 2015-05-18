<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends CI_Model {

	public function send_post($comment)
	{
		$query = "INSERT INTO posts (notes) VALUES (?)";
		$results = $this->db->query($query, array ($comment['note']));
		return $results;
	}

	public function retrieve_post()
	{
		$query = "SELECT * FROM posts";
		$result = $this->db->query($query)->result_array();

		return $result;	
	}

}
?>