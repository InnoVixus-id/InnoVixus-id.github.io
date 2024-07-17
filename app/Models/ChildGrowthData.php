<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildGrowthData extends Model
{
    use HasFactory;

    protected $table = 'child_growth_data'; // Nama tabel di database

    protected $fillable = [
        'age_months',
        'gender',
        'weight_percentile',
        'height_percentile',
        // tambahkan kolom lain yang sesuai
    ];

    // Tidak ada timestamp yang diharapkan
    public $timestamps = false;
}
