<?php
// src/DataFixtures/AppFixtures.php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\DateTime;
 
class AppFixtures extends Fixture
{

    private $passwordEncoder;
 
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    
    public function load(ObjectManager $manager)
    {

        foreach ($this->getUserData() as [$username, $password, $email, $firstName, $lastName, $address, $postalCode, $city, $birthDate, $userType, $roles]) {
            $user = new User();
            $user->setUsername($username);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $password));
            $user->setEmail($email);
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setAddress($address);
            $user->setPostalCode($postalCode);
            $user->setCity($city);
            $user->setBirthDate(new \DateTime($birthDate));
            $user->setCreationDate(new \DateTime(date('Y-m-d H:i:s')));
            $user->setUserType($userType);
            $user->setRoles($roles);
 
            $manager->persist($user);
            $this->addReference($username, $user);
        }
 
        $manager->flush();
    }
 

    private function getUserData(): array
    {
        return [
            ['xribant', 'Helix2014', 'xribant@gmail.com', 'Xavier', 'Ribant', 'Rue des Tilleuls 45', '1435', 'Hévillers', '1979-12-18 00:00:00', 'prof', ['ROLE_ADMIN']],
            ['fevrard', 'Hubble1218', 'taty_franfran@hotmail.com', 'Francoise', 'Evrard', 'Rue des Tilleuls 45', '1435', 'Hévillers', '1982-09-14 00:00:00', 'prof', ['ROLE_ADMIN']],
            ['abachelart', 'test123', 'abachelart@symfony.com', 'Amélie', 'Bachelart', 'Rue du Progrès 8', '1420', "Braine-L'Alleud", '1981-05-16 00:00:00', 'prof', ['ROLE_USER']],
        ];
    }
 
}