# Larastart

## About
I created Larastart as I would often download packages, many of the same, at the beginning of every project.
I would always take too much time setting up a basic template structure, downloading jQuery, Bootstrap and generating the authentication files.
After a while it got a bit tedious so I decided to create a little package that'll download and install my everything to my liking, all out of the box.

## Installation

### Step 1: Install via composer.
```
git clone https://github.com/miiikkeyyyy/larastart.git
```

### Step 2: Install Laravel.
```
composer install
```

### Step 3: Create your .env file
In the root directory of your project you will see ".env.example" simply rename that file ".env" and set all variables.

### Step 4: Generate Key
```
php artisan generate:key
```

### Step 5: Migrate the database
Before migarating you will need to create the database first.
```
php artisan migrate
```
