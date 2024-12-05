
<img  src="https://jcrodsolutions.com/resources/img/logo.png"/>

  

# Setup [Laravel 11](https://laravel.com) with [Bootstrap](https://getbootstrap.com/) using [Vite](https://vitejs.dev/)

  

## Step 1: Create project:

From the folder of your preference type:

```bash
└─▶  composer  create-project  laravel/laravel  laravel-vite-bootstrap
```

  

Install Bootstrap and PopperJs:

```bash
cd  laravel-vite-bootstrap/
npm  install  bootstrap  @popperjs/core
```

1a (optional) For extra fun, you can also install Fontawesome icons

```bash
npm  install  bootstrap  @popperjs/core @fortawesome/fontawesome-free
```
1b (optional) For 2x extra fun, install sass so you can customize Bootstrap at will.
```bash
npm  install  bootstrap  @popperjs/core @fortawesome/fontawesome-free sass-embedded
```

## Step 2: Tell Vite you're going to use bootstrap

- Open resources/css/app.css
- Paste the following
```css
/** Don't import Bootstrap here if you are going to import it with Sass */
@import  'bootstrap/dist/css/bootstrap.min.css';

/** optional if you wan to use FontAwesome. Uncomment lines as you desire */
@import '@fortawesome/fontawesome-free/css/all.min.css';

/** or, import only the ones you need */
@import  '@fortawesome/fontawesome-free/css/fontawesome.min.css';
@import  '@fortawesome/fontawesome-free/css/solid.min.css';
/* @import '@fortawesome/fontawesome-free/css/brands.min.css'; */

/** If you have a custom.css uncomment this line */
/** 
@import './custom.css';
*/
```
If using not using Bootstrap with Sass skip this part, go to the js/app.js part
- Create resources/scss/app.scss
- Paste the following
```css
$white: #ffffff;

$theme-colors: (
    "light":      #efdfcf,
    "dark":       #1e0e4f,
    "primary":    #5f3122,
    "secondary":  #a15f4d,
    "info":       #a0774e,
    "accent1":    #0f5405,
    "accent2":    #438c2a,
    "accent3":    #e65d90,
    "success":    #549c08,
    "warning":    #ffbd54,
    "danger":     #ee0362,
);
$font-family-base: 'Montserrat', sans-serif;

// Import Bootstrap styles
@import 'bootstrap/scss/bootstrap.scss';
```

- Open resources/js/app.js
- Paste the following:
```js
// this comes with laravel default installation when creating a project from scratch
import  './bootstrap';

// To import Bootstrap Javascript assets
import 'bootstrap/dist/js/bootstrap.bundle.min';

// Uncomment this if you have a custom js for your application
// import './custom.js';
```

With all previous setup, here you summon  the fun
- Both your vite.config.js and blade layouts should aware of these two files. By default vite.config.js already has them.
```javascript
// vite.config.js
export  default  defineConfig({
// ... other config
plugins: [
	laravel({
		input: ['resources/css/app.css', 'resources/js/app.js'],
		refresh:  true,
	}),
],
// ... more configs
});
```
- if using Sass to load bootstrap, the input line should read:
``` javascript
input: ['resources/scss/app.scss','resources/css/app.css', 'resources/js/app.js'],
```

- Here's how a simple blade file will load everything we have setup so far
```html5
<!-- welcome.blade.php -->
<head>
... either
@vite(['resources/scss/app.css', 'resources/js/app.js'])

... OR if using Saas
@vite(['resources/scss/app.scss','resources/scss/app.css', 'resources/js/app.js'])
...
</head>
```


## Need to customize bootsrap?

Please check the included resources/scss/app.scss file is based on [Huemint Color Pallette Generator](https://huemint.com/bootstrap-plus/).

Also modify vite.config.js and blade layouts to include 'resources/scss/app.scss' as well

  

## Ready to go?

- To check if everything is ok, run
```bash
npm  run  build
```

- If no errors are shown you're ready to go!

- run

```bash
npm  run  dev
```
Load welcome page

- Edit welcome.blade.php
- Include the following into the head section of your HTML

```html5
@vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
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
	@vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
	<div class="container">
		<div class="row text-center">
			<div class="col"><img src="https://jcrodsolutions.com/resources/img/logo.png" alt="JCRodSolutions">
			</div>
		</div>
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
			<div class="col bg-primary text-white rounded-end-pill">
				@lang("Going?")
			</div>
		</div>
		<div class="row text-center py-3">
			<div class="col col-offset-2 text-center ">
				<button class="btn btn-primary btn-lg">
					<i class="fa-solid fa-arrow-right fa-pull-left fa-border"></i>
					GO!
				</button>
			</div>
		</div>
	</div>
</body>
</html>
```

## How to make this demo work
To use this project as a skeleton just
```bash
git  clone  https://github.com/jcrodsolutions/laravel-vite-bootstrap.git
cd  laravel-vite-bootstrap
composer  install && npm  install && npm  run  build
cp  .env.example  .env
php  artisan  key:generate
php  artisan  migrate
rm -rf .git
```
If you see no errors, you're good to go.
The last line removes the git definition for this repo so you can init the project as yours and upload it to your repo.
  
## Contributing
Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.
Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)

# HAVE FUN!

README file made with [stackedit.io](https://stackedit.io)