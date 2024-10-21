<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\Plat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RestaurantFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création des clients
        $clientsData = [
            ['Martin', 'Lucie', 'lucie.martin@example.com'],
            ['Bernard', 'Julien', 'julien.bernard@example.com'],
            ['Kuong', 'Émilie', 'emilie.kuong@example.com'],
            ['Petit', 'Sophie', 'sophie.petit@example.com'],
            ['Robert', 'Christophe', 'christophe.robert@example.com'],
        ];

        $clients = [];
        foreach ($clientsData as [$nom, $prenom, $email]) {
            $client = new Client();
            $client->setNom($nom);
            $client->setPrenom($prenom);
            $client->setEmail($email);
            $manager->persist($client);
            $clients[$email] = $client;
        }

        // Création des catégories
        $categoriesData = ['Entrée', 'Plat principal', 'Dessert', 'Boisson'];
        $categories = [];
        foreach ($categoriesData as $nomCategorie) {
            $categorie = new Categorie();
            $categorie->setNomCategorie($nomCategorie);
            $manager->persist($categorie);
            $categories[$nomCategorie] = $categorie;
        }

        // Création des plats
        $platsData = [
            ['Salade Niçoise', 'Entrée', 12.50],
            ['Steak Frites', 'Plat principal', 18.90],
            ['Mousse au Chocolat', 'Dessert', 6.50],
            ['Poulet Basquaise', 'Plat principal', 16.50],
            ['Tarte Tatin', 'Dessert', 8.00],
            ['Limonade Maison', 'Boisson', 3.75],
        ];

        foreach ($platsData as [$nomPlat, $nomCategorie, $prix]) {
            $plat = new Plat();
            $plat->setNomPlat($nomPlat);
            $plat->setCategorie($categories[$nomCategorie]);
            $plat->setPrix($prix);
            $manager->persist($plat);
        }

        // Création des commandes
        $commandesData = [
            ['lucie.martin@example.com', '2023-09-01', 45.90],
            ['julien.bernard@example.com', '2023-09-02', 24.25],
            ['emilie.kuong@example.com', '2023-09-03', 19.75],
            ['sophie.petit@example.com', '2023-09-04', 34.75],
            ['christophe.robert@example.com', '2023-09-05', 22.50],
        ];

        foreach ($commandesData as [$email, $dateCommande, $total]) {
            $commande = new Commande();
            $commande->setClient($clients[$email]);
            $commande->setDateCommande(new \DateTime($dateCommande));
            $commande->setTotal($total);
            $manager->persist($commande);
        }

        $manager->flush();
    }
}
