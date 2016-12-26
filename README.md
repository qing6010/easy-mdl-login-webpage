### easy-login
A **material design** layer added before any webpage to request login with password.

Very easy to use with only several lines of code.

### Features
- Light and easy to use with only several lines of code
- Material design interface, friendly to both pc and phone
- Support multiple users, valid durations, background image etc

###  How to use
1. prepare php library
    - method 1

        Copy "EasyLogin.php" to your local
    
        Then use:
        
        ``` php
        include 'folder-to-file/EasyLogin.php';
        ```
    - method 2

        Install through composer
        
        `composer require qinst64/easy-login dev-master`
        
        Then use:
        
        ``` php
        require 'folder-to-file/autoload.php';
        ```
2. add the following code at the top of your entry php (e.g. index.php) 

    ```php
    //config options
    $opts = array(
        'id_entry' => 'duSWnS1sW',
        'title' => 'Login',
        'usr_pwd' => array('usr1'=>'pwd1','usr2'=>'pwd2'), 
        'duration' => 5,
        'background_img'=> 'login_bg.jpg',
    );
    //request EasyLogin
    (new EasyLogin($opts))->login();//or (new EasyLogin())->set($opts)->login();
    
    ```

**Options explained**

`id_entry` differentiate multiple entries, use random string (required)

`title` Title shown in page, default is 'Login'

`usr_pwd` username and password pairs (at least one required)

`duration` how long (hours) to make it valid (default: 72 )

`background_img` background image (default: NULL)
 
### Tips:
- Two webpages with the same 'id_entry' if you want to visit both pages by only login once
- Change 'id_entry' vaule to make existing login invalid

### Live demo
[demo here](http://qinst64.duckdns.org/easy-login/)

note: users and passwords as above.
