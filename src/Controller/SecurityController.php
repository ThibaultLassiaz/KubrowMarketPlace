<?php


namespace App\Controller;

use App\Form\Handler\UserHandler;
use App\Form\Type\RegisterType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends Controller
{
    /**
    *@Route("/register")
    **/
    public function register(UserHandler $formHandler, Request $request)
    {
        $form = $this->createForm(RegisterType::class);

        if($formHandler->handle($form, $request)) {

            return $this->redirectToRoute('accueil');
        }

        return $this->render('security/register.html.twig', ['form' => $form->createView()]);
    }
}
