<?php

namespace Railken\LaraOre\Taxonomy\Attributes\Name\Exceptions;

use Railken\LaraOre\Taxonomy\Exceptions\TaxonomyAttributeException;

class TaxonomyNameNotDefinedException extends TaxonomyAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAXONOMY_NAME_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
