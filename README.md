# UMECloudTheme - A theme for NextCloud 15.0.5

This is a theme for NextCloud, it's compatible with version 15.0.5

**It's easy to install**

1. change to your NextCloud theme directory:

```
$ cd /path/to/nextcloud/themes/
```

2. clone this repository to the current path:

```
$ git clone --branch master https://github.com/Bekcpear/UMECloudTheme.git
```

3. edit `/path/to/nextcloud/themes/UMEThemeCloud/defaults.php` to do some personal settings.

4. copy your own logo and favicon images to override the corresponding images in `/path/to/nextcloud/themes/UMEThemeCloud/core/img` directory.

5. fix the permission of UMECloudTheme directory and all it's subdirectories and files.

6. edit `/path/to/nextcloud/config/config.php` to set `'theme' => 'UMECloudTheme',` , and save it.

7. refresh you NextCloud page (clean the cache at this time) and enjoy it (if memcache used, you should restart php).

## Screenshots

![](screenshots/1.png)

![](screenshots/2.png)

![](screenshots/3.png)

![](screenshots/4.png)

![](screenshots/5.png)

## LICENSE

AGPL
