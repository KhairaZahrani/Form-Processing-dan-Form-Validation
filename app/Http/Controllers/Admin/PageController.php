<?php 

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Controllers\Coba\Foo;

class PageController extends Controller
{
	
	public function index()
	{
		return view('welcome');
	}

	public function cobaFacade()
	{
		echo Str::snake('SedangBelajarLaravelUncover');
		echo "<br>";
		echo Str::kebab('SedangBelajarLaravelUncover');
	}

	// mengakses exsternal class
	public function cobaClass()
	{
		$foo = new Foo();
		echo $foo->bar();	
	}


}
