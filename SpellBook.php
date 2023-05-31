<?php

class SpellBook
{
    private array $spells;

    public function __construct(array $spells)
    {
        $this->spells = $spells;
    }

    public function __get(string $property)
    {
        if ($property == 'spells') {
            return $this->spells;
        }
        return null;
    }

    public function addSpell(array $spell)
    {
        $this->spells[] = $spell;
    }

    public function hasSpell(string $spellName): bool
    {
        foreach ($this->spells as $spell) {
            if ($spell['name'] == $spellName) {
                return true;
            }
        }
        return false;
    }

    public function removeSpell(string $spellName): void
    {
        foreach ($this->spells as $key => $spell) {
            if ($spell['name'] == $spellName) {
                unset($this->spells[$key]);
                break;
            }
        }
    }

    public function getAllSpells(): array
    {
        $levels = array_column($this->spells, 'level');
        array_multisort($levels, $this->spells);
        return $this->spells;
    }


}