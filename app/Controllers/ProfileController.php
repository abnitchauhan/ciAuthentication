<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProfileController extends Controller{
    public function index()
    { 
        if(! session())
        {
            echo "Session not set";   
            return redirect()->to('/signin');
        }

      else
        {
            $session = session();
            $userDetails = ['name' => $session->get('name'),
                            'email' => $session->get('email')];
            echo view('profile', $userDetails); 
        }
    }

    public function logout()
    {
        if(session())
        {
            $session = session();
            $session->destroy();
            return redirect()->to('/signin');
        }
    }
}