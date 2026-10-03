<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'pickup_datetime',
        'pickup_location',
        'destination',
        'people',
        'payment_name', // Added payment_name to fillable attributes
    ];

    protected $attributes = [
        'role' => self::ROLE_RIDER,  // Default value of role is 'rider'
    ];

    protected $hidden = ['role']; // Hiding 'role' field from being exposed in the response

    // Role constants (to avoid magic strings)
    const ROLE_DRIVER = 'driver';
    const ROLE_RIDER = 'rider';

    public static $validRoles = [
        self::ROLE_DRIVER,
        self::ROLE_RIDER,
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Optional: Add role validation for security purposes
    public static function validateRole($role)
    {
        return in_array($role, self::$validRoles);
    }
}
