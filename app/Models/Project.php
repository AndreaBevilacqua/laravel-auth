<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Project extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['title', 'content', 'image', 'is_published'];

    public function getFormattedDate($column, $format = 'd-m-Y')
    {
        return Carbon::create($this->$column)->format($format);
    }
}
