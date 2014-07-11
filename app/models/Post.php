<?php

class Post extends BaseModel {

    // tells us what table we're connecting to
    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    // Valdation rules for our model properties
    static public $rules = [
    	// | pipes are seperators
    	'title' => 'required|max:100',
    	'body' => 'required'
    ];

    public function user() 
    {
    	return $this->belongsTo('User');
    }

	public function addUploadedImage($image) 
    {
    	$systemPath = public_path() . '/' . $this->imgDir . '/';

    	$imageName = $this->id . '-' . $image->getClientOriginalName();

    	$image->move($systemPath, $imageName);

    	$this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }    

    public function renderBody()
    {
        // Convert he post body from markdown to HTML using parsedown.
        // Sanitize the converted HTML with HTML Purifier.
        // Return the sanitized result
        $dirty_html = Parsedown::instance()->parse($this->body);
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        return $purifier->purify($dirty_html);
    }

    public function setSlugAttribute($value)
    {
        $value = str_replace(' ', '-', trim($this->title));
        $this->attributes['slug'] = strtolower($value);
    }

}