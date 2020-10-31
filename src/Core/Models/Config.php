<?php

namespace AkshayJumbade\Config\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
   use HasFactory;
   const TYPE_STRING = 'text';
   const TYPE_STRING_MULTILINE = 'textarea';
   const TYPE_NUMBER = 'number';
   const TYPE_FILE = 'file';
   const TYPE_IMAGE = 'file:image';
   const TYPE_BOOLEAN = 'boolean';
   const TYPE_OBJECT = 'object';
   const TYPE_ARRAY = 'array';
   const TYPE_ARRAY_OF_OBJECTS = 'array:object';

   protected $fillable = [
      'var',
      'type',
      'label',
      'caption',
      'data',
      'data_type',
      'scope',
      'level',
      'is_autoload',
      'default_value',
   ];
   public function getDataAttribute($value = '')
   {
      return $value;
   }
}
