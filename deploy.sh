ssh web@seanfisher.co << ENDSSH
cd ~/sf
git pull
php on-deploy.php

# Clear cache
cd wordpress/;
wp w3-total-cache flush

# Force rebuild of CSS
cd ../
rm -rf wp-content/themes/sf-2013/css/site.css
php index.php >> /dev/null

# End SSH Connection
ENDSSH