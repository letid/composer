# letId composer

[downloadComposer]: http://getcomposer.org/download/
[installerComposer]: https://getcomposer.org/installer
[packageComposer]: https://packagist.org
[getComposer]: https://getcomposer.org
[packagist]: https://packagist.org
[letIdComposer]: https://github.com/letid/composer.git
[letIdComposerDownload]: https://github.com/letid/composer.git

## Updating dependencies

### Composer available
If [Composer][getComposer] available just [download][letIdComposerDownload] the [letId composer][letIdComposer] and run `composer update`

### Composer not available

[Install][installerComposer] composer using PHP...
more information about [installer][downloadComposer] and [packages][packageComposer]...
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
```

Setup composer by executing `composer-setup.php`
```
php composer-setup.php --filename=composer
```

Delete `composer-setup.php` because we don't need anymore..
```
php -r "unlink('composer-setup.php');"
```

Now, generate autoload and update packages...
```
php composer update
php composer.phar update
composer update
```

If autoload dump/update require? 
```
php composer dump-autoload -o
php composer.phar dump-autoload -o
composer dump-autoload -o
```

## Other
```
curl -s http://getcomposer.org/installer | php
php -r "readfile('https://getcomposer.org/installer');" | php
```
