<?php

namespace App\Test\Controller;

use App\Entity\Affectations;
use App\Repository\AffectationsRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AffectationsControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private AffectationsRepository $repository;
    private string $path = '/Affectations/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Affectations::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Affectation index');

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
            'Affectation[Date_Affectation_at]' => 'Testing',
            'Affectation[Envoyeur]' => 'Testing',
            'Affectation[Document]' => 'Testing',
            'Affectation[Receveur]' => 'Testing',
        ]);

        self::assertResponseRedirects('/Affectations/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Affectations();
        $fixture->setDate_Affectation_at('My Title');
        $fixture->setEnvoyeur('My Title');
        $fixture->setDocument('My Title');
        $fixture->setReceveur('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Affectation');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Affectations();
        $fixture->setDate_Affectation_at('My Title');
        $fixture->setEnvoyeur('My Title');
        $fixture->setDocument('My Title');
        $fixture->setReceveur('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'Affectation[Date_Affectation_at]' => 'Something New',
            'Affectation[Envoyeur]' => 'Something New',
            'Affectation[Document]' => 'Something New',
            'Affectation[Receveur]' => 'Something New',
        ]);

        self::assertResponseRedirects('/Affectations/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getDate_Affectation_at());
        self::assertSame('Something New', $fixture[0]->getEnvoyeur());
        self::assertSame('Something New', $fixture[0]->getDocument());
        self::assertSame('Something New', $fixture[0]->getReceveur());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Affectations();
        $fixture->setDate_Affectation_at('My Title');
        $fixture->setEnvoyeur('My Title');
        $fixture->setDocument('My Title');
        $fixture->setReceveur('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/Affectations/');
    }
}
