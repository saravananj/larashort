<?php
/* ========================================================================
 * LaraShort v0.1
 * Copyright 2016 Saravanan Jayabalan (http://www.saravananj.com)
 * Licensed under MIT (https://github.com/saravananj/larashort/blob/master/LICENSE)
 * ======================================================================== */

namespace App\Http\Controllers;

use Request;
use Response;

use App\Http\Requests;
use Carbon\Carbon;
use View;
use Auth;

use App\Helpers\URLHelper;
use App\Url;

class URLController extends Controller
{
    public function index() {

		$isUserLogged = false;
		if (Auth::check()) {
			$isUserLogged = true;
		}
		//dd($isUserLogged);

    	return View::make("url.home");
    }

    public function createURL() {
    	
    	$input =  Request::all();
    	
    	//TODO Settings Module
    	$settings["random_characters"] = "case_alpha_numeric"; //case_alpha_numeric, alpha_numeric, case_alpha, case_numeric
    	$settings["no_of_characters"] = 6;

		$originalURL = $input["inputURL"];
		if(Url::where("original_url",$originalURL)->count() == 1) {
			$url = Url::where("original_url", $originalURL)->first();
		}
		else {
			$isUniqueString = false;
			while (!$isUniqueString) {
				$shortenedURL = URLHelper::generateLink($originalURL, $settings);

				if (Url::where("shortened_url", $shortenedURL)->count() == 0) {
					$url = new Url;
					$url->title = URLHelper::getTitle($originalURL);
					$url->shortened_url = $shortenedURL;
					$url->original_url = $originalURL;
					$url->last_used = Carbon::now();
					$url->save();
					$isUniqueString = true;
				}
			}
		}
    	
    	$data['shortenedURL'] = url("/".$url->shortened_url);
    	$data['shortenedTitle'] = $url->title;
    	return json_encode($data);
    }
    
    public function redirectURL($shortenedURL) {
    	$input =  Request::all();
    	
    	if(Url::where("shortened_url",$shortenedURL)->count() == 1)
    	{
    		$link = Url::where("shortened_url",$shortenedURL)->first();
    		
    		//TODO Settings Module
    		$settings["enable_ad"] = false;
    		$settings["ad_display_time"] = 5;
    		
    		$data["link"] = $link;
    		$data["settings"] = $settings;
    		
    		$link->last_used = Carbon::now();
    		$link->save();
    		
    		return View::make("url.redirect",$data);
    	}
    	else
    	{
    		//TODO throw 404
    		return Response::view('errors.404', array(), 404);
    	}
    }
    
}
