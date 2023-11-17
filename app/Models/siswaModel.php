<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class siswaModel extends Model
{
    use HasFactory;
    use sortable;

    protected $guarded = ['id'];

    public $sortable = ['NIK','nama','kota'];
}
