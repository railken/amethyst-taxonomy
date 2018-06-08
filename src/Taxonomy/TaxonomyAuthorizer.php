<?php

namespace Railken\LaraOre\Taxonomy;

use Railken\Laravel\Manager\ModelAuthorizer;
use Railken\Laravel\Manager\Tokens;

class TaxonomyAuthorizer extends ModelAuthorizer
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
