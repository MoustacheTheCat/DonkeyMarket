<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixture extends Fixture
{
    public const CATEGORY_TRAVELS = 'Travels';
    public const CATEGORY_MULTIMEDIAS = 'Multimedias';
    public const CATEGORY_COMPUTERS = 'Computers';
    public const CATEGORY_SMARTPHONES = 'Smartphones';
    public const CATEGORY_TABLETS = 'Tablets';
    public function load(ObjectManager $manager): void
    {
        $travels = new Category();
        $travels->setName('Travels');
        $manager->persist($travels);
        $this->addReference(self::CATEGORY_TRAVELS, $travels);

        $multimedias = new Category();
        $multimedias->setName('Multimedias');
        $manager->persist($multimedias);
        $this->addReference(self::CATEGORY_MULTIMEDIAS, $multimedias);
        

        $computeur = new Category();
        $computeur->setName('Computers');
        $computeur->setParent($multimedias);
        $manager->persist($computeur);
        $this->addReference(self::CATEGORY_COMPUTERS, $computeur);


        $smartphones = new Category();
        $smartphones->setName('Smartphones');
        $smartphones->setParent($multimedias);
        $manager->persist($smartphones);
        $this->addReference(self::CATEGORY_SMARTPHONES, $smartphones);

        $tablets = new Category();
        $tablets->setName('Tablets');
        $tablets->setParent($multimedias);
        $manager->persist($tablets);
        $this->addReference(self::CATEGORY_TABLETS, $tablets);

        $manager->flush();
    }


    
}
