<?php

namespace App\Controller;

use App\Entity\Cost;
use App\Entity\Person;
use App\Form\CostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ShowCostController extends AbstractController
{

    /**
     * @Route("/showcost/{id}", name="show_cost")
     */
    public function index(Request $request,Person $person)
    {
        $repository = $this->getDoctrine()
            ->getRepository(Person::class);
        $nameResult = $repository->findByName($person->getName());


        return $this->render('show_cost/index.html.twig', [
            'title' => "show_cost",
            "person" => $nameResult,
        ]);
    }

    /**
     * @Route("/showcostByCategory/{id}", name="showcostbyvategory")
     */
    public function showcostByCategory(Request $request,Person $person)
    {
        $cost = new Cost();
        $form = $this->createFormBuilder()
                ->add('category', ChoiceType::class, [
                    'choices' => [
                        '食費' => '食費',
                        '娯楽' => '娯楽',
                        '交通費' => '交通費',
                    ]])
                ->add('save', SubmitType::class, ['label' => 'Click'])
                ->getForm();;
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST'){
            $selected = $form->getData();

            $repository = $this->getDoctrine()
                ->getRepository(Cost::class);
            $result = $repository->findByCategory($person,$selected);

            return $this->render('show_cost/result.html.twig', [
                'title' => "show_cost",
                'cost' => $result,
            ]);
        } else {
            return $this->render('show_cost/form.html.twig', [
                'title' => 'show_cost',
                'form' => $form->createView(),
            ]);
        }
    }
}
