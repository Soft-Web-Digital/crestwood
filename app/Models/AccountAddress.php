<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountAddress extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function account_network()
    {
        return $this->belongsTo(AccountNetwork::class);
    }
}
