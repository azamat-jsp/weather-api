<?php

namespace App\Services\SocialNetwork;

class ChooseSocialNetworkAction
{   public function __invoke(): void
    {
        /**
         * Клиентский код.
         */
        echo "Username: \n";
        $username = 'Will';
        echo "Password: \n";
        $password = '121212';
        echo "Message: \n";
        $message = 'Hello';

        echo "\nChoose the social network to post the message:\n" .
            "1 - Facebook\n" .
            "2 - Twitter\n";
        $choice = request()->social;

// Теперь давайте создадим правильный объект социальной сети и отправим
// сообщение.
    if ($choice == 1) {
        $network = new Facebook($username, $password);
    } elseif ($choice == 2) {
        $network = new Twitter($username, $password);
    } else {
        die("Sorry, I'm not sure what you mean by that.\n");
    }
    $network->post($message);
    }
}
