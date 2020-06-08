<?php

namespace App\Modules;

use Symfony\Component\DomCrawler\Crawler;

class Parser
{
    public function getContent($link)
    {
        $html = file_get_contents($link);

        $crawler = new Crawler($html);

        $tasks = $crawler->filter('div.prob_maindiv')->each(function (Crawler $node) {
            return [
                $node->filter('div.pbody')->text(),
                $node->filter('img.tex')->image()->getUri(),
                $node->filter('div.answer')->text(),
            ];
        });

        return $tasks;
    }
}
