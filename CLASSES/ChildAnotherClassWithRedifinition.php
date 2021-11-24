<?php

require_once("./CLASSES/MainClassWithAbstractMethod.php");

class ChildAnotherClassWithRedifinition extends MainClassWithAbstractMethod
{
    public string $privateProperty;//свойство $privateProperty не просматривается в родительском классе, т.к. там оно private

    public function polimorphMethod():string
{
    return 'this is ANOTHER redifinition method in second child';
}

}