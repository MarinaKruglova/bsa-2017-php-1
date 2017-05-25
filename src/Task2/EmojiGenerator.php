<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    public function generate()
    {
        $emojis = array('😀', '😃', '😄', '😁', '😆', '😅', '😂');

        foreach($emojis as $emoji)
        {
            yield $emoji;
        }
    }
}
