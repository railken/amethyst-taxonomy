<?php

namespace Railken\LaraOre\Vocabulary;

use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\AgentContract;
use Railken\Laravel\Manager\ModelManager;
use Railken\Laravel\Manager\Tokens;

class VocabularyManager extends ModelManager
{
    /**
     * Class name entity.
     *
     * @var string
     */
    public $entity = Vocabulary::class;

    /**
     * List of all attributes.
     *
     * @var array
     */
    protected $attributes = [
        Attributes\Id\IdAttribute::class,
        Attributes\Name\NameAttribute::class,
        Attributes\CreatedAt\CreatedAtAttribute::class,
        Attributes\UpdatedAt\UpdatedAtAttribute::class,
        Attributes\DeletedAt\DeletedAtAttribute::class,
    ];

    /**
     * List of all exceptions.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_AUTHORIZED => Exceptions\VocabularyNotAuthorizedException::class,
    ];

    /**
     * Construct.
     *
     * @param AgentContract $agent
     */
    public function __construct(AgentContract $agent = null)
    {
        $this->entity = Config::get('ore.vocabulary.entity');
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.vocabulary.attributes')));

        $classRepository = Config::get('ore.vocabulary.repository');
        $this->setRepository(new $classRepository($this));

        $classSerializer = Config::get('ore.vocabulary.serializer');
        $this->setSerializer(new $classSerializer($this));

        $classAuthorizer = Config::get('ore.vocabulary.authorizer');
        $this->setAuthorizer(new $classAuthorizer($this));

        $classValidator = Config::get('ore.vocabulary.validator');
        $this->setValidator(new $classValidator($this));

        parent::__construct($agent);
    }
}
