

<img src="https://raw.githubusercontent.com/Rajeshrj202/Excel-import/master/logo.png" style="width:200px;Height:200px;"> <h1>M@ilBOX</h1>

Steps to Use for Installation:

> 1. Open your Git Bash/Gui clone from below url
        
    git clone https://github.com/Rajeshrj202/laravel-mail.git

> 2. Navigate to laravel mail project root folder and open your terminal 

> 3. Run 
      
    composer update (make sure you have composer install already)

> 4. Run 
      
      copy .env.example .env

> 5. Run 
        
     php artisan key:generate

> 7. Create a new Database table and update your Database credentials and Mail credentials to .env file
    
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=laravel
     DB_USERNAME=root
     DB_PASSWORD=

     MAIL_MAILER=smtp
     MAIL_HOST=mailhog
     MAIL_PORT=1025
     MAIL_USERNAME=null
     MAIL_PASSWORD=null
     MAIL_ENCRYPTION=null
     MAIL_FROM_ADDRESS=null
     MAIL_FROM_NAME="${APP_NAME}" 

 > 8. add below environmental variable to .env

    QUEUE_CONNECTION=database
    SUBSCRIBER_SEED_COUNT=10000      (you can change count as per need like 300000 to 400000)

> 9. Run  below command to create table and seed tables
     
    php artisan migrate
    php artisan db:seed
    
> 10. Run below command to run the project.
     
    php artisan serve

> 10. Now Open the Command to start the Queue Listerner or Worker from below command  (NOTE * - To dispatch multiple queue jobs simultaneously create Multiple Workers)
    
    php artisan queue:listen --timeout=0
    OR
    php artisan queue:work
    OR 
    Install Supervisor for Continous Queue worker running enviornment on Server
        -- for more info please follow the given link https://laravel.com/docs/8.x/queues#supervisor-configuration


> 11. To Enable auto job retry add another queue worker
      
    php artisan queue:retry all

> 12. After any changes in code use below code to restart the queue worker
    
    php artisan queue:restart


   - Great Your Setup Done!


 > 13. Screenshots:
    
   ![image](https://user-images.githubusercontent.com/54094045/208312191-b2f62aba-c74a-4474-9d52-f0c59ce39933.png)

        


     


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
