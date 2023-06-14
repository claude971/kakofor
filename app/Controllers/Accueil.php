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

        // Données transférées à la vue demandée
        $data['title'] = ucfirst($page); // Capitalize the first letter

        // Afficher la vue avec en-tête et pied-de-page
        return view('templates/header', $data)
            . view($page)
            . view('templates/footer');
    }
}