<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'surname',
        'first_name',
        'email',
        'phone_number',
        'ticket_number',
        'departure_point',
        'destination',
        'qr_code',
    ];

    // Define the relationship with LuggageItem


    public function luggageItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LuggageItem::class);
    }
}
