<?php

namespace Borsercen\Todolist;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {
	protected $table = 'tasks';

	protected $fillable = [
		'name',
	];
}
