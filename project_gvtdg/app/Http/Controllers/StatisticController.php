<?php

namespace App\Http\Controllers;
use App\Statistic;
use App\User;
class StatisticController extends Controller
{
    private $model = null;
    private $user = null;
    public function __construct()
    {
        $this->model = new Statistic();
        $this->user = new User();
    }
    public function index() {
        $user = User::all();
        $totalUser = count($user);
        $status = count($this->model->status());
        $ratio = $status/$totalUser;
        return view('admin.statistic.list', compact('totalUser', 'status', 'ratio'));
    }

}
