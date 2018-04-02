<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Project extends Eloquent{
    public $name;
    
    public $timestamps = [];

    protected $fillable = ['name', 'student_name', 'date', 'document_name'];

}