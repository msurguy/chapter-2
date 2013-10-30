<?php

Route::get('/', function()
{
	return View::make('home');
});

Route::get('services', function()
{
	$services = Service::all();
	return View::make('services', array('services'=>$services));
});

Route::get('contact', function()
{
	return View::make('contact');
});

Route::post('contact', function()
{
	$input = Input::all();

	$rules = array(
		'subject' => 'required',
		'message' => 'required'
	);

	$validator = Validator::make($input, $rules);

	if($validator->fails()) {
		return Redirect::to('contact')->withErrors($validator)->withInput();
	}

	$data = array('subject'=> $input['subject'], 'request'=> $input['message']);
	Mail::send('emails.contact', $data, function($message)
	{
	    $message->to('your@email.com', 'Site admin')->subject('Contact Request');
	});

	return 'Message sent';
});