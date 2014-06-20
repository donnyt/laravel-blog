<?php
// file: app/models/Comment.php

class Comment extends Eloquent {
	
	public function post()
	{
		return $this->belongsTo('Post');
	}
}