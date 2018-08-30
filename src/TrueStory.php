<?php

namespace WojciechMruk\TrueStory;

/**
 * Lorem Ipsumof TrueStory
 *
 * @author Wojciech Mruk
 */
class TrueStory
{

    public function getStory($length = 10)
    {
        $content = file_get_contents(__DIR__ . '/../inc/words.json');
        $words = json_decode($content, true)['words'];

        $sentence = 'Lorem';
        for ($i = 0; $i < $length; $i++) {
            $sentence .= ' ' . $words[array_rand($words)];
        }

        $sentence .= ".";

        return $sentence;
    }
}