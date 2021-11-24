<?php

require_once("./CLASSES/Animal.php");

class Cat extends Animal
{
    private string $name;

    public function getName(): string
    {
        return 'im a cat with ' . $this->name . ' name';
    }

    public function say($stringToSay): string
    {
        return $stringToSay . ' meow';
    }

    public function feed($youWannaEat): string
    {
        if ($youWannaEat) {
            return 'thinner, cat!';

        } else {
            return 'OK';
        }
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}