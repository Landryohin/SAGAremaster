<?php

namespace App\Test\Controller;

use App\Entity\Documents;
use App\Repository\DocumentsRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DocumentsControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private DocumentsRepository $repository;
    private string $path = '/documents/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Documents::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Document index');

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
            'document[Nom]' => 'Testing',
            'document[Objet]' => 'Testing',
            'document[Chemin]' => 'Testing',
            'document[Structure]' => 'Testing',
            'document[Mouvement]' => 'Testing',
            'document[Niveau]' => 'Testing',
            'document[Document_at]' => 'Testing',
            'document[Date_mouvement]' => 'Testing',
            'document[Owner]' => 'Testing',
        ]);

        self::assertResponseRedirects('/documents/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Documents();
        $fixture->setNom('My Title');
        $fixture->setObjet('My Title');
        $fixture->setChemin('My Title');
        $fixture->setStructure('My Title');
        $fixture->setMouvement('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setDocument_at('My Title');
        $fixture->setDate_mouvement('My Title');
        $fixture->setOwner('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Document');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Documents();
        $fixture->setNom('My Title');
        $fixture->setObjet('My Title');
        $fixture->setChemin('My Title');
        $fixture->setStructure('My Title');
        $fixture->setMouvement('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setDocument_at('My Title');
        $fixture->setDate_mouvement('My Title');
        $fixture->setOwner('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'document[Nom]' => 'Something New',
            'document[Objet]' => 'Something New',
            'document[Chemin]' => 'Something New',
            'document[Structure]' => 'Something New',
            'document[Mouvement]' => 'Something New',
            'document[Niveau]' => 'Something New',
            'document[Document_at]' => 'Something New',
            'document[Date_mouvement]' => 'Something New',
            'document[Owner]' => 'Something New',
        ]);

        self::assertResponseRedirects('/documents/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getObjet());
        self::assertSame('Something New', $fixture[0]->getChemin());
        self::assertSame('Something New', $fixture[0]->getStructure());
        self::assertSame('Something New', $fixture[0]->getMouvement());
        self::assertSame('Something New', $fixture[0]->getNiveau());
        self::assertSame('Something New', $fixture[0]->getDocument_at());
        self::assertSame('Something New', $fixture[0]->getDate_mouvement());
        self::assertSame('Something New', $fixture[0]->getOwner());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Documents();
        $fixture->setNom('My Title');
        $fixture->setObjet('My Title');
        $fixture->setChemin('My Title');
        $fixture->setStructure('My Title');
        $fixture->setMouvement('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setDocument_at('My Title');
        $fixture->setDate_mouvement('My Title');
        $fixture->setOwner('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/documents/');
    }
}
