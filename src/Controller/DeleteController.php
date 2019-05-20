<?php

namespace App\Controller;

use App\Entity\Cost;
use App\Entity\Person;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteController extends AbstractController
{
    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function index(Request $request,Person $person)
    {
        $form = $this->createFormBuilder()
            ->add('id',TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Click'])
            ->getForm();;

        $costrepository = $this->getDoctrine()
            ->getRepository(Cost::class);

        $result = $costrepository->findByPerson($person);

        $personrepository = $this->getDoctrine()
            ->getRepository(Person::class);

        //homepageにpersonに渡すときはこういう風にしてlistとして渡す(改善しなければならない)
        $nameResult = $personrepository->findByName($person->getName());

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $selectedId = $form->get('id')->getData();
            $deleteCost = $costrepository->find($selectedId);
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($deleteCost);
            $manager->flush();



            return $this->render('homepage/index.html.twig', [
                'title' => "homepage",
                "person" => $nameResult,
            ]);
        }

        return $this->render('delete/index.html.twig', [
            'title' => 'Delete',
            'form' => $form->createView(),
            'cost' => $result,
            'person'=> $nameResult
        ]);
    }


}
