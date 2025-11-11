<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
        //dd($request->only(['name','email','tel','content']));
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }
    public function store(ContactRequest $request)
    {
     // 入力内容を受け取る
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);

    // 確認ページを表示
        return view('thanks', compact('contact'));
    }

}