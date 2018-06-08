<?php

namespace Railken\LaraOre\Taxonomy\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\Taxonomy\Exceptions\TaxonomyAttributeException;

class TaxonomyUpdatedAtNotAuthorizedException extends TaxonomyAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'updated_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAXONOMY_UPDATED_AT_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
