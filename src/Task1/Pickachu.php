<?php
namespace BinaryStudioAcademy\Task1;

class Pickachu implements Pokemon
{
    public function battleCry(): string
    {
        return 'Pika-Pika!';
    }

    public function imageUrl(): string
    {
        return 'https://img.pokemondb.net/artwork/pikachu.jpg';
    }
}