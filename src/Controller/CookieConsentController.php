<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CookieConsentController extends AbstractController
{
    #[Route('/cookie/consent', name: 'app_cookie_consent')]
    public function index(Request $request): JsonResponse
    {
        return $this->json($data = [], $status = 200);
    }
}
