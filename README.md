# Quickly scaffold an Admin CMS layout, complete with commonly used components

## What It Does
This package provides a quick way to scaffold an Admin CMS style UI.

It comes complete with a full, responsive UI layout, a range of Blade components to make building interfaces quicker, and a set of base styles that can be easily overridden to suit your app's style.

Installing the package is simple using Packagist.

```bash
composer require lnch/laravel-admin-ui
```

Once the package is installed, it's recommended that you create a local layout file to extend the layout file provided by the package. This will allow you to set stylesheets, scripts and other layout related includes, and your app views will then extend your base layout.

Firstly, create a new view, and extend the package's layout file. 

```blade
// layouts/app.blade.php

@extends('laravel-admin-ui::layouts.app')    
```

From here you can have your app views extend your new layout view, and it will be passed through to the package's layout file.

```blade
// index.blade.php

@extends('layouts.app')

@section('content')
    <p>Main Content</p>
@endsection    
```

The package layout file uses the `content` section to inject your view content into the main content area of the UI.

###Using Default Styles

In order to use the default styles, you will need to publish the public assets

```bash
php artisan vendor:publish --provider="LNCH\LaravelAdminUI\LaravelAdminUIServiceProvider" --tag="public-assets"
```

Once they have been published, you will be able to include the assets in your base layout view

```blade
@push('head_styles')
    <link href="{{ asset('laravel-admin-ui/css/app.css') }}" rel="stylesheet" />
@endpush

@push('body_scripts')
    <script src="{{ asset('laravel-admin-ui/js/app.js') }}"></script>
@endpush
```

### Publishing the SASS to customise your own styles

...

### Layout Stacks Reference

...

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
