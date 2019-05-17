<?php

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Form\PersonType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registrationKakeibo", name="registrationKakeibo")
     */
    public function registrationKakeibo()
    {
        return $this->render('registration/registrationKakeibo.html.twig', [
            'title'=> "register",
        ]);
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

