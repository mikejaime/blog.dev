<?php

class Post extends Eloquent {

    // tells us what table we're connecting to
    protected $table = 'posts';

    // Valdation rules for our model properties
    static public $rules = [
    	// | pipes are seperators
    	'title' => 'required|max:100'
    	// 'body' => 'required'
    ];

}