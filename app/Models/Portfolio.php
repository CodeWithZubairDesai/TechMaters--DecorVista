<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Portfolio extends Model
{
    use HasFactory;
    
    public $timestamps = false; // Disable automatic timestamp management

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'designer_id',
        'title',
        'description',
        'status',
        'created_by',
        'created_date',
    ];

    /**
     * Define the relationship with the User model.
     */
    public function designer()
    {
        return $this->belongsTo(User::class, 'designer_id');
    }

    /**
     * Boot method for setting created_by and created_date on creation.
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->created_by = Auth::user()->name;
            $model->created_date = now(); // Current date and time
        });
    }
}
