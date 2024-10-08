<img src="https://jcrodsolutions.com/resources/img/logo.png"/>

# Setup [Laravel 11](https://laravel.com) with [Bootstrap](https://getbootstrap.com/) using [Vite](https://vitejs.dev/)

## Step 1: Create project: 
From the folder of your preference type:
```bash
└─▶ composer create-project laravel/laravel laravel-vite-bootstrap
```

Install Bootstrap and PopperJs:
```bash
cd laravel-vite-bootstrap/
npm install bootstrap @popperjs/core
```
1a (optional) Install Font Awesome
For extra fun, you can also install Fontawesome
```bash
npm install @fortawesome/fontawesome-free
```

## Step 2: Tell Vite you're going to use bootstrap
  - Open resources/css/app.css
  - Paste the following 
```css
@import 'bootstrap/dist/css/bootstrap.min.css';

/** optional if you wan to use FontAwesome. Uncomment lines as you desire */
/**@import 'fontawesome-free/css/all.min.css';*/
/**@import '@fortawesome/fontawesome-free/css/all.min.css';*/

/** or, import only the ones you need */
@import '@fortawesome/fontawesome-free/css/fontawesome.min.css';
@import '@fortawesome/fontawesome-free/css/solid.min.css';
/* @import '@fortawesome/fontawesome-free/css/brands.min.css'; */
```
  - Open resources/js/app.js
  - Paste the following: 
```js
import 'bootstrap';
```
  - Both your vite.config.js and blade layouts should aware of these two files. By default vite.config.js already has them.

```javascript
// vite.config.js
export default defineConfig({
    // ... other config
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // ... more configs
});
```
```html5
  <!-- welcome.blade.php -->
  <head>
    ...
    @vite(['resources/scss/app.css', 'resources/js/app.js'])
    ...
  </head>
```

## Need to customize bootsrap?
Please check the included resources/scss/app.scss file.
Also modify vite.config.js and blade layouts to include 'resources/scss/app.scss' as well

## Ready to go?
  - To check if everything is ok, run
```bash
npm run build
```
  - If no errors are shown you're ready to go!
  - run
```bash
npm run dev
```
Load welcome page
  - Edit welcome.blade.php
  - Include the following into the head section of your HTML
```html5
@vite(['resources/css/app.css', 'resources/js/app.js'])
```
Have fun with your Bootstrap styled project!

## Example
Here's an example to get you going:

```html5
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LVB Demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <d class="row text-center">
            <d class="col"><img src="https://jcrodsolutions.com/resources/img/logo.png" alt="JCRodSolutions"></d>
        </d>
        <div class="row text-center py-2">
            <div class="col border border-end-0 text-uppercase">
                <i class="fas fa-user-shield fa-pull-left fa-beat text-info"></i>
                @lang("Hello")
            </div>
            <div class="col-1 border-bottom border-danger"></div>
            <div class="col border border-start-0 text-primary fw-bold">@lang("WORLD")</div>
        </div>
        <div class="row text-center py-2">
            <div class="col bg-secondary text-white rounded-start-pill">@lang("How's it")</div>
            <div class="col-1 border-top border-warning"></div>
            <div class="col bg-primary text-white rounded-end-pill">@lang("Going?")</div>
        </div>
        <div class="row text-center py-3">
            <div class="col col-offset-2 text-center ">
                <button class="btn btn-primary btn-lg"><i class="fa-solid fa-arrow-right fa-pull-left fa-border"></i>GO!</button>
            </div>
        </div>
    </div>
</body>

</html>
```

## How to make this demo work
```bash
git clone https://github.com/jcrodsolutions/laravel-vite-bootstrap.git
cd laravel-vite-bootstrap
composer install && npm install && npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate
```
If you see no errors, you're good to go.

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)

# HAVE FUN!