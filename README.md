CSVCommander
=========

CSV file operations library.

  - Read CSV file to array.
  - Write array to CSV file.


Code Examples
--------------

```php
use Avin\CSVCommander\CSVCommander;

$csvCommander = new CSVCommander();
$fileName = __DIR__.'/my.csv';
$data = [
    ['foo1', 'foo2', 'foo3'],
    ['bar1', 'bar2', 'bar3'],
];

//Write array to CSV file
$result = $csvCommander->saveData($fileName, $data);

//Read CSV to array
$resultData = $csvCommander->getData($fileName);
```

## License

CSVCommander is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2015 [Avin Grape](https://github.com/avin/)