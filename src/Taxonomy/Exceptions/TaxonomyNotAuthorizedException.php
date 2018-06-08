<?php

namespace Railken\LaraOre\Taxonomy\Exceptions;

class TaxonomyNotAuthorizedException extends TaxonomyException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'TAXONOMY_NOT_AUTHORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
