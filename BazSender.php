<?php

declare(strict_types=1);

namespace App;

class BazSender extends Sender // Класс Sender финальный. Нельзя наследоваться от финального класса.
{
    public const CODE_SUCCESS = 200;

    /**
     * Sends data to the Baz crm
     *
     * // Лучше использовать type hints вместо phpdoc. Так код будет чище и его легче поддерживать
     */
    public function send(array $data): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that she is here.

        return static::CODE_SUCCESS; // вынес в константу хардкод
    }
}
