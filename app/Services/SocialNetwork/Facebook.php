<?php

namespace App\Services\SocialNetwork;

use App\abstracts\SocialNetwork;


class Facebook extends SocialNetwork
{
    public function logIn(string $userName, string $password): bool
    {
        echo "\nChecking user's credentials...\n";
        echo "Name: " . $userName . "\n";
        echo "Password: " . str_repeat("*", strlen($password)) . "\n";

        $this->simulateNetworkLatency();

        echo "\n\nFacebook: '" . $userName . "' has logged in successfully.\n";

        return true;
    }

    public function sendData(string $message): bool
    {
        echo "Facebook: '" . $this->username . "' has posted '" . $message . "'.\n";

        return true;
    }

    public function logOut(): void
    {
        echo "Facebook: '" . $this->username . "' has been logged out.\n";
    }
}
