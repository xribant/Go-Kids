<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator\Constraints as CustomAssert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Entity\Classroom;
use App\Entity\User;
use App\Entity\Teacher;



class RegisterUser
{
    
    /**
     * @Assert\NotBlank(message="Veuillez entrer un prénom")
     */
    private $firstName;

    /**
     * @Assert\NotBlank(message="Veuillez entrer un nom de famille")
     */
    private $lastName;

    /**
     * @Assert\NotBlank(message="Veuillez entrer une adresse e-mail")
     * @Assert\Email()
     */
    private $email;

    /**
     * @Assert\NotBlank(message="Veuillez entrer rue et n°")
     */
    private $address;

    /**
     * @Assert\NotBlank(message="Veuillez entrer un code postal")
     * @Assert\Range(min = 1000, max = 9999, minMessage="Entrez un code postal valide")
     */
    private $postalCode;

    /**
     * @Assert\NotBlank(message="Veuillez entrer une ville")
     */
    private $city;

    /**
     * @Assert\NotBlank(message="Veuillez entrer la date de naissance")
     * @Assert\Date(message="Veuillez entrer une date valide")
     */
    private $birthDate;

    private $phone;

    private $roles;

    private $isActive;

    private $photo;

     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Classroom", inversedBy="students")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classroom;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Classroom", inversedBy="teachers")
     */
    private $classrooms;

    public function __construct()
    {
        $this->classrooms = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postalCode;
    }

    public function setPostalCode(?int $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(?\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getIsActive(): ?string
    {
        return $this->isActive;
    }

    public function setIsActive(string $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->Photo = $photo;

        return $this;
    }

    /**
     * @return Collection|Classroom[]
     */
    public function getClassrooms(): Collection
    {
        return $this->classrooms;
    }

    public function addClassroom(Classroom $classroom): self
    {
        if (!$this->classrooms->contains($classroom)) {
            $this->classrooms[] = $classroom;
        }

        return $this;
    }

    public function removeClassroom(Classroom $classroom): self
    {
        if ($this->classrooms->contains($classroom)) {
            $this->classrooms->removeElement($classroom);
        }

        return $this;
    }

    public function getClassroom(): ?Classroom
    {
        return $this->classroom;
    }

    public function setClassroom(?Classroom $classroom): self
    {
        $this->classroom = $classroom;

        return $this;
    }

    public function setClassrooms(?Classroom $classrooms): self
    {
        $this->classrooms = $classrooms;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        // username generation from first & Last Names
        $length = strlen($this->firstName)-1;
        $username = strtolower(substr($this->firstName, 0, -$length).$this->lastName);

        // random password generation
        $newPassword = random_bytes(8);

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($newPassword);
        $user->setEmail($this->email);
        $user->setFirstName($this->firstName);
        $user->setLastName($this->lastName);
        $user->setAddress($this->address);
        $user->setPostalCode($this->postalCode);
        $user->setCity($this->city);
        $user->setBirthDate($this->birthDate);
        $user->setCreationDate(new \DateTime(date('Y-m-d H:i:s')));
        $user->setPhone($this->phone);

        // Set Roles
        switch($this->roles)
        {
            case 'ROLE_USER':
            $user->setRoles(["ROLE_USER"]);
            break;

            case 'ROLE_ADMIN':
            $user->setRoles(["ROLE_ADMIN"]);
            break;
        }
        $user->setIsActive(true);
        if(!($this->photo)) {
            $user->setPhoto('build/img/users/avatar_boy.png');
        }
        else
        {
            $user->setPhoto($this->photo);
        }
 
        return $user;
    } 

    /**
     * @return Teacher
     */
    public function getTeacher()
    {
        // username generation from first & Last Names
        $length = strlen($this->firstName)-1;
        $username = strtolower(substr($this->firstName, 0, -$length).$this->lastName);

        // random password generation
        $newPassword = random_bytes(8);

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($newPassword);
        $user->setEmail($this->email);
        $user->setFirstName($this->firstName);
        $user->setLastName($this->lastName);
        $user->setAddress($this->address);
        $user->setPostalCode($this->postalCode);
        $user->setCity($this->city);
        $user->setBirthDate($this->birthDate);
        $user->setCreationDate(new \DateTime(date('Y-m-d H:i:s')));
        $user->setPhone($this->phone);

        $teacher = new Teacher();

        foreach($this->classrooms as $classroom)
        {
            $teacher->addClassroom($classroom);
        }

        $user->setTeacher($teacher);        

        // Set Roles
        switch($this->roles)
        {
            case 'ROLE_USER':
            $user->setRoles(["ROLE_USER"]);
            break;

            case 'ROLE_ADMIN':
            $user->setRoles(["ROLE_ADMIN"]);
            break;
        }
        $user->setIsActive(true);
        if(!($this->photo)) {
            $user->setPhoto('build/img/users/avatar_boy.png');
        }
        else
        {
            $user->setPhoto($this->photo);
        }
 
        return $user;
    } 

    /**
     * @return Student
     */
    public function getStudent()
    {
        // username generation from first & Last Names
        $length = strlen($this->firstName)-1;
        $username = strtolower(substr($this->firstName, 0, -$length).$this->lastName);

        // random password generation
        $newPassword = random_bytes(8);

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($newPassword);
        $user->setEmail($this->email);
        $user->setFirstName($this->firstName);
        $user->setLastName($this->lastName);
        $user->setAddress($this->address);
        $user->setPostalCode($this->postalCode);
        $user->setCity($this->city);
        $user->setBirthDate($this->birthDate);
        $user->setCreationDate(new \DateTime(date('Y-m-d H:i:s')));
        $user->setPhone($this->phone);

        $student = new Student();

        $student->setClassroom($this->classrooms);
        $user->setStudent($student);        

        $user->setRoles(["ROLE_USER"]);

        $user->setIsActive(true);

        if(!($this->photo)) {
            $user->setPhoto('build/img/users/avatar_boy.png');
        }
        else
        {
            $user->setPhoto($this->photo);
        }
 
        return $user;
    } 

}