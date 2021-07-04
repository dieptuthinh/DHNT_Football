<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetails extends Model
{
    protected $fillable = [
        'user_id','field_id' ,'booking_details_date','booking_details_start','booking_details_end','booking_details_phone','booking_details_status'
    ];
    protected $primaryKey = 'booking_details_id';
 	protected $table = 'booking_details';

}
