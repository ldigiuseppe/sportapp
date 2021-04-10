## Sportman app

### Requerimients:

    - Docker installed

### Steps:

1. Clone the project
2. Create environment file" `mv .env.example .env`
3. Build the docker containers `docker-compose up -d`
4. Connet to the container `docker exec -it sportsapp-php bash`
5. Install dependencies from inside the container`composer install`
6. Go to `http://localhost/dev/build` to create th DB
7. Migrate initial data `http://localhost/dev/tasks/InitialMigrationTask` Only once!
