<?php

namespace Anavel\Acl\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'anavel_acl_roles';

    public function abilities()
    {
        return $this->belongsToMany(Ability::class);
    }
}
