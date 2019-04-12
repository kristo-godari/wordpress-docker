# Wordpress 5.1.1 + Docker + Automated backups


## Requirements
1. Docker installed. 
Follow this guide to install docker: https://docs.docker.com/install/ 
2. Docker compose installed.  Follow this guide to install docker compose: https://docs.docker.com/compose/install/


## Installation
1. Clone the project
2. Move to project directory `cd wordpress-docker`
3. Start containers: `./tools/stop-and-start.sh `
4. Verify containers are up with `docker ps`
5. Open browser at http://localhost/ for the homepage
6. Login to backend: http://localhost/wp-login.php. username=**test** password=**test**
 

