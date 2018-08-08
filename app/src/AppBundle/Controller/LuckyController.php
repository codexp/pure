<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{max}/{min}", name="lucky_number")
     *
     * @param int $max
     * @param int $min
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function numberAction($max = 100, $min = 1)
    {
        return $this->render('lucky/number.html.twig', array(
            'number' => random_int($min, $max),
        ));
    }
}
