<?php 
use App\Models\login;

if (!function_exists('display_admin')) {
  function display_admin()
  {
      $adminData = ['loggedData' => login::where('id', '=', session('loggedAdmin'))->first()];
      return $adminData['loggedData']['username'];
  }
}