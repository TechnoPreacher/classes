<?php

require_once("./CLASSES/MainClassWithAbstractMethod.php");

class ChildClassWithRedifinition extends MainClassWithAbstractMethod
{

    public string $privateProperty;//свойство $privateProperty не просматривается в родительском классе, т.к. там оно private

    public function polimorphMethod(): string
    {
        return 'this is redifinition method in first child';
    }

}