<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class AuthenticateLog extends Model
{
    protected $fillable = [
        'user_id',
        'last_login_date',
        'last_login_time',
        'last_login_ip'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Format tanggal Indonesia (WIB)
    public function indonesian_date_format($date)
    {
        return Carbon::parse($date)
            ->timezone('Asia/Jakarta')
            ->format('d-m-Y');
    }

    // Format jam login (WIB)
    public function time($time)
    {
        return Carbon::parse($time)
            ->timezone('Asia/Jakarta')
            ->format('H:i');
    }
}
