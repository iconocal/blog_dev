<?php

class Post extends Eloquent
{
    // this can be blank. don't need to specify table
    protected $table = 'posts';
    
    public static $rules = array(
        'title' => 'required|max:100',
        'body'  => 'required'
        );
}





