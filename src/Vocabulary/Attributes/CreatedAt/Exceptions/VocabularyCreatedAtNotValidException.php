<?php

namespace Railken\LaraOre\Vocabulary\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\Vocabulary\Exceptions\VocabularyAttributeException;

class VocabularyCreatedAtNotValidException extends VocabularyAttributeException
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
    protected $code = 'VOCABULARY_CREATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
