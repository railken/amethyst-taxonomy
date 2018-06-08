<?php

namespace Railken\LaraOre\Vocabulary\Attributes\Id\Exceptions;

use Railken\LaraOre\Vocabulary\Exceptions\VocabularyAttributeException;

class VocabularyIdNotValidException extends VocabularyAttributeException
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
    protected $code = 'VOCABULARY_ID_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
