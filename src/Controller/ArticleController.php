<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response ('OMG my firstpae alerday');
    }

    /**
     * @Route("/news/{slug}")
     * @param $slug
     * @return Response
     *
     */
    public function show($slug)
    {
        return new Response(sprintf(
           'Future page to show the articles: "%s"' ,
            $slug
        ));

    }

}