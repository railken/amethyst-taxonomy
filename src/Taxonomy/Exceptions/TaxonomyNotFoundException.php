<?php

namespace Railken\LaraOre\Taxonomy\Exceptions;

class TaxonomyNotFoundException extends TaxonomyException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAXONOMY_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
