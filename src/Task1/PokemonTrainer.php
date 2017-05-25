<?php

namespace BinaryStudioAcademy\Task1;

class PokemonTrainer
{
    public function pick(Pokemon $pokemon): string
    {
        $pokemonNameSpace = get_class($pokemon);
        $pokemonNameSpaceParts = explode('\\', $pokemonNameSpace);
        $pokemonName = end($pokemonNameSpaceParts);

        return $pokemonName . ": " . $pokemon->battleCry();
    }
}
