<?php

namespace Railken\LaraOre\Vocabulary\Attributes\Name\Exceptions;

use Railken\LaraOre\Vocabulary\Exceptions\VocabularyAttributeException;

class VocabularyNameNotAuthorizedException extends VocabularyAttributeException
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
    protected $code = 'VOCABULARY_NAME_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
