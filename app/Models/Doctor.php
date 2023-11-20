<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = [
        'name',
        'appointments'
    ];
    public $fillable= [
    'email',
    'email_verified_at',
    'password',
    'phone',
    'price',
    'name',
    'appointments',
    ];
      /**
     * Get the Doctor's image.
     */
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
