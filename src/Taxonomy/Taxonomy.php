<?php

namespace Railken\LaraOre\Taxonomy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
use Railken\LaraOre\Vocabulary\Vocabulary;
use Railken\Laravel\Manager\Contracts\EntityContract;

class Taxonomy extends Model implements EntityContract
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'created_at', 'updated_at', 'deleted_at', 'vocabulary_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get works.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vocabulary()
    {
        return $this->belongsTo(Vocabulary::class);
    }

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('ore.taxonomy.table');
    }
}
