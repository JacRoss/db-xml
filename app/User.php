<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $reputation
 * @property string $created_at
 * @property string $name
 * @property string $last_logon_date
 * @property string $website_url
 * @property string $location
 * @property string $about_me
 * @property int $views
 * @property int $up_votes
 * @property int $down_votes
 * @property int $account_id
 */
class User extends Model
{

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['reputation', 'created_at', 'name', 'last_logon_date', 'website_url', 'location', 'about_me', 'views', 'up_votes', 'down_votes', 'account_id'];

}
