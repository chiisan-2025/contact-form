<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
         // 入力内容を受け取る
        $contact = $request->only(['name', 'email', 'tel', 'content']);

    // 確認ページを表示
    return view('thanks', compact('contact'));
    }

}