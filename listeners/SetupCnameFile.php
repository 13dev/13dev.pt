<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class SetupCnameFile
{
    public function handle(Jigsaw $jigsaw)
    {
        if($jigsaw->getEnvironment() === 'production') {
            $jigsaw->writeOutputFile('CNAME', $jigsaw->getFilesystem()->get('CNAME'));
        }
    }
}