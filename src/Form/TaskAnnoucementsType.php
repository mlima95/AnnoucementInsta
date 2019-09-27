<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskAnnoucementsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class,[
                'label'=>'annoucements.title'
            ])
            ->add('price',MoneyType::class,[
                'label'=>'annoucements.price'
            ])
            ->add('content', TextareaType::class,[
                'label'=>'annoucements.content'
            ]);
    }
}