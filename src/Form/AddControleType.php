<?php

namespace App\Form;

use App\Entity\Classroom;
use App\Entity\Student;
use App\Entity\Teacher;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;


class AddControleType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('intitule', TextType::class, [
        		'label' => 'intitule',
                'required' => false,
            ])
            ->add('score', IntegerType::class, [
                'label' => 'Cote Max',
                'required' => false
            ])
            ->add('competence', EntityType::class, [
                'class' => Competence::class,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                              ->orderBy('c.name', 'ASC');
                },
                'choice_label' => 'name',
                'expanded' => false,
                'multiple' => false
            ])
            ->add('planedDate', DateType::class, [
                'label' => 'Planifié pour',
                'required' => false,
            ])
            ->add('classrooms', EntityType::class, [
                'class' => Classroom::class,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                            ->orderBy('c.name', 'ASC');
                },
                'choice_label' => 'name',
                'expanded' => true,
                'multiple' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Controle',
            'csrf_protection' => false,
        ]);
    }

}