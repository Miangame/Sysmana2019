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
        return $ponenteRepository->getPonentesByDay();
    }

}