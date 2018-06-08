<?php

namespace Railken\LaraOre\Vocabulary\Attributes\Name\Exceptions;

use Railken\LaraOre\Vocabulary\Exceptions\VocabularyAttributeException;

class VocabularyNameNotValidException extends VocabularyAttributeException
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
    protected $code = 'VOCABULARY_NAME_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
