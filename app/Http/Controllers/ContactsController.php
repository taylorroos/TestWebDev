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
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->cep = $request->cep;
        $contact->save();

        return redirect('/contatos');
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

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        
        return json_encode($contact);

    }
}
