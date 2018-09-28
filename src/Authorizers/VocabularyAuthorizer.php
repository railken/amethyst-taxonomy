<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class VocabularyAuthorizer extends Authorizer
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
