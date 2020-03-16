<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**Accedemos a todos los métodos que están en ApiResponser.php **/
    Use ApiResponser;
}
