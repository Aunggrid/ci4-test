<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}


    public function view($page = 'home'){
	
    if(!is_file(APPPATH.'/Views/Pages/'.$page.'.php')) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);

          }
    
    $data['title'] = ucfirst($page);
    echo view('page/'.$page, $data);

        }
    
    }

	


