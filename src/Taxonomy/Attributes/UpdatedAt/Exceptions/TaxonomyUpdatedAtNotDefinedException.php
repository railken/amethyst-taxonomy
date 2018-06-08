<?php

namespace Railken\LaraOre\Taxonomy\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\Taxonomy\Exceptions\TaxonomyAttributeException;

class TaxonomyUpdatedAtNotDefinedException extends TaxonomyAttributeException
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
    protected $code = 'TAXONOMY_UPDATED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
