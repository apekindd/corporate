<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends SiteController
{
    //
    public function __construct( PortfoliosRepository $p_rep, ArticlesRepository $a_rep){
        parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));

        $this->p_rep = $p_rep;
        $this->a_rep = $a_rep;

        $this->bar = 'right';
        $this->template = env('THEME').'.articles';
    }

    public function index()
    {
        $articles = $this->getArticles();
        return $this->renderOutput();
    }

    public function getArticles($alias=false){
        $articles = $this->a_res->get();
    }
}
