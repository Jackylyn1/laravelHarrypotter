## Introduction | Explanation ##
### Created Files/Changes ###
Below is a list of files I created myself. (Note: PHPDocs were generated with the help of AI, but all PHP files were created manually.)
1. I created all Files in the following folders myself (excluding Laravel Standard-Files)
1.1. App\Console
1.2. App\Contracts
1.3. App\Http\Controllers
1.4. App\Models
1.5. App\services
1.6. Database\Factories
1.7. Database\Migrations
2. I used the help of AI for the Files in the following folders
2.1. tests

### DDEV ###
1. I added pre-stop and post-start hooks for exporting and importing the database, so after checking out the repository, no additional setup is required.

## dependencies ##
1. Docker
2. ddev

## Start the project ##
1. run "ddev start"
2. open https://laravelHarrypotter.ddev.site
3. If it doesn’t load immediately, wait a moment and refresh the page.
4. run "composer install" inside of the container