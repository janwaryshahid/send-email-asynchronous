<h2>Send Asynchronous Email</h2>
<p>
    run composer update
    create databae and connect in .env file
    run php artisan migrate
</p>
<p>  create your email account in <a href="https://support.google.com/accounts/answer/185833?hl=en">Here</a></p>
add into .env
<p>
    
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=your email
    MAIL_PASSWORD=yourpassword
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=emailaddress
    MAIL_FROM_NAME=username
</p>
<p>
    run php artisan config:clear
    php artisan cache:clear
    php artisan serve
</p>
