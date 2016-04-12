<?php namespace Modules\Faqs\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    use Translatable;

    protected $table = 'faqs__faqs';
    public $translatedAttributes = ['question', 'answer'];
    protected $fillable = ['question', 'answer'];
}
