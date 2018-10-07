<?php

namespace LexiconBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lexicon');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Lexicon', $crawler->filter('.container h1')->text());
    }
}
