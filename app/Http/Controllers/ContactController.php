<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view("pages.publicc.contact", compact("contacts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::all();
        return view("pages.publicc.contact", compact("contacts"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name_contact'=>'required',
        //     'email_contact'=>'required|unique:admins',

        // ],[
        //     'name_contact.required' => 'هذا الحقل مطلوب',
        //     'email_contact.required' => 'هذا الحقل مطلوب',
        //     'email_contact.unique' => 'البريد الإلكتروني موجود بالفعل',
        //     'subject_contact.required' => 'هذا الحقل مطلوب',
        //     'comment_contact.required' => 'هذا الحقل مطلوب',
        // ]);

        Contact::create([
        'contact_name'=>$request->contact_name,
        'contact_email'=>$request->contact_email,
        'contact_subject'=>$request->contact_subject,
        'contact_comment'=>$request->contact_comment
        ]);
        return redirect('/contact')->with('success', 'تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
