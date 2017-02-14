<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
		$datas = DB::table('tester')->get();
		echo "<table border='1'>";
		echo "</tr>";
		echo "<td>Name</td>";
		echo "<td>Marks</td>";
		echo "<td>Result</td>";
		echo "</tr>";
		foreach ($datas as $data) {
			echo "</tr>";
			echo "<td>".$data->Name."</td>";
			echo "<td>".$data->Marks."</td>";
			echo "<td>".$data->Result."</td>";
			echo "</tr>";
		}
		echo "</table>";
});
