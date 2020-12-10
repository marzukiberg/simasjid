<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;

class JumatController extends Controller
{
    public function index()
    {
        return view('admin.jumat.index');
    }
}
