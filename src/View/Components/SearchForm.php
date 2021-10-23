<?php

namespace LNCH\LaravelAdminUI\View\Components;

use Illuminate\View\Component;

class SearchForm extends Component
{
    public $action;
    public $method;

    public $placeholder;

    public function __construct(
        $action = null,
        $method = 'GET',
        $placeholder = 'Search...'
    ) {
        // TODO: Validate parameters

        $this->action = $action ?? config('laravel-admin-ui.search-form-action');
        $this->method = $method;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('laravel-admin-ui::components.search-form');
    }
}