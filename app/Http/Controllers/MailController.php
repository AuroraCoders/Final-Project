<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlaced;

class MailController extends Controller
{
    function sendEmail(){
        $to="fatimarafaqat2000@gmail.com";
        $msg="Your order has been successfully placed.
        Thank you for shopping with us!";
        $subject="Order Confirmation";
        Mail::to($to)->send(new OrderPlaced($msg,$subject));
        return "Order has been placed.Please check your Email";
    }

    function sendCustom(){
        $to="fatimarafaqat2000@gmail.com";
        $msg = "Dear Customer, 
Thank you for sharing your preferences with us. We are processing your request and will provide further updates shortly.";

        $subject="Custom Confirmation";
        Mail::to($to)->send(new OrderPlaced($msg,$subject));
        return "Custom Order has been placed.Please check your Email";
    }
   
}
