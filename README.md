# munual.org

This is the static sources of munual.org, the manual for Model United Nations (MUN) conferences.

This website was originally created back in 2015 and was built with WordPress. The site has not been activity maintained, so it is now being moved from being hosted on the NameCheap server to being hosted on [Netlify](https://www.netlify.com/).

The website is now entirely static, and to make changes to the content of the site, more work has to be done, as described below.

## Host munual.org on `localhost`

1. Get `localhost` running on the machine. On Macs, use [MAMP](https://www.mamp.info/en/). Set the Apache port to `80` so that `http://localhost/` will take us directory to the root localhost directory. Also set the "document root" to your preferred root localhost directory, e.g. `~/code/localhost`. Now go to that directory.
   
   ```
   cd ~/code/localhost
   ```

2. `git clone` this [git repo](https://github.com/pkgamma/munual.org) under the root localhost directory and rename the folder from `munual.org` to `munual.`
   
   ```
   git clone https://github.com/pkgamma/munual.org.git
   ```
   ```
   mv munual.org munual
   ```

3. Visit the [local MAMP WebStart page](http://localhost/MAMP), go into Tools > phpMyAdmin and create a new database named `db_munual`. Import the `db_munual_MMDDYYYY.sql` file to this new database.

4. Visit [localhost/munual](http://localhost/munual) and the site should be up and running locally!

## Make Changes and Update Production

1. Follow the above steps and get the WordPress site running on `localhost`
   
2. Make changes as you wish, by visiting the WordPress [admin page](http://localhost/munual/wp-admin).
   
3. Generate the new static site files by visiting [WP2Static](http://localhost/munual/wp-admin/admin.php?page=wp2static) on the WordPress dashboard. Choose the zip option and make sure links are made relative.
   
4. Unzip the file and replace everything in `_site_static`.
   
5. Push the local updates to the [git repo](https://github.com/pkgamma/munual.org) and Netlify will updates it automatically.