<?php

 class Db extends CI_Controller{
 	
 	private function index ()
 	{
 		echo 'Hello World';
 	}
 	public function panggil()
 	{
 		$this->index();
    }
 }