<?php

namespace App\Tests\Controller;

use App\Entity\Services;
use App\Repository\ServicesRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ServicesControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ServicesRepository $repository;
    private string $path = '/services/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Services::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Service index');

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
            'service[Code]' => 'Testing',
            'service[Libelle]' => 'Testing',
            'service[Direction]' => 'Testing',
            'service[divisions]' => 'Testing',
            'service[Chef]' => 'Testing',
        ]);

        self::assertResponseRedirects('/services/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Services();
        $fixture->setCode('My Title');
        $fixture->setLibelle('My Title');
        $fixture->setDirection('My Title');
        $fixture->setDivisions('My Title');
        $fixture->setChef('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Service');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Services();
        $fixture->setCode('My Title');
        $fixture->setLibelle('My Title');
        $fixture->setDirection('My Title');
        $fixture->setDivisions('My Title');
        $fixture->setChef('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'service[Code]' => 'Something New',
            'service[Libelle]' => 'Something New',
            'service[Direction]' => 'Something New',
            'service[divisions]' => 'Something New',
            'service[Chef]' => 'Something New',
        ]);

        self::assertResponseRedirects('/services/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getCode());
        self::assertSame('Something New', $fixture[0]->getLibelle());
        self::assertSame('Something New', $fixture[0]->getDirection());
        self::assertSame('Something New', $fixture[0]->getDivisions());
        self::assertSame('Something New', $fixture[0]->getChef());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Services();
        $fixture->setCode('My Title');
        $fixture->setLibelle('My Title');
        $fixture->setDirection('My Title');
        $fixture->setDivisions('My Title');
        $fixture->setChef('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/services/');
    }
}
