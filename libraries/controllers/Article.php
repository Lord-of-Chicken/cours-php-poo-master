<?php

namespace Controllers;

require_once 'libraries/utils.php';
require_once 'libraries/models/Article.php';


class Article
{

    public function index()
    {
        $models = new \Models\Article();
        $articles = $models->findAll("created_at DESC");
        $pageTitle = "Accueil";
        render('articles/index', compact('pageTitle', 'articles'));
    }

    public function show()
    {
        
    }
    public function delete()
    {
    }
}
