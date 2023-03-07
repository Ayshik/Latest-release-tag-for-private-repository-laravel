<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**Private repository latest lag
  *@author Md Wali Mosnad Ayshik
  *@since 2023-03-07
**/
class GithubController extends Controller
{
    public function getLatestTag()
    {
       

        return view('latest-tag');
    }
}
