<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class TaxonomableAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'taxonomable.create',
        Tokens::PERMISSION_UPDATE => 'taxonomable.update',
        Tokens::PERMISSION_SHOW   => 'taxonomable.show',
        Tokens::PERMISSION_REMOVE => 'taxonomable.remove',
    ];
}
