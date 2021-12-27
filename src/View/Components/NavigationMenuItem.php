<?php

namespace LNCH\LaravelAdminUI\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class NavigationMenuItem extends Component
{
    /**
     * @var string The ID of this menu item. Can be set by the user or automatically generated.
     */
    public $id;

    /**
     * @var string|null The text that should be displayed in the menu item.
     */
    public $linkText;

    /**
     * @var string|null The route that the link should direct the user to when clicked.
     */
    public $route;

    /**
     * @var int|null The number that should be displayed as a counter in the menu item.
     */
    public $counter;

    /**
     * @var string|null The target attribute of the link.
     */
    public $target;

    /**
     * @var bool Whether this is an active link or not.
     */
    public $isActive;

    /**
     * @var bool Whether this is a disabled link or not.
     */
    public $isDisabled;

    /**
     * @var string
     */
    public $wrapperClasses;

    public function __construct (
        $id = null,
        $linkText = null,
        $counter = null,
        $route = null,
        $target = null,
        $active = false,
        $disabled = false
    ) {
        $this->id = $id ?? Str::uuid();
        $this->linkText = $linkText;
        $this->counter = $counter;
        $this->route = $route ?? '#';
        // icon
        $this->target = $target;

        $this->isActive = $active;
        $this->isDisabled = $disabled;

        $classes = [];
        $classes[] = $this->isActive ? 'is-active' : '';
        $classes[] = $this->isDisabled ? 'is-disabled' : '';

        $this->wrapperClasses = trim(implode(' ', $classes));
    }

    public function render()
    {
        return view('laravel-admin-ui::components.navigation.menu-item');
    }
}