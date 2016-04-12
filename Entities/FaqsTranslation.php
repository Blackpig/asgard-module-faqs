<?php namespace Modules\Faqs\Entities;

use Illuminate\Database\Eloquent\Model;

class FaqsTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['question', 'answer'];
    protected $table = 'faqs__faqs_translations';
}
