CSI-Website

git clone remote repo
git checkout develop
change the APP_URL to your
cp .env.example .env
php artisan migrate
php artisan passport install
php artisan db:seed

run Queue
add supervisor in linux 
and redis as a daemon
php artisan queue:work redis# csi_website
# csi-website
# csi-website
