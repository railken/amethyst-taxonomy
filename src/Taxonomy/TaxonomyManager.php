<?php

namespace Railken\LaraOre\Taxonomy;

use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\AgentContract;
use Railken\Laravel\Manager\ModelManager;
use Railken\Laravel\Manager\Tokens;

class TaxonomyManager extends ModelManager
{
    /**
     * Class name entity.
     *
     * @var string
     */
    public $entity = Taxonomy::class;

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
        Attributes\VocabularyId\VocabularyIdAttribute::class,
    ];

    /**
     * List of all exceptions.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_AUTHORIZED => Exceptions\TaxonomyNotAuthorizedException::class,
    ];

    /**
     * Construct.
     *
     * @param AgentContract $agent
     */
    public function __construct(AgentContract $agent = null)
    {
        $this->entity = Config::get('ore.taxonomy.entity');
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.taxonomy.attributes')));

        $classRepository = Config::get('ore.taxonomy.repository');
        $this->setRepository(new $classRepository($this));

        $classSerializer = Config::get('ore.taxonomy.serializer');
        $this->setSerializer(new $classSerializer($this));

        $classAuthorizer = Config::get('ore.taxonomy.authorizer');
        $this->setAuthorizer(new $classAuthorizer($this));

        $classValidator = Config::get('ore.taxonomy.validator');
        $this->setValidator(new $classValidator($this));

        parent::__construct($agent);
    }
}
