<?php

namespace App\Test\Controller;

use App\Entity\Secretariats;
use App\Repository\SecretariatsRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecretariatsControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private SecretariatsRepository $repository;
    private string $path = '/secretariats/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Secretariats::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Secretariat index');

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
            'secretariat[Interim]' => 'Testing',
            'secretariat[Direction]' => 'Testing',
            'secretariat[Secretaire]' => 'Testing',
        ]);

        self::assertResponseRedirects('/secretariats/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Secretariats();
        $fixture->setInterim('My Title');
        $fixture->setDirection('My Title');
        $fixture->setSecretaire('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Secretariat');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Secretariats();
        $fixture->setInterim('My Title');
        $fixture->setDirection('My Title');
        $fixture->setSecretaire('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'secretariat[Interim]' => 'Something New',
            'secretariat[Direction]' => 'Something New',
            'secretariat[Secretaire]' => 'Something New',
        ]);

        self::assertResponseRedirects('/secretariats/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getInterim());
        self::assertSame('Something New', $fixture[0]->getDirection());
        self::assertSame('Something New', $fixture[0]->getSecretaire());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Secretariats();
        $fixture->setInterim('My Title');
        $fixture->setDirection('My Title');
        $fixture->setSecretaire('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/secretariats/');
    }
}
