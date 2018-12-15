<?php
/**
 * Created by PhpStorm.
 * User: randt
 * Date: 12/11/2018
 * Time: 7:02 PM
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
     /**
      * @Route("/songs", name="song_index")
      */
    public function me()
    {
        return $this->render('song/index.html.twig', [
           'name' => 'Rand Thacker',
           'profession' => 'Manager of Application Engineering Services',
        ]);
    }
}