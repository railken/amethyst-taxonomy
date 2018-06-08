<?php

namespace Railken\LaraOre\Taxonomy\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\Taxonomy\Exceptions\TaxonomyAttributeException;

class TaxonomyCreatedAtNotAuthorizedException extends TaxonomyAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAXONOMY_CREATED_AT_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
