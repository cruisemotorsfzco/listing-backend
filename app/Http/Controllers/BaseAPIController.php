<?php

namespace App\Http\Controllers;

use App\Traits\DBTransactionTrait;
use App\Traits\ResponseTrait;

abstract class BaseApiController
{
    use ResponseTrait, DBTransactionTrait;
}
