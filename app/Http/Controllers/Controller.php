<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $updated = 'Updated Succesfully';
    public $created = 'Created Succesfully';
    public $deleted = 'Deleted Succesfully';
    public $info = 'No Result Found';

    public function alert()
    {
        if (session('success_message')) {
            Alert::success('SUCCESS', session('success_message'));
        }elseif (session()->has($this->info)) {
            alert()->info(session()->get($this->info , $this->info));
        }
        // if (session()->has($this->info)) {
        //     Alert::toast(session()->get($this->info), $this->info);
        return;
    }

}
