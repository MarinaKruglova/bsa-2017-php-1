<?php
namespace BinaryStudioAcademy\Task1;
class Bulbasaur implements Pokemon
{
    public function battleCry(): string
    {
        return 'Bool bool!';
    }
    public function imageUrl(): string
    {
        return 'https://img.pokemondb.net/artwork/bulbasaur.jpg';
    }
}