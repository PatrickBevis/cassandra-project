<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Role;
use App\Enum\RoleCode;
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

        $roleAdmin = new Role();
        $roleAdmin->setCode(RoleCode::ADMIN);
        $roleAdmin->setLibelle('Administrateur');
        $manager->persist($roleAdmin);

        $roleAuditor = new Role();
        $roleAuditor->setCode(RoleCode::AUDITOR);
        $roleAuditor->setLibelle('Auditeur');
        $manager->persist($roleAuditor);
        
        $roleExaminer = new Role();
        $roleExaminer->setCode(RoleCode::EXAMINER);
        $roleExaminer->setLibelle('Examinateur');
        $manager->persist($roleExaminer);
        
        $roleStaff = new Role();
        $roleStaff->setCode(RoleCode::STAFF);
        $roleStaff->setLibelle('Staff');
        $manager->persist($roleStaff);

        $user1 = new User();
        $user1->setLastname("Bambou");
        $user1->setFirstname("Agathe");
        $user1->setEmail("agathe.b@fluffy.fr");
        $user1->setPassword("123");
        $user1->setCreatedAt(new \DateTimeImmutable('1988-06-12'));
        $user1->setRole($roleAdmin);
        $user1->setIsDeleted(false);
        $manager->persist($user1);

        $user2 = new User();
        $user2->setLastname("Dupont");
        $user2->setFirstname("Louis");
        $user2->setEmail("louis.d@fluffy.fr");
        $user2->setPassword("123");
        $user2->setCreatedAt(new \DateTimeImmutable('1998-03-25'));
        $user2->setRole($roleStaff);
        $user2->setIsDeleted(false);
        $manager->persist($user2);
        
        $user3 = new User();
        $user3->setLastname("Martin");
        $user3->setFirstname("Claire");
        $user3->setEmail("claire.m@fluffy.fr");
        $user3->setPassword("123");
        $user3->setCreatedAt(new \DateTimeImmutable('2000-11-07'));
        $user3->setRole($roleStaff);
        $user3->setIsDeleted(false);
        $manager->persist($user3);
        
        $user4 = new User();
        $user4->setLastname("Nguyen");
        $user4->setFirstname("Huy");
        $user4->setEmail("huy.n@fluffy.fr");
        $user4->setPassword("123");
        $user4->setCreatedAt(new \DateTimeImmutable('2001-08-19'));
        $user4->setRole($roleAuditor);
        $user4->setIsDeleted(false);
        $manager->persist($user4);
        
        $user5 = new User();
        $user5->setLastname("Lopez");
        $user5->setFirstname("Sofia");
        $user5->setEmail("sofia.l@fluffy.fr");
        $user5->setPassword("123");
        $user5->setCreatedAt(new \DateTimeImmutable('1999-02-14'));
        $user5->setRole($roleExaminer);
        $user5->setIsDeleted(false);
        $manager->persist($user5);





        $manager->flush();
    }
}
