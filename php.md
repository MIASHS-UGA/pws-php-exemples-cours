
Windows

- Ouvrir Power Shell ou bien un terminal dans VSCode
- Lancer la commande : php -v

Si vous avez une réponse PHP sans erreur, c'est tout bon
Sinon, vous devez ajouter php au PATH de votre système :

- Ouvrir Variables Sytèmes
- Cliquer sur Variables d'environnement
- Modifier la variable PATH
- Ajouter le chemin vers le php de XAMPP. Par exemple C:\XAMPP\php
- - Fermer le terminal et l'ouvrir à nouveau


Si vous avez des erreurs du type "module non chargé", alors vous devez éditer la configuration de PHP :
- Ouvrir le fichier php.ini dans VSCode. Par défaut, C:\XAMPP\php\php.ini
- Remplacer les chemins du type "\xampp\php\ext" par le chemin complet (par exemple C:\wampp\php\ext)
- Tester php -v à nouveau

MacOS :

- Recherche dans Google "xampp add php to path macos"
- Ouvrir le Gist : https://gist.github.com/djandyr/c04950a1375e96814316 (normalement dans les premiers résultats)

Linux :

- which php
- ajouter le chemin trouvé vers php au path :

Dans le fichier ~/.zshrc ou ~/.bash_profile (dépend si vous utilisez zsh ou bash)
Ajouter la ligne :

export PATH=/chemin/vers/php:$PATH

fermez et ouvrez à nouveau le terminal, php -v devrait fonctionner
