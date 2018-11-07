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

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit',compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->cep = $request->cep;
        $contact->save();

        return json_encode($contact);

    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        
        return json_encode($contact);

    }
}
