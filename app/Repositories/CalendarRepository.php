<?php

namespace App\Repositories;

use App\Models\Calendar;
use App\Repositories\Contracts\CalendarRepositoryInterface;

class CalendarRepository extends BaseRepository implements CalendarRepositoryInterface
{
    public function __construct(Calendar $model)
    {
        parent::__construct($model);
    }
}