<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
use HasFactory;

    protected $table = 'job_listings';

    protected $guarded = [];
    // protected $fillable = ['employer_id','title', 'company'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

}