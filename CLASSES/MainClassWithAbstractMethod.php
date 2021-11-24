<?php



abstract class MainClassWithAbstractMethod//наследуемый класс - покажет, собственно, наследование
{
    public string $publicProperty;//видно детями и родителям и может легко меняться
    protected string $protectedProperty;//видно детями и родителям, но недоступно без геттеров-сеттеров (инкапсуляция может быть видна тут)
    private string $privateProperty='значение свойства privateProperty по умолчанию в родительском классе';//не будет доступно в дочерних классах, поэтому там могут лежать одноимённые свойства

    abstract public function polimorphMethod();//собственно переопределяемый метод для демонстрации полиморфизма

    public function getPrivateProperty(): string
    {
        return $this->privateProperty;
    }

    public function getProtectedProperty(): string
    {
        return $this->protectedProperty;
    }

    public function setPrivateProperty(string $privateProperty): void
    {
        $this->privateProperty = $privateProperty;
    }

    public function setProtectedProperty(string $protectedProperty): void
    {
        $this->protectedProperty = $protectedProperty;
    }


}