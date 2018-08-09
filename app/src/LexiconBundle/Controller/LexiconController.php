<?php

namespace LexiconBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LexiconController extends Controller
{
    /**
     * @Route("/{page}", name="lexicon_list", requirements={"page"="\d+"})
     */
    public function listAction($page = 1)
    {
        return $this->render('LexiconBundle:lexicon:list.html.twig', array(
            'page' => (int)$page,
        ));
    }

    /**
     * @Route("/{slug}", name="lexicon_show")
     */
    public function showAction($slug)
    {
        $entry = trim($slug);

        if (!$entry) {
            throw $this->createNotFoundException('Lexicon entry does not exist');
        }

        return $this->render('LexiconBundle:lexicon:show.html.twig', array(
            'entry' => $entry,
        ));
    }
}