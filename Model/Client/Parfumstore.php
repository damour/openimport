<?php

namespace Client;

use Goutte\Client;

class Parfumstore {

    public function getPage()
    {
        $client = new Client();

        $crawler = $client->request('GET', 'http://www.symfony-project.org/');

        return $crawler->text();
    }

}