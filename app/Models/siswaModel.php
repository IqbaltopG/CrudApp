<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Carbon\Carbon;

class siswaModel extends Model
{
    use HasFactory;
    use sortable;

    protected $guarded = ['id'];

    public $sortable = ['NIK','nama','kota'];

    public function umur(){
        return Carbon::parse($this->attributes['dob'])->umur;
    }
}
