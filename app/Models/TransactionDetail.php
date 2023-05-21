<?php

namespace App\Models;

use App\Models\Gallery as ModelsGallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'transaction_id', 'username', 'nationality', 'is_visa', 'doe_passport'
    ];

    protected $hidden = [

    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

}
