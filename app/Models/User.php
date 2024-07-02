<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * Class User
 *
 * Este modelo representa la tabla 'users' en la base de datos.
 * Extiende la clase Authenticatable para proporcionar funcionalidad de autenticación.
 * Define las relaciones con otros modelos y usa el trait Notifiable.
 */
class User extends Authenticatable
{
    use Notifiable, HasFactory; // Incluye HasFactory si es necesario

    /**
     * La tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Los atributos que no son asignables masivamente.
     *
     * @var array
     */
    protected $guarded = [];
    /**
     * Define una relación de pertenencia con el modelo RoleModel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    /*public function profile()
    {
        return $this->belongsTo(ProfileModel::class, 'user_id');
    }*/
    
    /**
     * Relación uno a muchos con el modelo DeliveryModel.
     *
     * Una persona puede realizar múltiples entregas.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function delivery()
    {
        return $this->hasOne(DeliveryModel::class, 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany(RoleModel::class, 'role_user', 'role_id', 'user_id');
    }

    public function company()
    {
        return $this->hasOne(CompanyModel::class, 'user_id');
    }
    
    /*public function hasPermission($permission)
    {
        foreach ($this->roles as $role) {
            if ($role->permissions->contains('name', $permission)) {
                return true;
            }
        }
        return false;
    }*/
    
}
