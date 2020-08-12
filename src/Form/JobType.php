<?php

namespace App\Form;

use App\Entity\Job;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('company')
            ->add('contract', ChoiceType::class,[
                'choices' => [
                    'CDI' => 'CDI',
                    'CDD' => 'CDD',
                    'Alternance' => 'Alternance',
                    'Stage' => 'Stage',
                    'Freelance' => 'Freelance',
                ],
            ])
            ->add('salary')
            ->add('link')
            ->add('experience')
            ->add('skills')
            ->add('author')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Job::class,
        ]);
    }
}
