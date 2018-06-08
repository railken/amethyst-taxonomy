<?php

namespace Railken\LaraOre\Vocabulary\Exceptions;

class VocabularyNotAuthorizedException extends VocabularyException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'VOCABULARY_NOT_AUTHORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
