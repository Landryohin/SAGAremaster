<?php

namespace App\Tests\Controller;

use App\Entity\Postes;
use App\Repository\PostesRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostesControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private PostesRepository $repository;
    private string $path = '/postes/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Postes::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Poste index');

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
            'poste[Niveau]' => 'Testing',
            'poste[Fonction]' => 'Testing',
            'poste[DateDeb]' => 'Testing',
            'poste[DateFin]' => 'Testing',
            'poste[Agent]' => 'Testing',
            'poste[Owner]' => 'Testing',
        ]);

        self::assertResponseRedirects('/postes/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Postes();
        $fixture->setNiveau('My Title');
        $fixture->setFonction('My Title');
        $fixture->setDateDeb('My Title');
        $fixture->setDateFin('My Title');
        $fixture->setAgent('My Title');
        $fixture->setOwner('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Poste');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Postes();
        $fixture->setNiveau('My Title');
        $fixture->setFonction('My Title');
        $fixture->setDateDeb('My Title');
        $fixture->setDateFin('My Title');
        $fixture->setAgent('My Title');
        $fixture->setOwner('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'poste[Niveau]' => 'Something New',
            'poste[Fonction]' => 'Something New',
            'poste[DateDeb]' => 'Something New',
            'poste[DateFin]' => 'Something New',
            'poste[Agent]' => 'Something New',
            'poste[Owner]' => 'Something New',
        ]);

        self::assertResponseRedirects('/postes/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNiveau());
        self::assertSame('Something New', $fixture[0]->getFonction());
        self::assertSame('Something New', $fixture[0]->getDateDeb());
        self::assertSame('Something New', $fixture[0]->getDateFin());
        self::assertSame('Something New', $fixture[0]->getAgent());
        self::assertSame('Something New', $fixture[0]->getOwner());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Postes();
        $fixture->setNiveau('My Title');
        $fixture->setFonction('My Title');
        $fixture->setDateDeb('My Title');
        $fixture->setDateFin('My Title');
        $fixture->setAgent('My Title');
        $fixture->setOwner('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/postes/');
    }
}
