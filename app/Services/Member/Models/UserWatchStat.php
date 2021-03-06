<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Services\Member\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserWatchStat extends Model
{
    use SoftDeletes;

    protected $table = 'user_watch_stat';

    protected $fillable = [
        'user_id', 'year', 'month', 'day', 'seconds',
    ];
}
