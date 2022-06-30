<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function getRelatedPosts(Category $category)
    {
        return view('category.getRelatedPosts',["category" => $category]);
    }
    /*
        A vous de compléter le reste :
        
        create : [
            'GET' : Afficher le formulaire,
        ],
        store : [
            'POST' : Traite les données + create (Objet Request)
        ],
        edit : [
            'GET' : Afficher le formulaire (Objet Category, Objet Request)
        ],
        update : [
            'PUT' : Traite les données + update (Objet Category, Objet Request)
        ],
        'delete : [
            'delete : Supprime une categorie (Objet Category)
        ]
    */
}
