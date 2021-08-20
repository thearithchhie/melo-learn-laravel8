<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function show() {
        $phone = Phone::all();
        $user = Phone::find()->user;
        dd($user);
//        dd($phone->user_id->name);
//        return $phone;
    }
}
