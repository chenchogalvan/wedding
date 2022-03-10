<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'token',
        'invitation',
        'invitation_date',
        'confirmed',
        'confirmation_date',
        'inviteds'
    ];




    public function checkToken($token)
    {
        return $this->where('token', $token)->get();
    }

    public function getUser($id)
    {
        return $this->find($id);

    }

    public function invitationDate(): Attribute
    {
        return new Attribute(
            get: fn ($value) => (new Carbon($value))->format('d/M/Y'),
            set: fn ($value) => $value,
        );
    }

    public function confirmationDate(): Attribute
    {
        return new Attribute(
            get: fn ($value) => (new Carbon($value))->format('d/M/Y'),
            set: fn ($value) => $value,
        );
    }

    /**
     * Get the user that owns the Guest
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
