<?php

namespace App\DataFixtures;

use App\Entity\Todo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i = 0; $i < 21; $i++) {
            $todo = new Todo();
            $rand = random_int(0, 100);
            $todo->setName('product '.$rand);
            $todo->setDescription(mt_rand(10, 100));
            $manager->persist($todo);
        }

        $manager->flush();
    }
}
