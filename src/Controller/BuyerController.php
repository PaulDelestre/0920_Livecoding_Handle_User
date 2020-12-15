<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BuyerController extends AbstractController
{
    /**
     * @Route("/buyer", name="buyer")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('buyer/index.html.twig', [
            'products' => $productRepository->findAll()
        ]);
    }
}
