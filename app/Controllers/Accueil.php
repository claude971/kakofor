<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Accueil extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    
    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Pas de page pour ce qui est demandé
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view($page)
            . view('templates/footer');
    }
}