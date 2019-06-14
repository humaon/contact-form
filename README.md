# Contact-form laravel package

[![Issues](https://img.shields.io/github/issues/humaon/contact-form.svg?style=flat-square)](https://github.com/humaon/contact-form/stargazers)
[![stars](https://img.shields.io/github/stars/humaon/contact-form.svg?style=flat-square)](https://packagist.org/packages/guzzlehttp/guzzle)



A simple contact form laravel package to send email to the admin and save into the database
...
#Install the package

$ compser require humaon/contact



#After installing the package run this command

$ php artisan migrate 
Then run this command $ php artisan vendor:publish --provider="Humaon\Contact\ContactServiceProvider"
Then hit the route {base_url}/contact
...
#
You have to configure your email to send email and you can change
the admin email in contact.php which is under config folder.
Enjoy the package
...
