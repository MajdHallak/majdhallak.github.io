
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class Contact extends Model {
    use HasFactory;

    public $fillable = ['name', 'email', 'subject', 'message'];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {

        parent::boot();

        static::created(function ($item) {
            $adminEmail = "majdhallak90@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));

            Session::flash('message', 'Thank you for your email');

            return redirect()->route('contact.submit');
        });
    }
}
