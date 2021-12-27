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
        {{-- Example of an optional menu title, to separate the nav --}}
        <x-laravel-admin-ui-navigation-menu-title>
            Main
        </x-laravel-admin-ui-navigation-menu-title>

        {{-- Example of a nav link using a counter, route and an optional icon slot --}}
        <x-laravel-admin-ui-navigation-menu-item
            link-text="Dashboard"
            counter="12"
            route="https://google.com"
        >
            <x-slot name="icon">
                <img src="{{ asset('laravel-admin-ui/images/icons/dashboard-white.svg') }}" alt="" />
            </x-slot>
        </x-laravel-admin-ui-navigation-menu-item>

        {{-- Example of a menu item that has a counter active, and is currently active --}}
        <x-laravel-admin-ui-navigation-menu-item
            link-text="Bookings"
            route="https://google.com"
            active="true"
            counter="6"
        />

        {{-- Example of a disabled nav link - this will not be clickable --}}
        <x-laravel-admin-ui-navigation-menu-item
            link-text="Sales"
            route="https://google.com"
            disabled="true"
        />

        {{-- Example of a nav link with no associated route (links to '#') --}}
        <x-laravel-admin-ui-navigation-menu-item
            link-text="Users"
        />

        <x-laravel-admin-ui-navigation-menu-title>
            Other Stuff
        </x-laravel-admin-ui-navigation-menu-title>

        <x-laravel-admin-ui-navigation-menu-item
            link-text="Products"
        />

        {{-- Example of a multi-level sub menu. --}}
        <x-laravel-admin-ui-navigation-sub-menu
            link-text="Orders"
        >
            <x-laravel-admin-ui-navigation-menu-item
                link-text="Pending Orders"
            />

            <x-laravel-admin-ui-navigation-sub-menu
                link-text="Completed Orders"
            >
                <x-laravel-admin-ui-navigation-menu-item
                    link-text="Pending Orders"
                />
                <x-laravel-admin-ui-navigation-menu-item
                    link-text="Completed Orders"
                />
                <x-laravel-admin-ui-navigation-menu-item
                    link-text="Archived Orders"
                />
            </x-laravel-admin-ui-navigation-sub-menu>

            <x-laravel-admin-ui-navigation-menu-item
                link-text="Archived Orders"
            />
        </x-laravel-admin-ui-navigation-sub-menu>

        <x-laravel-admin-ui-navigation-menu-item
            link-text="Settings"
        />
    </ul>
</nav>