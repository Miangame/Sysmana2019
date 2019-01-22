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
        $user= $this->getUser();
        //$this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')
            /** @var PonentesHelper $ponentesHelper */
            $ponentesHelper = $this->get('ponentesHelper');

            $ponentes = $ponentesHelper->getPonentesByDay();

            $arrayPonentes = array();

            foreach ($ponentes as $index => $ponente) {
                switch ($ponente["day"]["id"]){
                    case 1:
                        $arrayPonentes["lunes"][$index] = $ponente;
                        break;
                    case 2:
                        $arrayPonentes["martes"][$index] = $ponente;
                        break;
                    case 3:
                        $arrayPonentes["miercoles"][$index] = $ponente;
                        break;
                    case 4:
                        $arrayPonentes["jueves"][$index] = $ponente;
                        break;
                    case 5:
                        $arrayPonentes["viernes"][$index] = $ponente;
                        break;
                }

            }


            return $this->render('sysmana2019/index.html.twig', array('ponentes'=> $arrayPonentes));

    }


}
