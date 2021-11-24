<?php



abstract class Animal
{
    abstract public function getName();

    abstract public function say(string $stringToSay);

    abstract public function feed(bool $youWannaEat);
}