<?php

namespace App\Controller;

use App\Entity\Cost;
use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RenewalController extends AbstractController
{
    /**
     * @Route("/renewal/{id}", name="renewal")
     */
    public function index(Request $request,Person $person)
    {
        $form = $this->createFormBuilder()
            ->add('id',TextType::class)
            ->add('costname',TextType::class)
            ->add('price', IntegerType::class)
            ->add('category', ChoiceType::class, [
                'choices' => [
                    '食費' => '食費',
                    '娯楽' => '娯楽',
                    '交通費' => '交通費',
                ]])
            ->add('time', DateType::class,['widget' => 'choice','format'=>'yyyy-MM-dd',])
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
            $selectedcostname = $form->get('costname')->getData();
            $selectedprice = $form->get('price')->getData();
            $selectedcategory = $form->get('category')->getData();
            $selectedtime = $form->get('time')->getData();

            $selectCost = $costrepository->find($selectedId);

            $selectCost->setCostname($selectedcostname);
            $selectCost->setPrice($selectedprice);
            $selectCost->setCategory($selectedcategory );
            $selectCost->setTime($selectedtime);

            $manager = $this->getDoctrine()->getManager();
            $manager->flush();

            return $this->render('homepage/index.html.twig', [
                'title' => "homepage",
                "person" => $nameResult,
            ]);
        }

        return $this->render('renewal/index.html.twig', [
            'title' => 'Renewal',
            'form' => $form->createView(),
            'cost' => $result,
            'person'=> $nameResult
        ]);
    }

}
