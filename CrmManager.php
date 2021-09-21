<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

// подобный phpdoc не несёт полезной нагрузки
class CrmManager
{
    private BazSender $client;
    private array $settings; // typehint вместо phpdoc

    public function __construct(array $settings)
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }

        $this->settings = $settings;
        $this->client = new BazSender(); // Повышает связанность классов. Лучше прокинуть через конструктор
    }

    /**
     * Sends the person to a crm
     *
     * // лишнее, так как продублировано через typehint
     */
    public function sendPerson(array $clientEntity): int
    {
        $this->client->setCredentials($this->settings);

        return $this->client->send($clientEntity);
    }
}
