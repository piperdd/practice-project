## About

This is a practice web app for laravel.

## Learning Goals
- Model-View-Controller Architecture
- Model
    - Class that represents a single table in DB, and provides methods for interacting with table
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
│       └── PetController.php
├── Models/
│   ├── Pet.php
│   ├── Species.php
│   └── Breed.php
database/
├── migrations/
│   ├── migration1.php
│   └── migration2.php      --create_table_...
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
Making new table:
```bash
php artisan make:migration create_name1_table
```
Making new model:
```bash
php artisan make:model LoremIpsum
```
add `-m` flag to make table migration and `-c` flag to make controller (not every model needs controller)

## Next Goal
- [Resource Controller for DB](https://youtu.be/0M84Nk7iWkA?si=BVJqPeDt_IebvEuP&t=4983)
- Models (what they are and how it is integrated)
- Components?
- Migration for DB
- Seeders for DB
- Data Validation

Will try to implement this DB structure
![database diagram](/images/image.png)
