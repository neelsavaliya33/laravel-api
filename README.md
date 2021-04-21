<img src="https://laravel.com/img/logotype.min.svg" width="100%">

# laravel 8 api
Excel import

10 clone repository and open cmd in folder
2. composer install
3. in file .env configure a local database username and password
4. php artisan migrate
5. php artisan db
6. php artisan serve

login credentials

    email : admin@gmail.com
    password : 12345678

Route

    api/login
        method : POST
        required fields : email,password
        
    api/uplode
        method : POST
        required fields : file(csv,xlsx,xls)
        
    api/getall
        method : GET
         
     api/logout
        method : GET
        
        
