#laravel-gentelella

Laravel-gentelella is a Laravel 5.3 application with all Gentelella template components.

## Change log
### 2.0
- Add Auth support (see **[Update 2.0](#update-20)**)

### 2.1
- Add errors pages (500, 404 and 403)

### 2.2
- Add real name and **[Gravatar](https://github.com/thomaswelton/laravel-gravatar)** on UI

### 3.0
- Laravel-Gentelella run now on Laravel 5.3 !

## Gentelella

Gentellela Admin is a free to use Bootstrap admin template.
This template uses the default Bootstrap 3 styles along with a variety of powerful jQuery plugins and tools to create a powerful framework for creating admin panels or back-end dashboards.

Theme uses several libraries for charts, calendar, form validation, wizard style interface, off-canvas navigation menu, text forms, date range, upload area, form autocomplete, range slider, progress bars, notifications and much more.

We would love to see how you use this awesome admin template. You can notify us about your site, app or service by tweeting to [@colorlib](https://twitter.com/colorlib). Once the list will grown long enough we will write a post similar to [this](https://colorlib.com/wp/avada-theme-examples/) to showcase the best examples.


### Theme Demo
![Gentelella Bootstrap Admin Template](https://cdn.colorlib.com/wp/wp-content/uploads/sites/2/gentelella-admin-template-preview.jpg "Gentelella Theme Browser Preview")

**[Template Demo](https://colorlib.com/polygon/gentelella/index.html)**


## Laravel 5.3

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

### Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs/5.3).


# Installation

First, clone git rep0sitory

With Git SSH
```
git clone git@github.com:FlorientR/laravel-gentelella.git
```

Or with HTTPS
```
git clone https://github.com/FlorientR/laravel-gentelella.git
```

Go to the project folder 
```
cd laravel-gentelella
```

Update composer 
```
composer update
```

Copy ```.env.example``` file to ```.env```

For Unix
```
cp .env.example .env
```
For Windows
```
copy .env.example .env
```

Next, run this follow commands

```
php artisan key:generate
npm install --global bower gulp
npm install
bower install
gulp
```

###UPDATE 2.0

Add auth support !

**WARNING** : For auth support, configure your ```.env``` file with ```database``` and ```smtp``` connection !

For install auth support, run this follow commands

```
php artisan migrate
```

###UPDATE 3.0

####Laravel-Gentelella is now on Laravel 5.3 !!

And you are ready for a new Laravel 5.3 application with Gentelella template !!

