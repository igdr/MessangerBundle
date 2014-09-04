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
