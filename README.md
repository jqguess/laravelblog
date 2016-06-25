# laravel blog 
[See it in action here](http://jqguess.net/laravelblog) 
<br />
<br />
#### Start by cloning or dowloading the repo and decide on your local environment ####
 
  [Homestead](https://laravel.com/docs/4.2/homestead) is Laravels Vagrant Box solution if 
  you do not want to install PHP and have a disposable environment. Xampp or Wampp are quick options as well.
  [More installation instructions](https://laravel.com/docs/5.2/installation)
  can be found here. 


#### Fastest option if your not familiar with Homestead, Vagrant ####

* Download and install Xampp with PHP, configure what you want, although it should not be necessary.
* Add the file that contains php.exe to your Path  <code>C:\xampp\php</code> on normal installation.
* Start MySQL form the Xampp control panel.
* Edit the .env.example or .env file with your database settings. Basic settings would be
 <code>DB_HOST=127.0.0.1
      DB_DATABASE=Homestead
      DB_USERNAME=root
      DB_PASSWORD=""</code>
* Apply these same settings to the database.php file found in the config folder for your DB type.
* From the CLI, cd to the app folder,  then run <code>$ php artisan migrate</code> This structures your DB.
* From the CLI run <code>$ php artisan serve</code> which should output server running on <code>http://localhost:8000</code>
* Point your browser and you should see the app's output. If no dice, try Laravels installation guide.  
 





