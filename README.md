# The Munual [![Netlify Status](https://api.netlify.com/api/v1/badges/7a11fdaa-60b6-4328-9c4a-8d1d0ca7a559/deploy-status)](https://app.netlify.com/sites/naughty-edison-06eb86/deploys)

This is the static sources of The Munual, the manual for Model United Nations (MUN) conferences. The original url for The Munual was munual.org, but that has expired. It is now [munual.philkuo.com](http://munual.philkuo.com/).

## Background

This website was originally created back in 2015 and was built with WordPress. The site has not been activity maintained, so it is now being moved from being hosted on the NameCheap server to being hosted on [Netlify](https://www.netlify.com/).

The website is now entirely static, and to make changes to the content of the site, more work has to be done, as described below.

## Host The Munual on localhost

1. Get `localhost` running on the machine. On Macs, use [MAMP](https://www.mamp.info/en/). Set the Apache port to `80` so that `http://localhost/` will take us directory to the root localhost directory. Also set the "document root" to your preferred root localhost directory, e.g. `~/code/sites`. Now go to that directory.
   
   ```
   cd ~/code/sites
   ```

2. `git clone` this [git repo](https://github.com/pkgamma/the-munual) under the root localhost directory and rename the folder from `the-munual` to `munual.`
   
   ```
   git clone https://github.com/pkgamma/the-munual.git
   ```
   ```
   mv the-munual munual
   ```

3. Visit the [local MAMP WebStart page](http://localhost/MAMP), go into Tools > phpMyAdmin and create a new database named `db_munual`. Import the latest `db_munual_MMDDYYYY.sql` file to this new database.

4. Visit [localhost/munual](http://localhost/munual) and the site should be up and running locally!

## Make Changes and Update Production

1. Follow the above steps and get the WordPress site running on `localhost`
   
2. Make changes as you wish, by visiting the WordPress [admin page](http://localhost/munual/wp-admin).
   
3. Generate the new static site files by visiting [WP2Static](http://localhost/munual/wp-admin/admin.php?page=wp2static) on the WordPress dashboard. Choose the zip option and make sure links are made relative. (Alternatively, use [HTTrack](https://www.httrack.com/) to clone the entire `http://localhost/munual` directory).
   
4. Unzip the file and replace everything in `_site_static`.

5. Visit the [local MAMP WebStart page](http://localhost/MAMP), go into Tools > phpMyAdmin and export a copy of `db_munual`. Rename the file to `db_munual_MMDDYYYY.sql` (Month/Day/Year format) and put the file under the main `munual` directory.
   
6. Push the local updates to the [git repo](https://github.com/pkgamma/the-munual) and Netlify will updates it automatically.

## Known Problems

- When the static sites are generated with WP2Static, full width pages become half width with no widget on the side.
  
- When the static sites are generated with HTTrack, sites seem to be working only on desktop but not on mobile, potentially because the smaller size images are not tracked.

## Current Solution to Problems

Currently, the WP2Static version of the static sites are still being hosted - although the styling looks a little off, it at least works great on mobile, and most people are on mobile now anyways. If, in the future, solutions can be found to solve this problem, then we can then implement new changes.