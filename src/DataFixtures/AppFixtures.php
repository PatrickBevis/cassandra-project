<?php

namespace App\DataFixtures;


use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $customer1 = new Customer();
        $customer1->setname('Gerard');
        $customer1->setEmail('gerard@fluffy.fr');
        $manager->persist($customer1);

        $customer2 = new Customer();
        $customer2->setname('Yvonne');
        $customer2->setEmail('yvonne@fluffy.fr');
        $manager->persist($customer2);

        $customer3 = new Customer();
        $customer3->setname('Germaine');
        $customer3->setEmail('yvonne@fluffy.fr');
        $manager->persist($customer3);

        $customer4 = new Customer();
        $customer4->setname('Leon');
        $customer4->setEmail('leon@fluffy.fr');
        $manager->persist($customer4);

        $customer5 = new Customer();
        $customer5->setname('Elisabeth');
        $customer5->setEmail('elisabeth@fluffy.fr');
        $manager->persist($customer5);

        $customer6 = new Customer();
        $customer6->setname('Charles');
        $customer6->setEmail('charles@fluffy.fr');
        $manager->persist($customer6);





        $manager->flush();
    }
}
