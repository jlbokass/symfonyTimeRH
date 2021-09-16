<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }


    public function load(ObjectManager $manager)
    {
        // Jean Fresnel
        $user1 = new User();
        $user1->setFirstname('Jean-Michel');
        $user1->setLastname('FRESNEL');
        $user1->setEmail('Jean-Michel.Fresnel@BIOLANDES.com');
        $user1->setRoles(['ROLE_MANAGER']);
        $user1->setPassword($this->passwordHasher->hashPassword($user1, 'admin1'));
        $user1->setHolidays(188);

        $user2 = new User();
        $user2->setFirstname('Florent');
        $user2->setLastname('CASQUERO');
        $user2->setEmail('Florent.Casquero@BIOLANDES.com');
        $user1->setRoles(['ROLE_GESTIONNAIRE']);
        $user2->setPassword($this->passwordHasher->hashPassword($user1, 'admin2'));
        $user2->setHolidays(188);

        $user3 = new User();
        $user3->setFirstname('Appoline');
        $user3->setLastname('GRILLOT');
        $user3->setEmail('Appolline.Grillot@BIOLANDES.com');
        $user3->setPassword($this->passwordHasher->hashPassword($user1, 'admin3'));
        $user3->setHolidays(200);

        $manager->persist($user1);
        $manager->persist($user2);
        $manager->persist($user3);

        $manager->flush();
    }
}
