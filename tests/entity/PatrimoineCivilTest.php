<?php

namespace App\Tests\Entity;

use App\Entity\PatrimoineCivil;
use PHPUnit\Framework\TestCase;

class PatrimoineCivilTest extends TestCase
{
    public function testPatrimoineReligieuxEntity()
    {
        $patrimoineCivil = new PatrimoineCivil();
        $patrimoineCivil->setTitre('Article 20');
        $patrimoineCivil->setSlug('article-20');
        $patrimoineCivil->setContenu('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium faucibus odio, at consectetur leo dignissim at. Aenean a nisl.');

        $this->assertSame('Article 20', $patrimoineCivil->getTitre());
        $this->assertSame('article-20', $patrimoineCivil->getSlug());
        $this->assertSame('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium faucibus odio, at consectetur leo dignissim at. Aenean a nisl.', $patrimoineCivil->getContenu());
    }
}
