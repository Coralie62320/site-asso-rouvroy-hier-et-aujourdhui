<?php

namespace App\Tests\Entity;

use App\Entity\PatrimoineReligieux;
use PHPUnit\Framework\TestCase;

class PatrimoineReligieuxTest extends TestCase
{
    public function testPatrimoineReligieuxEntity()
    {
        $patrimoineReligieux = new PatrimoineReligieux();
        $patrimoineReligieux->setTitre('Article 20');
        $patrimoineReligieux->setSlug('article-20');
        $patrimoineReligieux->setContenu('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium faucibus odio, at consectetur leo dignissim at. Aenean a nisl.');

        $this->assertSame('Article 20', $patrimoineReligieux->getTitre());
        $this->assertSame('article-20', $patrimoineReligieux->getSlug());
        $this->assertSame('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium faucibus odio, at consectetur leo dignissim at. Aenean a nisl.', $patrimoineReligieux->getContenu());
    }
}
