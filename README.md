# HOW TO USE

##Requirements:
- docker desktop : https://docs.docker.com/get-docker/

##Steps:
1. extract to a folder
2. enter project folder "outrich-demo-app" and run

```bash
./vendor/bin/sail up
```
3. run migrate fresh and seed the database
```bash
./vendor/bin/sail artisan migrate:fresh --seed
```
4. go to ```localhost``` to test the app.
