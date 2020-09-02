woriking with templates
-----------------------
		- open template folder
		- open index.html in sublime
		- copy all code into master(p) blade
		- cut dynamic codes into main(c) blade
		- create space in master blade
			-@yield('content')
		- extends master(p) blade in main(c) blade
		-fill space in main blade
			- @section('content')
			- code (data)
			- @endsection
		- create new folder in public
		-public / front/css,vendor
		-call localhost:8000
			-/
			-/about
			-/contact
			-/service



///////////////////
Main Functions
--------------
-Item Management
		-Brand / Category / Subcategory
-Sell / Shopping

-Order Management
	-items/customer
	-orders / order_detail
-Customer Manage
	-Reports

-orders
	-voucherid,user_id,orderdata,status

-order_details
	-voucherid,product_id,qty

-brands
=> 1 | b1 | photo
=> 2 | b2 | photo

-categories
=> 1 | fashion |photo 
=> 2 | electronic | photo


-subcategories
=> 1 | baby wear | 1

=>dbname=>-os_laravel

//////////////////////
Model Relationship
------------------
-one-to-one
	-hasOne (p)
	-belongsTo (c)

one-to-many
	-hasMany (p)
	-belongsTo (c)

-many-to-many
	-belongsToMany
	-pivot table

-Homework (using backend template)
-----------------
		-create master blade (views/backendtemplate.blade.php)
		-create child blade (views/backend/dashboard.blade.php)
		-create contorller BackendController
			-create method dashboardfun()
			-call view (backend.dashboard)


///////////////////
-Item (CRUD)
-----------
create - show form , store data
retrieve - display data (all , row)
update - show form with old value , update data
delete - delete data
////////////

Authentication
--------------
-installation
	-nodejs (call npm in terminal)
-Docs
 -Security / Authentication
 -Commands
  -composer require laravel/ui
  -php artisan ui bootstrap --auth

  -npm install
  -npm run dev
-Routes
 -localhost:8000/login
 -localhost:8000/register
 //////////
 Spatie
 --------
 	-composer require(3)
 	-public(5)
 	-php artisan migrate
 	-create new seeder class (RoleTableSeeder)
 	-seed this class
 	-User model->use HasRoles
 	-app/Http/Controller/Auth/RegisterController
 		-create method->assignRole
 	-Register middleware (app/Http/Kernel.php routeMiddleware)
 	-routes/web.php
 		-role:Admin


 GIT (upload project into your repo)
 ---
  -git init (will create .git folder)
  -git add .
  -git commit -m "first comit"
  -git remote add origin url
  -git push -u origin master
  GIT (clone)
  -----------
  -git clone url
  -cd folder
  -cp .env.example .env (-)
  -composer install
  -php artisan key:generate
  -npm install
  -npm run dev

  GIT (team)
  ---------
  -git pull