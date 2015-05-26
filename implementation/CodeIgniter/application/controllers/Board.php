<?php

class Board extends CI_Controller {
	
	public function index() {
		$this->load->view('templates/page', array('menu'=> 'board/toolbar', 'container'=>'board/container'));
	}
}

?>