<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Kubrow;
use App\Form\Type\GeneratorSearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class KubrowGeneratorController extends Controller {

  /**
  * @Route("/generator")
  **/
  public function initGenerator() {

    $kubs = $this->getDoctrine()->getRepository(Kubrow::class)->findAll();

    $form = $this->createForm(GeneratorSearchType::class);
    // if(!$kubs) {
    //   throw $this->createNotFoundException("Oups... Il semblerait qu'il y ait aucun kubrow en vente");
    // }

    return $this->render('kubrowGenerator.html.twig',
    [
        'form' => $form,
        'kubrows' => $kubs,
    ]);
  }


  // public function initSearch(): JsonResponse {
  //
  // }
}
