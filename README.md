Messanger Bundle
========================
Installation
------------

Add the bundle to your `composer.json`:

    "repositories": [
        {
            "type": "git",
            "url": "git@github.com:igdr/MessangerBundle.git"
        }
    ],

    "igdr/messanger-bundle" : "dev-master"

and run:

    php composer.phar update

Then add the MessangerBundle to your application kernel:

    // app/IgdrKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Igdr\Bundle\MessangerBundle\IgdrMessangerBundle(),
            // ...
        );
    }

    //app/config/parameters.ini
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null


    //app/config/config.yml
    swiftmailer:
        transport: "%mailer_transport%"
        host:      "%mailer_host%"
        username:  "%mailer_user%"
        password:  "%mailer_password%"