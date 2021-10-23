<?php

namespace LNCH\LaravelAdminUI\View\Components;

use Illuminate\View\Component;

class SearchForm extends Component
{
    public $action;

    public function __construct($action = '/search')
    {
        $this->action = $action;
    }

    public function render()
    {
        return view('laravel-admin-ui::components.search-form');
    }
}