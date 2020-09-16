<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Projets;
use DateTime;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i < 11; $i++) { 
            $projet = new Projets();
            
            $projet->setTitle("Article n°".$i);
            $projet->setContent("Lorem ipsum dolor, sit amet consectetur
            possimus quae officia iure doloribus necessitatibus ipsum? Sunt!");
            $projet->setImage("http://placehold.it/350x150");

            $projet->setCreatedAt(new DateTime('NOW'));
            
            
            $manager->persist($projet);
        }

        $manager->flush();
    }
}
