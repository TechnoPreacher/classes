<?php

require_once("./CLASSES/Animal.php");

class Cow extends Animal
{
    private string $name;

    public function getName(): string
    {
        return 'COW # ' . $this->name . ' MUUUU';
    }

    public function say($stringToSay): string
    {
        return 'MUUU ' . $stringToSay . ' MUUU';
    }

    public function feed($youWannaEat): string
    {
        if ($youWannaEat) {
            return 'MORE, MORE';
        } else {
            return 'I NEED MORE';
        }

    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}