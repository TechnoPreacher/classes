<?php


require_once("./CLASSES/Animal.php");

class Dog extends Animal
{
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function say($stringToSay): string
    {
        return 'GAV '.$stringToSay;
    }

    public function feed($youWannaEat): string
    {
        if ($youWannaEat) {
            return 'it this!';
        }
        return 'well';
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}
