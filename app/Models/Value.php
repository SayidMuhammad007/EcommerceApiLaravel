<?php
namespace App\Models;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = ['name'];
    public array $translatable = ['name'];

    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }
}
