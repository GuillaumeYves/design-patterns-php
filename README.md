# Cours IT-AKA-DFS34a

## Design Patterns en PHP

### Patterns implémentés

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

### Tests

1. Lancez un serveur PHP local dans le dossier du projet :
   ```bash
   php -S localhost:8000
   ```
2. Accédez à l'URL correspondant au pattern voulu, par exemple :
   - [http://localhost:8000/factory/index.php](http://localhost:8000/factory/index.php)
   - [http://localhost:8000/abstract-factory/index.php](http://localhost:8000/abstract-factory/index.php)
   - etc.
