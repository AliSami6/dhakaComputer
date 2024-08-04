<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'balance',
        'points',
        'status'
    ];
    public function wallets()
    {
        return $this->belongsTo(User::class);
    }

    public function addPoints($points)
    {
        $this->points += $points;
        $this->save();
    }

    public function withdrawPoints($points)
    {
        if ($this->points >= $points) {
            $this->points -= $points;
            $this->save();
            return true;
        }
        return false;
    }

    public function rechargeBalance($amount)
    {
        $this->balance += $amount;
        $this->save();
    }

    public function deductBalance($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            $this->save();
            return true;
        }
        return false;
    }

}