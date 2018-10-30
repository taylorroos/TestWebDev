<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(Request $request)
    {
        $contacts = DB::table('contacts')->get();

        return view('contacts.index', compact('contacts'));
    }
}
