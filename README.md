## About

This is a practice web app for laravel.

## Learning Goals
- Model-View-Controller Architecture
- View
- Controller
- Routes
- Database



## Learning Progress
**Basic structure in a Laravel App (will add as I learn)**
```
app/
├── Http/
|   └── Controllers/
|       ├── Controller.php
|       └── CustomController.php
├── resources/
|  └── views/
|       ├── custom/     -- for controller
|       |   ├── index.blade.php
|       |   ├── edit.blade.php
|       |   └── ...
|       ├── page1.blade.php     -- for normal pages
|       └── welcome.blade.php   -- main page
└── routes/
    └── web.php     -- routing for web urls
```
**Artisan Commands**
Making new controller:
```bash
php artisan make:controller NameController
```
For resource controller:
```bash
php artisan make:controller NameController --resource
```

## Next Goal
- [Resource Controller for DB](https://youtu.be/0M84Nk7iWkA?si=BVJqPeDt_IebvEuP&t=4983)
- 
