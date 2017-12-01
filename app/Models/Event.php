<?php
namespace App\Models;
use Eloquent;

class Event extends Eloquent {

	protected $fillable = [
							'title',
							'description',
							'start_date',
							'due_date'
						];
	protected $primaryKey = 'id';
	protected $table = 'events';
}
