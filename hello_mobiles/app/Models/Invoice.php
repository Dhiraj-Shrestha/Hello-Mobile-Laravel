<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetails::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
