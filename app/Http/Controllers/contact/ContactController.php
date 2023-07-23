<?php
namespace App\Http\Controllers\contact;
use App\Http\Controllers\Controller;
class ContactController extends Controller{
    public function Contact() {
        return view('contact.Contact');
    }
}
