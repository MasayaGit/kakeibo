<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    /**
     * @Route("/", name="login")
     */
    public function login(Request $request)
    {

        $person = new Person();
        $form = $this->createForm(PersonType::class, $person);
        $form->handleRequest($request);


        if ($request->getMethod() == 'POST'){
            $namestr = $form->getData()->getName();
            $passwordstr = $form->getData()->getPassword();
            $repository = $this->getDoctrine()
                ->getRepository(Person::class);
            $nameResult = $repository->findByName($namestr);
            $passwordResult = $repository->findByPassword($passwordstr);
            if ($nameResult != null && $passwordResult != null  ){

                return $this->render('homepage/index.html.twig', [
                    'title' => "homepage",
                    'name' => $namestr,
                ]);

            }
            else{
                return $this->render('login/index.html.twig', [
                    'title' => 'Login',
                    'form' => $form->createView(),
                ]);
            }
        }
        else{
            return $this->render('login/index.html.twig', [
                'title' => 'Login',
                'form' => $form->createView(),
            ]);
        }
    }




}
