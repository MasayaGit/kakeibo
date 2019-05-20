<?php

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AccessHomepageController extends AbstractController
{
    /**
     * @Route("/accesshomepage/{id}", name="access_homepage")
     */
    public function index(Request $request,Person $person)
    {
        $personrepository = $this->getDoctrine()
            ->getRepository(Person::class);
        //homepageにpersonに渡すときはこういう風にしてlistとして渡す(改善しなければならない)
        $nameResult = $personrepository->findByName($person->getName());


        return $this->render('homepage/index.html.twig', [
            'title' => "homepage",
            "person" => $nameResult,
        ]);
    }
}
