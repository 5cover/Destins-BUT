<?php

readonly class Carte
{
    function __construct(
        public string $titre,
        public string $desc,
        public array $effets = []
    ) {}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
:root {
    font-family: sans-serif;
}
* {
    box-sizing: border-box;
}
body {
    display: grid;
    font-size: 13pt;
    gap: 1mm;
    grid-auto-rows: 5cm;
    grid-template-columns: repeat(auto-fit, 8.5cm);
    justify-content: start;
    max-height: 100vh;
    max-width: 100vw;
}
article {
    background-color:#a1e3f4;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1em;
    text-align: center;
}
p, h3, body {
    margin: 0;
}
    </style>
</head>
<body>
<?php

foreach ([
    new Carte('CSudoku', 'SAÉ - Sudoku en C', ['Réaliser' => 3, 'Optimiser' => 2]),
    new Carte('Compta', 'Projet de comptabilité surprise', ['Gérer' => -2, 'Conduire' => -2]),
    new Carte('PSDC', 'Compilateur de Pseudo-code', ['Réaliser' => 3, 'Optimiser' => 2, 'Conduire' => 1]),
    new Carte('PACT', 'Base de données dans un projet scrum ou vous etes le scrum master', ['Gérer' => 3, 'Conduire' => 1, 'Collaborer' => 2]),
    new Carte('Portfolio', 'Un site web portfolio en PHP', ['Réaliser' => 2, 'Conduire' => 1]),
    new Carte('Malade', 'Vous êtes tombé malade, votre équipe à perdu des points lors de la SAE de système', ['Administrer' => -1, 'Collaborer' => -3]),
    new Carte('CV Vidéo', 'Une courte vidéo', ['Conduire' => 1]),
    new Carte('Petit jeu-vidéo', 'Petit jeu video sous Godot avec un ami', ['Réaliser' => 1, 'Collaborer' => 1]),
    new Carte('Distribution Linux', 'Une distribution Linux basée sur Debian', ['Réaliser' => 1, 'Administrer' => 2]),
    new Carte('Innosang', 'Court métrage en groupe', ['Conduire' => 1, 'Collaborer' => 2]),
    new Carte('GenDoc', "Documentation extensive d'un projet", ['Conduire' => 2]),
    new Carte('Solveur de Sudoku', 'Un solveur de Sudoku optimisé, en C', ['Réaliser' => 1, 'Optimiser' => 2]),
    new Carte('Probleme des N-reines', 'En équipe, vous élaborez des solutions au probleme des N-reines', ['Optimiser' => 2, 'Collaborer' => 1]),
    new Carte('Abandon', 'Vous commencez un projet que vous finissez par abandonner', ['Conduire' => -1]),
    new Carte('OpenData', 'Base de données et statistiques à partir de données ouveres', ['Gérer' => 2, 'Conduire' => 1]),
    new Carte('Site statique', 'HTML et CSS', ['Réaliser' => 1]),
    new Carte('Le Chat noir', "Vous avez généré par IA lors d'un projet informatique"),
    new Carte('UML', "Diagramme UML d'une base de données", ['Gérer' => 1]),
    new Carte('Tchattator', 'Service de messagerie instantanée en C', ['Réaliser' => 1, 'Administrer' => 1, 'Collaborer' => 1]),
    new Carte('Barbutisation', 'Migration vers Linux sur votre PC', ['Administrer' => 1]),
    new Carte('Barbutisation++', 'Site dynamique avec Apache2', ['Réaliser' => 1, 'Administrer' => 1]),
    new Carte('Anglais', 'Vous devez décrire un projet en anglais - vous réussissez', ['Conduire' => 1]),
    new Carte('Anglais', 'Vous devez décrire un projet en anglais - vous échouez', ['Conduire' => -1]),
    new Carte('Réseaux sociaux', 'Vous vous lancez comme influenceur avec des amis', ['Conduire' => 1, 'Collaborer' => 1]),
    new Carte('Des gourdins au lasers', "Vous passez un site web dynamique d'une approche primitive à une architecture MVC", ['Réaliser' => 2, 'Optimiser' => 1]),
    new Carte('Accro au jeux-vidéos', 'Vous vous investissez trop dans un jeu-vidéo', ['Réaliser' => -1, 'Optimiser' => -1, 'Administrer' => -1, 'Gérer' => -1]),
    new Carte('Zig', 'Vous avez appris le language Zig', ['Optimiser' => 1, 'Gérer' => 1]),
    new Carte('BuildYourOwnLisp', 'Vous avez créé votre propre implémentation de Lisp', ['Réaliser' => 2, 'Optimiser' => 2]),
    new Carte('Contribution open-source', 'Vous avez contribué à un projet open-source', ['Collaborer' => 2]),
    new Carte('AmogOS', 'Bootleg Windows thème Among Us', ['Réaliser' => 2, 'Optimiser' => 1]),
    new Carte('Blog', 'Vous lancez un petit blog', ['Administrer' => 1, 'Conduire' => 1]),
] as $carte) {
?>
<article>
    <h3><?= $carte->titre ?></h3>
    <p><?= $carte->desc ?></p>
    <p><?= $carte->effets
        ? implode(', ', array_map(fn($e, $q) => sprintf('%+d', $q) . "&nbsp;$e", array_keys($carte->effets), $carte->effets))
        : 'Aucune compétence' ?></p>
</article>
<?php
}
?>
</body>
</html>
