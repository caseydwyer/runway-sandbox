<?php

namespace App\Actions;

use Statamic\Actions\Action;

class LogNoteAuthor extends Action
{
    public function run($items, $values)
    {
        logger('author');
    }
}
