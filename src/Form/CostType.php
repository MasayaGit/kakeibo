<?php
namespace App\Form;

use App\Entity\Person;
use App\Entity\Cost;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use Symfony\Component\Validator\Constraints as Assert;


class CostType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('costname',TextType::class)
            ->add('price', IntegerType::class)
            ->add('category', ChoiceType::class, [
                 'choices' => [
                    '食費' => '食費',
                    '娯楽' => '娯楽',
                    '交通費' => '交通費',
                  ]])
            ->add('time', DateType::class,['widget' => 'choice','format'=>'yyyy-MM-dd',])
            ->add('save', SubmitType::class, array('label' => 'Click'));

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Cost::class,
        ));
    }
}