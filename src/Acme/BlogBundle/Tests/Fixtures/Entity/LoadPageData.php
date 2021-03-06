<?php
/**
 * Created by PhpStorm.
 * User: Huan Nguyen
 * Date: 6/17/2015
 * Time: 4:12 PM
 */

namespace Acme\BlogBundle\Tests\Fixtures\Entity;

use Acme\BlogBundle\Entity\Page;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadPageData implements FixtureInterface
{
    static public $pages = array();

    public function load(ObjectManager $manager)
    {
        $page = new Page();
        $page->setTitle('title');
        $page->setBody('body');

        $manager->persist($page);
        $manager->flush();

        self::$pages[] = $page;
    }
}