<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  return view('upload', ['visited' => $visited, 'togo' => $togo ] );
});

Route::get('/list', function () {
  $visited = DB::select('select * from peoples where visited = ?', [1]); 
  $togo = DB::select('select * from peoples where visited = ?', [0]);

  return view('upload', ['visited' => $visited, 'togo' => $togo ] );
});
