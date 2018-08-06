<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LexiconController extends Controller
{
    /**
     * @Route("/lexicon/{page}", name="lexicon_list", requirements={"page"="\d+"})
     */
    public function listAction($page = 1)
    {
        return $this->render('lexicon/list.html.twig', array(
            'page' => (int)$page,
        ));
    }

    /**
     * @Route("/lexicon/{slug}", name="lexicon_show")
     */
    public function showAction($slug)
    {
        return $this->render('lexicon/show.html.twig', array(
            'entry' => $slug,
        ));
    }
}
