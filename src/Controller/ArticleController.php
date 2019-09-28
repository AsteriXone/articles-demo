<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('index.html.twig', []);
    }

    /**
     * @Route("/article", name="article_show")
     */
    public function article_show()
    {
        return $this->render('article/show.html.twig', []);
    }
}
