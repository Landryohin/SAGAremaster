<?php

namespace App\Tests\Controller;

use App\Entity\Divisions;
use App\Repository\DivisionsRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DivisionsControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private DivisionsRepository $repository;
    private string $path = '/divisions/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Divisions::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Division index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'division[Code]' => 'Testing',
            'division[Libelle]' => 'Testing',
            'division[Service]' => 'Testing',
            'division[Chef]' => 'Testing',
        ]);

        self::assertResponseRedirects('/divisions/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Divisions();
        $fixture->setCode('My Title');
        $fixture->setLibelle('My Title');
        $fixture->setService('My Title');
        $fixture->setChef('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Division');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Divisions();
        $fixture->setCode('My Title');
        $fixture->setLibelle('My Title');
        $fixture->setService('My Title');
        $fixture->setChef('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'division[Code]' => 'Something New',
            'division[Libelle]' => 'Something New',
            'division[Service]' => 'Something New',
            'division[Chef]' => 'Something New',
        ]);

        self::assertResponseRedirects('/divisions/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getCode());
        self::assertSame('Something New', $fixture[0]->getLibelle());
        self::assertSame('Something New', $fixture[0]->getService());
        self::assertSame('Something New', $fixture[0]->getChef());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Divisions();
        $fixture->setCode('My Title');
        $fixture->setLibelle('My Title');
        $fixture->setService('My Title');
        $fixture->setChef('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/divisions/');
    }
}
