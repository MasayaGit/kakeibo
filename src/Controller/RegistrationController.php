<?php

namespace App\Controller;

use App\Entity\Person;
use App\Entity\Cost;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Form\PersonType;
use App\Form\CostType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registrationKakeibo/{id}", name="registrationKakeibo")
     */
    public function registrationKakeibo(Request $request,Person $person)
    {
        $cost = new Cost();
        $form = $this->createForm(CostType::class, $cost);
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST'){
            $cost = $form->getData();
            $cost->setPerson($person);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cost);
            $manager->flush();
            $repository = $this->getDoctrine()
                ->getRepository(Person::class);
            $nameResult = $repository->findByName($person->getName());
            return $this->render('homepage/index.html.twig', [
                'title' => "homepage",
                'person' => $nameResult,
            ]);
        } else {
            return $this->render('registration/registrationKakeibo.html.twig', [
                'title' => 'registrationKakeibo',
                'form' => $form->createView(),

            ]);
        }
    }


    /**
     * @Route("/registrationPerson", name="registrationPerson")
     */
    public function registrationPerson(Request $request)
    {
        $person = new Person();
        $form = $this->createForm(PersonType::class, $person);
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST'){
            $person = $form->getData();
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($person);
            $manager->flush();
            return $this->redirect('/');
        } else {
            return $this->render('registration/registrationPerson.html.twig', [
                'title' => 'registrationPerson',
                'form' => $form->createView(),
            ]);
        }
    }

}

