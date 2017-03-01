# docker-lemp-stack
Default docker-lemp-stack

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

