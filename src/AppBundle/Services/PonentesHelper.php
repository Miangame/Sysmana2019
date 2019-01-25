<?php
namespace AppBundle\Services;
use AppBundle\Repository\PonenteRepository;
use Doctrine\ORM\EntityManager;

class PonentesHelper
{
    private $em;
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getPonentesByDay()
    {
        /** @var PonenteRepository $ponenteRepository */
        $ponenteRepository = $this->em->getRepository('AppBundle:Ponente');
        $ponentes = $ponenteRepository->getPonentesByDay();

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

        return $arrayPonentes;
    }

}