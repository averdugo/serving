<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'phone', 'address', 'user_type_id', 'group_id','subtype'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	static $typeses = array(
		1 => 'DT',
		2 => 'ASR',
		3 => 'BCH',
		4 => 'Chofer',
		5 => 'Admin'
	);

	static $subDtTypeses = array(
		1 => 'Coordinador',
		2 => 'Medidor',
		3 => 'Ingeniero Reporte'
	);

	static $subAsrTypeses = array(
		1 => 'Coordinador',
		2 => 'Jefe de Grupo',
		3 => 'Técnico',
		4 => 'Ayudante'
	);

	public function getTypesTextAttribute()
	{
		return self::$typeses[$this->status];
	}

	public function setPasswordAttribute($value)
	{
		if(! empty ($value))
		{
			$this->attributes['password'] = bcrypt($value);
		}

	}
}
