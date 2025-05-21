## About

This is a practice web app for laravel.

## Learning Goals
- Model-View-Controller Architecture
- Model
- View
- Controller
- Routes
- Database

## Learning Progress (will add as I learn)
**Basic structure in a Laravel App**
```
app/
├── Http/
│   └── Controllers/
│       ├── Controller.php
│       └── CustomController.php
database/
├── migrations/
│   ├── migration1.php
│   └── migration2.php
├── seeders/
│   ├── DatabaseSeeder.php
│   └── Table1Seeder.php
resources/
├── views/
│   ├── custom/     -- corresponds to controller
│   │   ├── index.blade.php
│   │   ├── edit.blade.php
│   │   └── ...
│   ├── page1.blade.php     -- for normal pages
│   └── welcome.blade.php   -- main page
routes/
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
- Models (what they are and how it is integrated)
- Components?
- Migration for DB
- Seeders for DB
- Data Validation

![database diagram](/images/image.png)
