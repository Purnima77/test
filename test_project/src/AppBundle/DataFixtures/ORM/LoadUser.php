<?php

namespace AppBundle\DataFixtures\ORM;



Use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager as OM;
Use AppBundle\Entity\User;

class LoadUsers implements FixtureInterface
{
    public function load(OM $manager) {
        $user1 = new User();
        $user1->setName('John');
        $user1->setBio('HE is Cool');
        $user1->setEmail('test@test.com');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('John2');
        $user2->setBio('HE is Cool2');
        $user2->setEmail('test2@test.com');
        $manager->persist($user2);

        //update
        $user2->setName('New User name!');

        $manager->flush();
    }
}