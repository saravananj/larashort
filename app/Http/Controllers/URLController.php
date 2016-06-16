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

use App\Helpers\URLHelper;
use App\Url;

class URLController extends Controller
{
    public function index() {
    	return View::make("url.home");
    }

    public function createURL() {
    	
    	$input =  Request::all();
    	
    	//TODO Settings Module
    	$settings["random_characters"] = "case_alpha_numeric"; //case_alpha_numeric, alpha_numeric, case_alpha, case_numeric
    	$settings["no_of_characters"] = 6;
    	
    	$isUniqueString = false;
    	while(!$isUniqueString) {
    		$shortenedURL = URLHelper::generateLink($input['inputURL'], $settings);
    		
    		if(Url::where("shortened_url",$shortenedURL)->count() == 0)
    		{
	    		$url = new Url;
	    		$url->title=URLHelper::getTitle($input["inputURL"]);
	    		$url->shortened_url = $shortenedURL;
	    		$url->original_url = $input["inputURL"];
	    		$url->last_used = Carbon::now();
	    		$url->save();
    			$isUniqueString = true;
    		}
    	}
    	
    	$data['shortenedURL'] = url("/".$shortenedURL);
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
