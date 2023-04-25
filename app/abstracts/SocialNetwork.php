<?php

namespace App\abstracts;

abstract class SocialNetwork
{
    /**
     * @var string
     */
    protected string $username;

    /**
     * @var string
     */
    protected string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function post(string $message): bool
    {
        // Проверка подлинности перед публикацией. Каждая сеть использует свой
        // метод авторизации.
        if ($this->logIn($this->username, $this->password)) {
            // Отправляем почтовые данные. Все сети имеют разные API.
            $result = $this->sendData($message);
            // ...
            $this->logOut();

            return $result;
        }

        return false;
    }

    /**
     * Небольшая вспомогательная функция, которая делает время ожидания похожим на
     * реальность.
     */
    function simulateNetworkLatency(): void
    {
        $i = 0;
        while ($i < 5) {
            echo ".";
            sleep(1);
            $i++;
        }
    }

    /**
     * Шаги объявлены абстрактными, чтобы заставить подклассы реализовать их
     * полностью.
     */
    abstract public function logIn(string $userName, string $password): bool;

    abstract public function sendData(string $message): bool;

    abstract public function logOut(): void;
}
