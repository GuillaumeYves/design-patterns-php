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

### Tests

1. Lancez un serveur PHP local dans le dossier du projet :
   ```bash
   php -S localhost:8000
   ```
2. Accédez à l'URL correspondant au pattern voulu, par exemple :
   - [http://localhost:8000/creation/factory/index.php](http://localhost:8000/factory/index.php)
   - [http://localhost:8000/creation/abstract-factory/index.php](http://localhost:8000/abstract-factory/index.php)
   - etc.
