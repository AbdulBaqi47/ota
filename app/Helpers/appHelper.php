<?php

use Carbon\Carbon;

function getCurrentDate()
{
	return Carbon::now()->format('g:i A d F, Y ');
}
