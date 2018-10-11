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
            ->add('description', TextType::class, [
                'label' => 'description',
                'required' => false,
            ])
            ->add('teachers', EntityType::class, [
                'class' => Teacher::class,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                            ->innerJoin('t.user', 'u');
                },
                'by_reference' => false,
                'choice_label' => 'id',
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('students', EntityType::class, [
                'class' => Student::class,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                            ->innerJoin('s.user', 'u');
                },
                'choice_label' => 'user',
                'expanded' => true,
                'multiple' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Classroom',
            'csrf_protection' => false,
        ]);
    }

}