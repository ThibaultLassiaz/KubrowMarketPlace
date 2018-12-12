<?php

namespace App\Form\Handler;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Psr\Log\LoggerInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class UserHandler
{
    /**
    * @var EntityManagerInterface
    */
    private $entityManager;

    /**
    * @var LoggerInterface
    */
    private $loggerInterface;

    public function __construct(EntityManagerInterface $em, LoggerInterface $logger)
    {
        $this->entityManager = $em;
        $this->loggerInterface = $logger;
    }

    public function handle(FormInterface $form, Request $request)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userData = $form->getData();

            /**
            * @var User $user
            */
            $user = new User();

            $user->setUsername($userModel->username);
            $user->setPassword($userModel->password);
            $user->setMail($userModel->email);

            $user->setRoles(['ROLE_USER']);

            try {
                $this->entityManager->persist($user);
            } catch (ORMException $e) {
                $this->loggerInterface->error($e->getMessage());
                $form->addError(new FormError('Looks like we can\'t create your account, please contact us !'));
                return false;
            }
            $this->entityManager->flush();
            return true;
        }
        return false;
    }
}
