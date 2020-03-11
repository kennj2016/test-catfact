<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PdfModel extends Model
{

    protected $table = 'pdfs';
    protected $fillable = [
        'file_name', 'number'
    ];
}
