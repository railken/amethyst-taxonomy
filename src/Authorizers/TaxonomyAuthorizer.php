<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class TaxonomyAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'taxonomy.create',
        Tokens::PERMISSION_UPDATE => 'taxonomy.update',
        Tokens::PERMISSION_SHOW   => 'taxonomy.show',
        Tokens::PERMISSION_REMOVE => 'taxonomy.remove',
    ];
}
