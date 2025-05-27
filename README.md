# Jeu de Combat en PHP

Un jeu de combat en ligne de commande développé en PHP utilisant une architecture MVC (Modèle-Vue-Contrôleur).

## Description

Ce projet est un jeu de combat où les joueurs peuvent créer des personnages avec différentes caractéristiques et les faire combattre entre eux. Le jeu est construit avec une approche orientée objet et suit le pattern MVC.

## Fonctionnalités

- Création d'un jeu
- Création de personnages avec les attributs suivants :
  - Nom
  - Sexe
  - Classe
  - Points d'attaque
  - Points de vie
  - Allégeance (Forces du bien/mal)
- Système de combat avec plusieurs actions :
  - Attaque
  - Défense
  - Soin
  - Reddition

## Structure du Projet

```
poo_entrainement/
├── controller/
│   ├── combatController.php
│   ├── JeuxController.php
│   └── JoueurController.php
├── model/
│   ├── Jeux.php
│   ├── Joueur.php
│   └── Voiture.php
├── view/
│   └── PersonnagesView.php
└── main.php
```

## Comment Jouer

1. Lancez le jeu avec la commande :

```bash
php main.php
```

2. Menu Principal :

   - 1: Créer un jeu
   - 2: Créer un personnage
   - 3: Attaquer
   - 10: Sortir

3. Pour commencer une partie :

   - Créez d'abord un jeu (option 1)
   - Créez au moins deux personnages (option 2)
   - Lancez un combat (option 3)

4. Durant le combat :
   - Choisissez deux combattants
   - À tour de rôle, chaque joueur peut :
     - Attaquer (inflige des dégâts)
     - Se défendre (gain temporaire de PV)
     - Se soigner (restaure 30 PV)
     - Se rendre (abandonne le combat)

## Prérequis

- PHP 7.4 ou supérieur
- Terminal compatible avec PHP

## Architecture

Le projet suit une architecture MVC :

- **Modèles** : Gestion des données des joueurs et du jeu
- **Vues** : Affichage des informations
- **Contrôleurs** : Logique du jeu et gestion des actions

## Installation

1. Clonez le repository :

```bash
git clone [url-du-repo]
```

2. Accédez au dossier :

```bash
cd poo_entrainement
```

3. Lancez le jeu :

```bash
php main.php
```

## Auteur

Nicolas-Puchois
