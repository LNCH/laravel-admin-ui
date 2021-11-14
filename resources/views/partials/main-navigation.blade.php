{{--
    Desired features:

        - Commented header
        - Ability to set menu titles
        - Blade components for sections
        - Multi level, with collapsible sections (responsive)
        - Active indicators
        - Optional icons
        - ARIA tagging for screen readers
--}}

<nav class="main-navigation">
    <ul>

        <x-laravel-admin-ui-navigation-menu-title>
            Main
        </x-laravel-admin-ui-navigation-menu-title>

        <x-laravel-admin-ui-navigation-menu-item
            link-text="Dashboard"
            counter="12"
            route="https://google.com"
        >
            <x-slot name="icon">
                <img src="{{ asset('laravel-admin-ui/images/icons/dashboard-white.svg') }}" alt="" />
            </x-slot>
        </x-laravel-admin-ui-navigation-menu-item>

        <x-laravel-admin-ui-navigation-menu-item
            link-text="Bookings"
            route="https://google.com"
            active="true"
            counter="6"
        />

        <x-laravel-admin-ui-navigation-menu-item
            link-text="Sales"
            route="https://google.com"
            disabled="true"
            counter="4"
        />

        <li>
            <a href="#">
                <span>Users</span>
            </a>
        </li>

        <x-laravel-admin-ui-navigation-menu-title>
            Other Stuff
        </x-laravel-admin-ui-navigation-menu-title>

        <li>
            <a href="#">
                <span>Products</span>
            </a>
        </li>
        <li class="has-sub-menu">
            <a href="#">
                <span>Orders</span>
            </a>
            <button class="toggle-child-menu" aria-controls="sub-menu-1" aria-expanded="false">
                <span class="expand-menu">+</span>
                <span class="close-menu">&ndash;</span>
            </button>
            <ul id="sub-menu-1" role="region" tabindex="-1">
                <li>
                    <a href="#">
                        <span>Pending Orders</span>
                    </a>
                </li>
                <li class="has-sub-menu">
                    <a href="#">
                        <span>Completed Orders</span>
                    </a>
                    <button class="toggle-child-menu" aria-controls="sub-menu-2" aria-expanded="false">
                        <span class="expand-menu">+</span>
                        <span class="close-menu">&ndash;</span>
                    </button>
                    <ul id="sub-menu-2" role="region" tabindex="-1">
                        <li>
                            <a href="#">
                                <span>Pending Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Completed Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Archived Orders</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span>Archived Orders</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span>Settings</span>
            </a>
        </li>
    </ul>
</nav>