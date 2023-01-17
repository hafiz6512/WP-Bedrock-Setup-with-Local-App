# WP Bedrock Setup with Local App
 This is just bedrock project setup instructions in the wp local app.

#Configure below the file

### ProjectName/Config/nginx/site.config.hbs
    root "/Users/hafiz/Local Sites/bedrock/app/bedrock/web/“;

### ProjectName/app/bedrock/.env
    DB_NAME='local'
    DB_USER='root'
    DB_PASSWORD=‘root'
    WP_HOME='https://bedrock.local’

    # Generate your keys here: https://roots.io/salts.html


### ProjectName/app/bedrock/config/environment/development.php
    Config::define('WP_DEBUG', false);
    Config::define('WP_MEMORY_LIMIT', '256M');
    Config::define('WP_HTTP_BLOCK_EXTERNAL', true);



# The Developer

## Our Website
### [DHC](http://diehardcoder.com)

## Contact With Me
### Email: hafiz6512@gmail.com
### Skype: hafiz6512

## License

This project is open source and available under the [GNU-MIT License](./LICENSE).
