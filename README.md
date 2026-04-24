# Cours IT-AKA-DFS34a

## Design Patterns PHP

### Dossier creation :

- **Factory Method** : Encapsule la création d'objets pour faciliter l'ajout de nouveaux types de produits.
- **Abstract Factory** : Permet de créer des familles d'objets adaptés à différents contextes (ex : marchés FR/US).
- **Builder** : Simplifie la construction d'objets complexes avec de nombreux paramètres.
- **Prototype** : Crée de nouveaux objets par clonage d'un prototype existant.
- **Singleton** : Garantit l'existence d'une unique instance d'une classe dans l'application.

Chaque pattern dispose de son propre dossier avec un exemple fonctionnel dans `index.php`.

- `factory/` : Factory Method
- `abstract-factory/` : Abstract Factory
- `builder/` : Builder
- `prototype/` : Prototype
- `singleton/` : Singleton
- `common/` : Classe Product commune à tous les exemples

### Dossier structure-avance :

- **Adapter** : Permet d'adapter l'interface d'une classe existante à une nouvelle interface attendue par le client.
- **Composite** : Permet de composer des objets en structures arborescentes pour représenter des hiérarchies partie-tout. Les clients peuvent traiter de manière uniforme les objets individuels et les compositions d'objets.
- **Decorator** : Ajoute dynamiquement des fonctionnalités à un objet sans modifier sa structure de base.
- **Facade** : Fournit une interface unifiée pour un ensemble d'interfaces dans un sous-système, simplifiant son utilisation.
- **Proxy** : Fournit un substitut ou un représentant à un autre objet pour contrôler l'accès à celui-ci.

Chaque pattern dispose de son propre dossier avec un exemple fonctionnel.

- `adapter/` : Adapter
- `composite/` : Composite
- `decorator/` : Decorator
- `facade/` : Facade
- `proxy/` : Proxy
- `common/` : Classe Product commune à tous les exemples

### Dossier comportement-avance :

- **Chain of Responsibility** : Permet de faire passer une requête à travers une chaîne d'objets jusqu'à ce qu'un objet la traite. Exemple : validation séquentielle de propriétés d'un produit.
- **Command** : Encapsule une requête sous forme d'objet, permettant de paramétrer des actions, les mettre en file ou les annuler. Exemple : ajout d'un produit via une commande.
- **Observer** : Permet à des objets d'être notifiés automatiquement lors d'un changement d'état d'un autre objet. Exemple : notification par email ou log lors d'une modification de produit.
- **State** : Permet à un objet de changer de comportement lorsque son état interne change. Exemple : gestion des états d'un produit (brouillon, publié, etc.).
- **Strategy** : Définit une famille d'algorithmes, encapsule chacun d'eux et les rend interchangeables. Exemple : calcul du prix avec différentes stratégies (promo, TVA, etc.).

Chaque pattern dispose de son propre dossier avec un exemple fonctionnel.

- `chain/` : Chain of Responsibility
- `command/` : Command
- `observer/` : Observer
- `state/` : State
- `strategy/` : Strategy
- `common/` : Classe Produit commune à tous les exemples

### Dossier architecture :

- **DTO (Data Transfer Object)** : Sert à transférer des données entre différentes couches de l'application sans exposer la logique métier. Exemple : `ProductDTO` pour transporter les données d'un produit.
- **Repository** : Centralise l'accès aux données et isole la logique de persistance. Exemple : `ProductRepository` pour récupérer les produits depuis une source de données.
- **Service** : Contient la logique métier et orchestre les appels aux repositories et autres composants. Exemple : `ProductService` pour calculer le prix TTC d'un produit.
- **common/** : Classe Product commune à tous les exemples d'architecture.

Chaque sous-dossier illustre un concept clé de l'architecture logicielle, avec un exemple fonctionnel dans `index.php`.

- `DTO/` : Data Transfer Object
- `Repository/` : Repository
- `Service/` : Service
- `common/` : Classe Product commune

### Tests

1. Lancez un serveur PHP local dans le dossier du projet :
   ```bash
   php -S localhost:8000
   ```
2. Accédez à l'URL correspondant au pattern voulu, par exemple :
   - [http://localhost:8000/creation/factory/index.php](http://localhost:8000/factory/index.php)
   - [http://localhost:8000/creation/abstract-factory/index.php](http://localhost:8000/abstract-factory/index.php)
   - etc.
