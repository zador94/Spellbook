<?php
include 'splAutoload.php';


$spellbook = new Spellbook([
    ['name' => 'Fireball', 'level' => 3],
    ['name' => 'Healing Touch', 'level' => 2],
    ['name' => 'Magic Missile', 'level' => 1],
]);

$spellbook->addSpell(['name' => 'Invisibility', 'level' => 4]);

if ($spellbook->hasSpell('Fireball')) {
    echo "Spellbook contains Fireball.<br>";
}

$spellbook->removeSpell('Magic Missile');

$spells = $spellbook->getAllSpells();
foreach ($spells as $spell) {
    echo "Spell: {$spell['name']}, Level: {$spell['level']}<br>";
}





