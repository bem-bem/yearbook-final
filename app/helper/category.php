<?php 

use App\Models\yearlevel;
use App\Models\course;
use App\Models\section;

if (!function_exists('yearlevel')) {
  function yearlevel()
  {
      $data = yearlevel::select('name')->get();
      return $data;
  }
}

if (!function_exists('course')) {
  function course()
  {
      $data = course::select('name')->get();
      return $data;
  }
}

if (!function_exists('section')) {
  function section()
  {
      $data = section::select('name')->get();
      return $data;
  }
}