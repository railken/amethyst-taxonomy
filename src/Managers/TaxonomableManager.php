<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Taxonomable newEntity()
 * @method \Amethyst\Schemas\TaxonomableSchema getSchema()
 * @method \Amethyst\Repositories\TaxonomableRepository getRepository()
 * @method \Amethyst\Serializers\TaxonomableSerializer getSerializer()
 * @method \Amethyst\Validators\TaxonomableValidator getValidator()
 * @method \Amethyst\Authorizers\TaxonomableAuthorizer getAuthorizer()
 */
class TaxonomableManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.taxonomy.data.taxonomable';
}
