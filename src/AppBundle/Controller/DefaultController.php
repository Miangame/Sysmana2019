<?php

namespace AppBundle\Controller;

use AppBundle\Services\PonentesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
            /** @var PonentesHelper $ponentesHelper */


            $ponentesHelper = $this->get('ponentesHelper');

            $ponentes = $ponentesHelper->getPonentesByDay();

            return $this->render('sysmana2019/index.html.twig', array('ponentes'=> $ponentes));

    }


}
