# Easy Sweet Alert Messages for Laravel

![A success alert](http://i.imgur.com/1XySJiz.png)


[![StyleCI](https://styleci.io/repos/38935942/shield)](https://styleci.io/repos/38935942)

## Installation

First, pull in the package through Composer.

```javascript
"require": {
    "uxweb/sweet-alert": "~1.1"
}
```

If using Laravel 5, include the service provider within `config/app.php`.

```php
'providers' => [
    UxWeb\SweetAlert\SweetAlertServiceProvider::class
];
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    'Alert' => UxWeb\SweetAlert\SweetAlert::class
];
```

> Note that this package works only by using the [BEAUTIFUL REPLACEMENT FOR JAVASCRIPT'S "ALERT"](http://t4t5.github.io/sweetalert/).

Finally, you need to get the Sweet Alert library, you can so by:

Download the .js and .css from the [website](http://t4t5.github.io/sweetalert/)

Or through bower:

```bash
bower install sweetalert
```

## Usage

### With the Facade

- `Alert::message('Message', 'Optional Title');`
- `Alert::basic('Basic Message', 'Mandatory Title');`
- `Alert::info('Info Message', 'Optional Title');`
- `Alert::success('Success Message', 'Optional Title');`
- `Alert::error('Error Message', 'Optional Title');`
- `Alert::warning('Warning Message', 'Optional Title');`

Within your controllers, before you perform a redirect...

```php
public function store()
{
    Alert::message('Robots are working!');

    return Redirect::home();
}
```

### With the Helper

- `alert($message = null, $title = '')`

In addition to the previous listed methods you can also just use the helper
function without specifying any message type. Doing so is similar to:

- `alert()->message('Message', 'Optional Title')`

Like with the Facade we can use the helper with the same methods:

```php
alert()->message('Message', 'Optional Title');
alert()->basic('Basic Message', 'Mandatory Title');
alert()->info('Info Message', 'Optional Title');
alert()->success('Success Message', 'Optional Title');
alert()->error('Error Message', 'Optional Title');
alert()->warning('Warning Message', 'Optional Title');

alert()->basic('Basic Message', 'Mandatory Title')
    ->autoclose(3500);

alert()->error('Error Message', 'Optional Title')
    ->persistent('Close');
```

Within your controllers, before you perform a redirect...

```php
/**
 * Destroy the user's session (logout).
 *
 * @return Response
 */
public function destroy()
{
    Auth::logout();

    alert()->success('You have been logged out.', 'Good bye!');

    return home();
}
```

For a general information alert, just do: `alert('Some message');` (same as `alert()->message('Some message');`).

By default, all alerts will dismiss after a sensible default number of seconds.

But no fear, if you need to specify a different time you can:

```php
    // -> Remember!, the number is set in milliseconds
    alert('Hello World!')->autoclose(3000);
```

Also, if you need the alert to be persistent on the page until the user dismiss it by pressing the alert confirmation button:

```php
    // -> The text will appear in the button
    alert('Hello World!')->persistent("Close this");
```

Finally, to display the alert in the browser, you may use (or modify) the view that is included with this package. Simply include it to your layout view:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/sweetalert.css">
</head>
<body>

    <div class="container">
        <p>Welcome to my website...</p>
    </div>

    <script src="js/sweetalert.min.js"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')

</body>
</html>
```

## Customize

If you need to customize the alert message partial, run:

```bash
    php artisan vendor:publish
```

The package view is located in the `resources/views/vendor/sweet/` directory.

You can override/overwrite your sweet alert configuration to fit your needs.

### Configuration Options

You have access to the following configuration options to build a custom view:

    Session::get('sweet_alert.text')
    Session::get('sweet_alert.type')
    Session::get('sweet_alert.title')
    Session::get('sweet_alert.confirmButtonText')
    Session::get('sweet_alert.showConfirmButton')
    Session::get('sweet_alert.allowOutsideClick')
    Session::get('sweet_alert.timer')

Please check the CONFIGURATION section in the [website](http://t4t5.github.io/sweetalert/) for all other options available.

### Default View

```html
@if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
@endif
```

The `sweet_alert.alert` session key contains a JSON configuration object to pass it directly to Sweet Alert.

Note that `{!! !!}` are used to output the json configuration object unescaped, it will not work with `{{ }}` escaped output tags.

### Custom View

```html
@if (Session::has('sweet_alert.alert'))
    <script>
        swal({
            text: "{!! Session::get('sweet_alert.text') !!}",
            title: "{!! Session::get('sweet_alert.title') !!}",
            timer: {!! Session::get('sweet_alert.timer') !!},
            type: "{!! Session::get('sweet_alert.type') !!}",
            showConfirmButton: "{!! Session::get('sweet_alert.showConfirmButton') !!}",
            confirmButtonText: "{!! Session::get('sweet_alert.confirmButtonText') !!}",
            confirmButtonColor: "#AEDEF4"

            // more options
        });
    </script>
@endif
```

Note that you must use `""` (double quotes) to wrap the values except for the timer option.

## Demo

```php
Alert::message('Welcome back!');

return Redirect::home();
```
![A simple alert](http://i.imgur.com/4bvuJx9.png)

```php
Alert::message('Your profile is up to date', 'Wonderful!');

return Redirect::home();
```
![A simple alert with title](http://i.imgur.com/GsGOtOq.png)

```php
Alert::message('Thanks for comment!')->persistent('Close');

return Redirect::home();
```
![A simple alert with title and button](http://i.imgur.com/AnRGDY2.png)

```php
Alert::info('Email was sent!');

return Redirect::home();
```
![A info alert](http://i.imgur.com/DxKh3Yx.png)

```php
Alert::error('Something went wrong', 'Oops!');

return Redirect::home();
```
![A error alert](http://i.imgur.com/pIeTEYz.png)


```php
Alert::success('Good job!');

return Redirect::home();
```
![A success alert](http://i.imgur.com/pQz3ijJ.png)


```php
Alert::success('Good job!')->persistent("Close");

return Redirect::home();
```
![A persistent alert](http://i.imgur.com/dj3y95K.png)
