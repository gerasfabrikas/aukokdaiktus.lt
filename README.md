# aukokdaiktus.lt
Aukokdaiktus.lt – visiems Lietuvos žmonėms atviras tinklas, kuris jungia galinčius suteikti paramą daiktais ar paslaugomis ir tuos, kuriems ji reikalinga.

# Install
- Install Docker (https://docs.docker.com/install/), follow "Post-installation steps" (if found at the end of installation instructions)
- Install Docker Compose (https://docs.docker.com/compose/install/)
- `cd` to the project dir (the dir with this `README.md`)
- `docker-compose up -d --build` - to build and wake up the containers: app (nginx, php5-fpm), mysql. 
- `docker-compose exec app sudo service php5-fpm restart` - to start php5-fpm (aka. fixing the bug)
- Add the line to your `hosts` file (e.g. `/etc/hosts` if linux, `C:\Windows\System32\drivers\etc\hosts` if Windows): `127.0.0.1	www.aukokdaiktus.test`
- Dump DB from the live server:
    - Hostname: `pma.gerasfabrikas.lt`
    - Port: `3306`
    - User: (your username, you should know it)
    - Password: (your password, you should know it)
    - Command line example (not tested): 
        - `mysqldump -P 3306 -h pma.gerasfabrikas.lt -u [username] -p[password] pdarbais > pdarbais_backup.sql`
- Load the dump to the local mysql server running on Docker:
    - Hostname: `localhost`
    - Port: `13306`
    - Username: `pdarbais`
    - Password: `pdarbais`
    - Command line example (not tested):
        - Place the dump file (`pdarbais_backup.sql`) somewhere into the code dir (e.g. into the same dir where this `README.md` is) 
        - `docker-compose exec mysql bash` - connect to the mysql container
        - `mysql -P 3306 -u pdarbais -ppdarbais -h localhost pdarbais < pdarbais_backup.sql`
        - `exit`
- Open the web: [http://www.aukokdaiktus.test:8080/](http://www.aukokdaiktus.test:8080/)
- Open the [MailHog](https://github.com/mailhog/MailHog) (mail catcher) local interface: [http://www.aukokdaiktus.test:18025/](http://www.aukokdaiktus.test:18025/)
    - Send emails to mailcatcher:1025 if within containers
    - Send emails to aukokdaiktus.test:11025 if outside containers (from the host) (this one is not tested yet, may require adjusting hosts file of the host system)


# Use it later (starting working on the project)
- `cd` to the project dir (the dir with this `README.md`)
- `docker-compose up -d` - will wake up all the containers.
- `docker-compose exec app sudo service php5-fpm restart` - to start php5-fpm (aka. fixing the bug)

# Use it later (finishing working on the project)
- `cd` to the project dir (the dir with this `README.md`)
- `docker-compose stop` - will stop all the containers.


