<?php
// file: app/models/Post.php

class Post extends Eloquent {

    protected $fillable = array('title', 'content');

	public function comments()
	{
		return $this->hasMany('Comment');	
	}	
}

