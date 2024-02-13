# Liste des tâches de développement pour le projet "Hackers Poulette"

## Tâches principales

### Analyse du projet

- Comprendre le type de défi : consolidation, DUO
- Examiner le dépôt : `hackers-poulette`
- Estimer la durée : 3 jours
- Respecter la date limite : 15/02/2024 16:30

### Choix de l'hébergement

- Choisir un service d'hébergement gratuit comme [00webhost](https://www.000webhost.com/) ou tout autre service similaire.
- Utiliser un hébergeur personnel (OVH, Gandi, etc.) si disponible, sinon prévoir un budget pour acheter un nom de domaine et un plan d'hébergement.

### Création du formulaire de contact DONE

- Implémenter un formulaire en PHP.
- Inclure les champs suivants :
  - Nom (obligatoire, chaîne, au moins 2 caractères, max 255)
  - Prénom (obligatoire, chaîne, au moins 2 caractères, max 255)
  - Adresse e-mail (obligatoire, au moins 2 caractères, max 255, doit être une adresse e-mail valide)
  - Fichier (optionnel, doit être un type de fichier valide : jpg, png, gif, taille max 2 Mo)
  - Description (obligatoire, au moins 2 caractères, max 1000 caractères)

## 🌱 Fonctionnalités indispensables

### Base de données avec connexion PDO DONE

- Établir une connexion PDO pour la base de données.

### Validation côté client avec JavaScript

- Implémenter la validation côté client pour une meilleure expérience utilisateur (UX).
- Utiliser des bibliothèques telles que Bulma, Tailwind, Bootstrap, etc.
- Afficher des indices visuels en cas d'erreur sous chaque champ d'entrée en cas de saisie incorrecte.

### Validation côté serveur

- Sanitiser et valider les données côté serveur.
- Afficher des messages d'erreur lisibles et utiles en cas d'erreur.

### Envoi des données à la base de données DONE

- Une fois le formulaire validé, envoyer les données à la base de données.

### Prévention contre le spam avec captcha

- Intégrer un captcha pour prévenir le spam.

## 🌼 Fonctionnalités optionnelles

### Confirmation par e-mail

- Si toutes les saisies obligatoires sont valides, le script doit répondre par e-mail à une adresse spécifiée, confirmant la réception du message.

### Utilisation de Composer

- Découvrir Composer et l'utiliser pour installer une bibliothèque PHP telle que SwiftMailer, rakit/validation, valitron ou symfony/mailer.

### Sécurisation du formulaire

- Protéger le formulaire contre les attaques courantes (CSRF, XSS, injection SQL, etc.).
- Consulter les ressources OWASP pour des conseils de sécurité.

## 🌴 Fonctionnalités avancées

### Création d'un tableau de bord (côté administrateur)

- Créer un tableau de bord pour afficher les messages reçus.
- Permettre la gestion des statuts des messages (traité, non traité, réponse, etc.).

## Ressources

- [Messages d'erreur](http://uxmas.com/2012/the-4-hs-of-writing-error-messages)
- [Classe Mailer](https://github.com/PHPMailer/PHPMailer)
- [Formulaire accessible](https://formspree.io/blog/accessible-forms/)
- [Validité sémantique](https://www.w3.org/2001/sw/wiki/W3C_Validator)
