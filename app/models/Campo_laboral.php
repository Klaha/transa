<?php

class Campo_laboral extends Eloquent
{
	protected $table = 'campos_laborales';	

	public function usuarios()
  {
  	return $this->hasMany('User');
	}    
}