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
│   ├── Pet/     -- corresponds to controller   -- some pages might not be required
│   │   ├── index.blade.php     -- display all data in table
│   │   ├── create.blade.php    -- create new entry
│   │   ├── show.blade.php      -- display single entry
│   │   ├── edit.blade.php      -- get exisiting entry for editting
│   │   ├── update.blade.php    -- publishes editted entry for updating
│   │   ├── destroy.blade.php   -- removes an entry
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
this includes methods for index, create, store, show, edit, update, destroy.

Making new table:
```bash
php artisan make:migration create_name1_table
```
Making new model:
```bash
php artisan make:model LoremIpsum
```
add `-m` flag to make table migration and `-c` flag to make controller (recommended to make model with both?)

## Next Goal
- [Resource Controller for DB](https://youtu.be/0M84Nk7iWkA?si=BVJqPeDt_IebvEuP&t=4983)
- Models (what they are and how it is integrated)
- Components?
- Migration for DB
- Seeders for DB
- Data Validation

Will try to implement this DB structure
![database diagram](/images/image.png)

## TODO
- Add controller for pet table
- Try without controller fo breed/species?
- user can add breed for a species
- Seed species DB