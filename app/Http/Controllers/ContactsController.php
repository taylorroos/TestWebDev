<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactsController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::get();

        return view('contacts.index', compact('contacts'));
    }

    public function create(Request $request)
    {
        $data = $request->all();

        
        $contacts = Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'cep' => $data['cep'],
        ]);
        
        return view('contacts.index', compact('contacts'));
    }

    public function update(Request $request, Contact $contact)
    {
        $data = $request->all();

        
        $contacts->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'cep' => $data['cep'],
        ]);
        
        return view('contacts.index', compact('contacts'));
    }

    public function destroy(Contact $contact)
    {
        $contact->tags()->detach();
        $contact->delete();
        return view('contacts.index');
    }
}
