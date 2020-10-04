<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $fillable = ['person_id', 'type_contact_id'];

    public function person()
    {
        return $this->belongsTo('App\Models\Person', 'person_id');
    }

    public function typeContact()
    {
        return $this->belongsTo('App\Models\TypeContact', 'type_contact_id');
    }
}
