<?php

namespace Railken\LaraOre\Taxonomy\Attributes\VocabularyId;

use Railken\Laravel\Manager\Attributes\BelongsToAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;

class VocabularyIdAttribute extends BelongsToAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'vocabulary_id';

    /**
     * Is the attribute required
     * This will throw not_defined exception for non defined value and non existent model.
     *
     * @var bool
     */
    protected $required = false;

    /**
     * Is the attribute unique.
     *
     * @var bool
     */
    protected $unique = false;

    /**
     * List of all exceptions used in validation.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_DEFINED    => Exceptions\TaxonomyVocabularyIdNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\TaxonomyVocabularyIdNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\TaxonomyVocabularyIdNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\TaxonomyVocabularyIdNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'taxonomy.attributes.vocabulary_id.fill',
        Tokens::PERMISSION_SHOW => 'taxonomy.attributes.vocabulary_id.show',
    ];

    /**
     * Retrieve the name of the relation.
     *
     * @return string
     */
    public function getRelationName()
    {
        return 'vocabulary';
    }

    /**
     * Retrieve eloquent relation.
     *
     * @param \Railken\LaraOre\Taxonomy\Taxonomy $entity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getRelationBuilder(EntityContract $entity)
    {
        return $entity->vocabulary();
    }

    /**
     * Retrieve relation manager.
     *
     * @param \Railken\LaraOre\Taxonomy\Taxonomy $entity
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getRelationManager(EntityContract $entity)
    {
        return new \Railken\LaraOre\Vocabulary\VocabularyManager($this->getManager()->getAgent());
    }
}
