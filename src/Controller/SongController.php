<?php
/**
 * Created by PhpStorm.
 * User: randt
 * Date: 12/11/2018
 * Time: 7:02 PM
 */

namespace App\Controller;

use MongoDB\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
     /**
      * @Route("/songs", name="song_index")
      */
    public function list()
    {
        $client = new Client('mongodb://mongo:27017'); // connect
        $collection = $client->rtBandMate->songs;
        $song_list = $collection->find()->toArray();
var_dump($song_list);
die();
        return $this->render(
            'songs/song_index.html.twig', [
           'song_list' => $song_list,
        ]);
    }

    /**
     * @Route("/songs/edit/{_id}", name="song_edit")
     */
    public function edit($_id)
    {
        $client = new Client('mongodb://mongo:27017'); // connect
        $collection = $client->rtBandMate->songs;
        $song = $collection->find(['_id' => $_id])->toArray();
var_dump($song);
die();
        return $this->render(
            'songs/song_show.html.twig', [
            'song' => $song,
        ]);
    }

}