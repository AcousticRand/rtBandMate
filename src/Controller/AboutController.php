<?php
/**
 * Created by PhpStorm.
 * User: randt
 * Date: 12/11/2018
 * Time: 7:02 PM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController
{
     /**
      * @Route("/about/me")
      */
    public function me()
    {
        return new Response(
            '<html><body>Rand Thacker</body></html>'
        );
    }
}