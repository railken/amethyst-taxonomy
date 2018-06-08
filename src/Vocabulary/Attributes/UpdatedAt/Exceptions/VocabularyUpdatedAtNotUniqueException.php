<?php

namespace Railken\LaraOre\Vocabulary\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\Vocabulary\Exceptions\VocabularyAttributeException;

class VocabularyUpdatedAtNotUniqueException extends VocabularyAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'updated_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'VOCABULARY_UPDATED_AT_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
