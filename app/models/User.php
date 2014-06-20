<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
        
        public $errors;
        
        protected $fillable = array('email', 'name', 'password', 'username', 'cedula');
        
    
        public function isValid($data)
        {
            $rules = array(
                'username' => 'required|min:4|max:20',
                'email'     => 'required|email|unique:users',
                'name' => 'required|min:4|max:40',
                'password'  => 'min:8|confirmed',
                'cedula'  => 'required|min:6|unique:users'
            );
            
            if ($this->exists)
            {
                //Evitamos que la regla “unique” tome en cuenta el email del usuario actual
                $rules['email'] .= ',email,' . $this->id;
                $rules['cedula'] .= ',cedula,' . $this->id; 
            }
             else // Si no existe...
                {
                    // La clave es obligatoria:
                    $rules['password'] .= '|required';
                }

            $validator = Validator::make($data, $rules);

            if ($validator->passes())
            {
                return true;
            }

            $this->errors = $validator->errors();

            return false;
        }
        
        public function setPasswordAttribute($value)
        {
            if ( ! empty ($value))
            {
                $this->attributes['password'] = Hash::make($value);
            }
        }
        
        public function validAndSave($data)
        {
            // Revisamos si la data es válida
            if ($this->isValid($data))
            {
                // Si la data es valida se la asignamos al usuario
                $this->fill($data);
                // Guardamos el usuario
                $this->save();

                return true;
            }

            return false;
        }

}
