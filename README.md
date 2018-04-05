# docker-lemp-stack
Default docker-lemp-stack

## Installation
```
$ sudo apt install git curl
```

## Deploy
```
$ git clone https://github.com/Soivi/docker-lemp-stack
$ cd docker-lemp-stack/
```

```
$ sudo docker-compose -f docker-compose.lemp.yaml up -d
```

```
$ curl localhost/index.html

<!DOCTYPE HTML>
<html>
    <body>
         <p>Hello World!</p>
    </body>
</html>
```

```
$ curl localhost/index.php

<!DOCTYPE html>
<html>
    <body>
        <h1>My first PHP page</h1>
        <p>Hello World!</p>
    </body>
</html>
```

```
$ curl localhost/dbtest.php

works
```

```
$ sudo docker-compose -f docker-compose.lemp.yaml stop
```

## Useful commands

Stop docker-compose file containers
```
$ sudo docker-compose -f <filename>.yaml stop
```
Delete docker-compose file containers and volumes
```
$ sudo docker-compose -f <filename>.yaml rm -v
```
Stop all containers
```
$ sudo docker stop $(sudo docker ps -a -q)
```
Delete all containers and volumes
```
$ sudo docker rm -v $(sudo docker ps -a -q)
```
Delete all images
```
$ sudo docker rmi $(sudo docker images -q)
```
