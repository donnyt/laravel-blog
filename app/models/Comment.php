<?php
// file: app/models/Comment.php

class Comment extends Eloquent {

    protected $fillable = array('commenter', 'email', 'comment');

    public function post()
	{
		return $this->belongsTo('Post');
	}
}