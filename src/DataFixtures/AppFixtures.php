<?php

namespace App\DataFixtures;

use App\Entity\Audit;
use App\Entity\User;
use App\Entity\Report;
use App\Enum\AuditStatus;
use App\Enum\ReportType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


        $user1 = new User();
        $user1->setLastname("Bambou");
        $user1->setFirstname("Agathe");
        $user1->setEmail("agathe.b@fluffy.fr");
        $user1->setPassword("&23"); 
        $user1->setCreatedAt(new \DateTimeImmutable('1988-06-12'));
        
        $manager->persist($user1);

        $user2 = new User();
        $user2->setLastname("Dupont");
        $user2->setFirstname("Louis");
        $user2->setEmail("louis.d@fluffy.fr");
        $user2->setPassword("123");
        $user2->setCreatedAt(new \DateTimeImmutable('1998-03-25'));
       
        $manager->persist($user2);
        
        $user3 = new User();
        $user3->setLastname("Martin");
        $user3->setFirstname("Claire");
        $user3->setEmail("claire.m@fluffy.fr");
        $user3->setPassword("123");
        $user3->setCreatedAt(new \DateTimeImmutable('2000-11-07'));
       
        $manager->persist($user3);
        
        $user4 = new User();
        $user4->setLastname("Nguyen");
        $user4->setFirstname("Huy");
        $user4->setEmail("huy.n@fluffy.fr");
        $user4->setPassword("123");
        $user4->setCreatedAt(new \DateTimeImmutable('2001-08-19'));
        
        $manager->persist($user4);
        
        $user5 = new User();
        $user5->setLastname("Lopez");
        $user5->setFirstname("Sofia");
        $user5->setEmail("sofia.l@fluffy.fr");
        $user5->setPassword("123");
        $user5->setCreatedAt(new \DateTimeImmutable('1999-02-14'));
        
        $manager->persist($user5);

        $report1 = new Report();
        $report1->setType(ReportType::REPORT);
        $report1->setTitle("report of socks_company");
        $report1->setPath("src/doc/report/socks_company");
        $report1->setBitsLength(32);
        $report1->setCreatedAt(new \DateTimeImmutable('2025-12-22'));
        $report1->setWrittenBy($user2->getFirstname().' '.$user2->getLastname());
        $manager->persist($report1);

        $audit1 = new Audit();
        $audit1->setTitle("L'audit très fun !");
        $audit1->setAuditInspectorName($user4->getFirstname().' '.$user4->getLastname());
        $audit1->setCreatedAt(new \DateTimeImmutable('2025-11-20'));
        $audit1->setEndedAt(new \DateTimeImmutable('2025-12-20'));
        $audit1->setStatus(AuditStatus::ENDED);
        $manager->persist($audit1);

        $audit2 = new Audit();
        $audit2->setTitle("Audit surement sympa");
        $audit2->setCreatedAt(new \DateTimeImmutable('2026-01-18'));
        $audit2->setStatus(AuditStatus::ASKED);
        $manager->persist($audit2);

        $audit3 = new Audit();
        $audit3->setTitle("Audit woauh !");
        $audit3->setAuditInspectorName($user4->getFirstname().' '.$user4->getLastname());
        $audit3->setCreatedAt(new \DateTimeImmutable('2025-12-28'));
        $audit3->setStatus(AuditStatus::INPROG);

        $manager->persist($audit3);

        


        $manager->flush();
    }
}
