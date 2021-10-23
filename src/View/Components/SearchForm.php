<?php

namespace LNCH\LaravelAdminUI\View\Components;

use Illuminate\View\Component;

class SearchForm extends Component
{
    public $action;

    public function __construct($action = '/search')
    {
        dd('test');
        $defaultAction = config('laravel-admin-ui.search-form-action');
        $this->action = $defaultAction;
    }

    public function render()
    {
        return view('laravel-admin-ui::components.search-form');
    }
}