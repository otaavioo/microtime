## Microtime

#### Installing

   ```composer requere microtime/microtime```

#### Usage


```php
    // Instantiate the class
    $microtime = new \Microtime\Microtime();

    // code...
    sleep(1);

    // And then, get time elapsed
    echo $microtime->elapsed()->round();
```
