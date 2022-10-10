<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class M_Buku extends Model
{
    use softDeletes;

    protected $table = 'crud_buku';
    protected $fillable = [
        'judul',
        'pengarang',
        'penerbit',
        'isbn',
        'thterbit'
    ];
    protected $hidden;
}
