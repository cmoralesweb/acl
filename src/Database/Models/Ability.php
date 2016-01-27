<?php
namespace Anavel\Acl\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'anavel_acl_abilities';

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function abilitables()
    {

    }
}
