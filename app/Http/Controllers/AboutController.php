<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
	public function index()
	{
		return view('about');
	}

	public function member()
	{
		return view('member');
	}
}
