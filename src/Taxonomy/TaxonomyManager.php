<?php

namespace Railken\LaraOre\Taxonomy;

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
        Attributes\VocabularyId\VocabularyIdAttribute::class
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
        $this->setRepository(new TaxonomyRepository($this));
        $this->setSerializer(new TaxonomySerializer($this));
        $this->setValidator(new TaxonomyValidator($this));
        $this->setAuthorizer(new TaxonomyAuthorizer($this));

        parent::__construct($agent);
    }
}
