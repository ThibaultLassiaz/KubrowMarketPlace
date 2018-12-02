<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Kubrow;
// use App\Services\CombinaisonGenerationService;

class KubrowController extends Controller {

  /**
  *@Route("kubrow/{KubId}")
  **/
  public function getKubrow($KubId) {
    $myKub = $this->getDoctrine()->getRepository(Kubrow::class)->find($KubId);

    if(!$myKub) {
      throw $this->createNotFoundException("Oups... Il semblerait qu'on ai pas trouvé le kubrow numéro ".$KubId);
    }
    return $this->render('kubrow.html.twig', array('kub' => $myKub ));
  }

  /**
  *@Route("registerKubrow")
  **/
  public function addKubrow($kubrowCharacateristics) {


    $entityManager = $this->getDoctrine()->getManager();

    // dummies, ajouter un formulaire pour ajouter le persist et l'ajout des kubrow

    $kubrow = new Kubrow();
    $kubrow->setBreed($KubrowCharacateristics["breed"]);
    $kubrow->setBuild($kubrowCharacateristics["build"]);
    $kubrow->setPattern($kubrowCharacateristics["pattern"]);
    $kubrow->setEnergyColor($kubrowCharacateristics["energy"]);
    $kubrow->setPrimaryColor("Gold");
    $kubrow->setSecondaryColor("Black");
    $kubrow->setTertiaryColor("Red");
    $kubrow->setNumberOfPrintAvailable(2);

    $entityManager->persist($kubrow);

    $entityManager->flush();

    return $this->render('kubrowAdd.html.twig', array('kub' => $kubrow ));
  }

  /**
  *@Route("accueil")
  **/
  public function accueil() {

      // dummies made to GeneratedValue
      // TO DO : form research
      $data = [
            'primary' => [
                'gold',
                'red'
            ],
            'secondary' => [
                'black',
                'navy blue',
            ],
            'tertiary' => [
                'green',
                'gold',
            ],
            'energy' => [
                'gold',
                'liliac',
            ]
        ];

    $possibleKubrows = $this->get('CombinaisonService')->generateCombinaisons($data);

      $kubs = $this->getDoctrine()->getRepository(Kubrow::class)->findAll();
      if(!$kubs) {
        throw $this->createNotFoundException("Oups... Il semblerait qu'il y ait aucun kubrow en vente");
      }
      return $this->render('base.html.twig',
      [
          'kubrows' => $kubs,
          'possibleKubrows' => $possibleKubrows,
      ]);
  }

  /**
  *@Route("kubrow")
  **/
  public function getAllKubrowOnSale() {

    $kubs = $this->getDoctrine()->getRepository(Kubrow::class)->findAll();

    if(!$kubs) {
      throw $this->createNotFoundException("Oups... Il semblerait qu'il y ait aucun kubrow en vente");
    }

    return $this->render('kubrowList.html.twig', array('kubrows' => $kubs ));
  }
}




?>
