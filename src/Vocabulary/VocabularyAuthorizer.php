<?php

namespace Railken\LaraOre\Vocabulary;

use Railken\Laravel\Manager\ModelAuthorizer;
use Railken\Laravel\Manager\Tokens;

class VocabularyAuthorizer extends ModelAuthorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'vocabulary.create',
        Tokens::PERMISSION_UPDATE => 'vocabulary.update',
        Tokens::PERMISSION_SHOW   => 'vocabulary.show',
        Tokens::PERMISSION_REMOVE => 'vocabulary.remove',
    ];
}
