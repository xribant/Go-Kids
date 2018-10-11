<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Classroom;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class RegisterTeacherType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('firstName', TextType::class, [
        		'label' => 'firstName',
                'required' => false,
            ])
            ->add('lastName', TextType::class, [
                'label' => 'lastName',
                'required' => false,
            ])
            ->add('email', EmailType::class, [
                'label' => 'email',
                'required' => false,
            ])
            ->add('address', TextType::class, [
                'label' => 'address',
                'required' => false,
            ])
            ->add('city', TextType::class, [
                'label' => 'city',
                'required' => false,
            ])
            ->add('postalCode', IntegerType::class, [
                'label' => 'postalCode',
                'required' => false,
            ])
            ->add('birthDate', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'required' => false,
            ])
            ->add('phone', TextType::class, [
                'label' => 'phone',
                'required' => false,
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'roles',
                'choices' => array(
                    'Utilisateur' => 'ROLE_USER', 
                    'Administrateur' => 'ROLE_ADMIN',
                ),
            ])
            ->add('classrooms', EntityType::class, [
                'class' => Classroom::class,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.name', 'ASC');
                },
                'choice_label' => 'name',
                'expanded' => true,
                'multiple' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\RegisterUser',
            'csrf_protection' => false,
        ]);
    }

}