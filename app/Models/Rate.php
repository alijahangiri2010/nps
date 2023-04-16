<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'rate'
    ];

    public function editRate($id, $newRateValue)
    {
        $rate = Rate::find($id);
        if ($rate) {
            $rate->rate = $newRateValue;
            $rate->save();
            return "Rate updated successfully.";
        } else {
            return "Rate not found.";
        }
    }
    
}
