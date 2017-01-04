<p class="center"><img src="https://i.imgur.com/zShH9AO.png"></p>

# About Ransom

Ransom is a key generator for your ransomware software. We generate RSA keys via your identifier, and then send it back to your program. 


#Installing

To install, open the .env file and edit the following lines:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ransom
    DB_USERNAME=root
    DB_PASSWORD=

Those values must corespond with your database information. Now run the following command:

    php artisan migrate
    
That command will create all of the tables for you.

