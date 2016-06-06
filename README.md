mepost
======

A Symfony project created on June 4, 2016, 1:14 pm.


To Setup:

1) Edit Hosts File

127.0.0.1  mepost.com

2) Add to vhosts file:

    <VirtualHost *:80>
        ServerName mepost.com
        DocumentRoot "path/to/mepost/web/"
        SetEnv APPLICATION_ENV "development"
        
        <Directory "path/to/mepost/web/">
            AllowOverride None
            Order Allow,Deny
            Allow from All
    
            <IfModule mod_rewrite.c>
                Options -MultiViews
                RewriteEngine On
                RewriteCond %{REQUEST_FILENAME} !-f
                RewriteRule ^(.*)$ app_dev.php [QSA,L]
            </IfModule>
        </Directory>
    </VirtualHost>

3)

Run apache (port 80) and check on browser:

mepost.com
