<?php

namespace Railken\LaraOre\Taxonomy\Attributes\Id\Exceptions;

use Railken\LaraOre\Taxonomy\Exceptions\TaxonomyAttributeException;

class TaxonomyIdNotDefinedException extends TaxonomyAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAXONOMY_ID_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
