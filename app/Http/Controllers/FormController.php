<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Mail\HeatpumpOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FormController extends Controller
{
    private function getRecipients():array{
        return explode(",", env("MAIL_RECIPIENTS"));
    }

    public function baseContact(Request $request){
        $validData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'city' => 'required|string',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        
        $email = new ContactForm(
            senderEmail: $validData["email"],
            firstName: $validData["firstName"],
            lastName: $validData["lastName"],
            city: $validData["city"],
            mailSubject: $validData["subject"],
            mailMessage: $validData["message"],
        );
        
        Mail::to($this->getRecipients())->send($email);
        
        return response()->json("Message has been sent.");
    }

    public function heatpumpOfferForm(Request $request){
        $email = new HeatpumpOffer(
            $request->allFiles(),
            $request->all()
        );

        Mail::to($this->getRecipients())->send($email);

        return response()->json("Message has been sent.");
    }
}
