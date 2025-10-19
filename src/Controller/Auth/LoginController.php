<?php

declare(strict_types=1);

namespace App\Controller\Auth;

use Symfony\Component\Security\Core\User\UserInterface;
use LogicException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class LoginController extends AbstractController
{
    #[Route('/auth/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        // If user is already logged in, redirect to dashboard
        if ($this->getUser() instanceof UserInterface) {
            return $this->redirectToRoute('app_dashboard');
        }

        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // Last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('auth/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): never
    {
        // This method can be blank - it will be intercepted by the logout key on your firewall
        throw new LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
