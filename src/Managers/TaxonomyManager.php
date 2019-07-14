<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Taxonomy                 newEntity()
 * @method \Amethyst\Schemas\TaxonomySchema          getSchema()
 * @method \Amethyst\Repositories\TaxonomyRepository getRepository()
 * @method \Amethyst\Serializers\TaxonomySerializer  getSerializer()
 * @method \Amethyst\Validators\TaxonomyValidator    getValidator()
 * @method \Amethyst\Authorizers\TaxonomyAuthorizer  getAuthorizer()
 */
class TaxonomyManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.taxonomy.data.taxonomy';

    /**
     * Describe extra actions.
     *
     * @return array
     */
    public function getDescriptor()
    {
        return [
            'tree' => [
                'parent' => 'parent_id',
            ],
        ];
    }
}
