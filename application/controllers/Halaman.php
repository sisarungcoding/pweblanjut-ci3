<?php
	/**
	* 
	*/
	class Halaman extends CI_Controller
	{
		
		function view()
		{
			$data['judul'] = 'Judul Halaman';
			$data['konten'] = 'halaman ini dipanggil dari controller Halaman';
			$this->load->view('hal_view',$data);
		}
	}