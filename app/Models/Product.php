<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;

	/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
	protected $fillable = [
		'name',
		'slug',
		'description',
		'price',
		'actual_price',
		'category_id',
		'image',
		'is_stock',
	];

	public function category()
	{
		return $this->belongsTo('App\Models\Category', 'category_id');
	}
}
