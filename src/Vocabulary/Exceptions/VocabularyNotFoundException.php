<?php

namespace Railken\LaraOre\Vocabulary\Exceptions;

class VocabularyNotFoundException extends VocabularyException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'VOCABULARY_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
