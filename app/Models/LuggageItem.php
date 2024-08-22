<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuggageItem extends Model
{

    use HasFactory;

    protected $fillable = [
        'customer_id',
        'luggage_name',
        'char_1',
        'char_2',
        'char_3',
    ];

    // Define the relationship with Customer


    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
