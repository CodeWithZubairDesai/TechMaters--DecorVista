<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PortfolioImage extends Model
{
    use HasFactory;
    public $timestamps = false; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'portfolio_id',
        'image_path',
        'type',
    ];

    /**
     * Define the relationship with the Portfolio model.
     */
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id');
    }


    public function scopeStatus($query, $status)
    {
        if ($status !== '') {
            return $query->where('status', $status);
        }
    }

    /**
     * Boot method for setting created_by and created_date on creation.
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->created_by = Auth::user()->name;
            $model->created_date = now();
            $model->status = 1; 
        });
    }
}
