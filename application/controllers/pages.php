<?php

class Pages extends CI_Controller 
{
	public function view($page = 'home') 
	{
		if (!file_exists(APPPATH.'/views/pages/'.$page.'.php')) 
		{
			// Page does not exist
			show_404();
		}
		
		// Page exists
		
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('pages/'.$page,$data);
		;
	}
}