<?php
namespace BinaryStudioAcademy\Task1;
class Psyduck implements Pokemon
{
    public function battleCry(): string
    {
        return 'PSY!PSY!PSY!';
    }
    public function imageUrl(): string
    {
        return 'https://img.pokemondb.net/artwork/psyduck.jpg';
    }
}