# Id Generator
php class used for create custom ids for database or you business logic for example gerate ids  like this :

```
 act-200116-0001
 2004-0001-005-2019
 20191016
 IT-004
 ```


## Create New Oject Of Class IdGenerator
Example : `act-2020716-000010`


```php

$id = new IdGenerator();

$id->chars("act")->date("Ymd")->number(10,6)->get()

```

```php

(new IdGenerator())->chars("act")->date("Ymd")->number(10,6)->get()
```

## Dates - IdGenerator
You can crete a section date for your id with any foramt you need 
Ymd // 20010310                        
his // 051618
jmy //100301
His //171618
Ymd // 20010310
His//171618

for more inforamtion you foramt :
```
https://www.php.net/manual/en/function.date.php
```
Example : `20010716 `  
```php

(new IdGenerator())->date("Ymd")->get()
```
Example : `051618`   
```php

(new IdGenerator())->date("his")->get()
```

Example : `20010716051618 `  
```php

(new IdGenerator())->date("YmdHis")->get()
```
Example : `20010716-051618`   
```php

(new IdGenerator())->date("Ymd-His")->get()
```

## chars - IdGenerator

You can crete a section characters for your id :

Example : `ENGL1201`   
```php

(new IdGenerator())->chars("ENGL1201")->get()
```
Example : `ENGL-1201`
```php

(new IdGenerator())->chars("ENGL1201")->number("1201")->get()
```

Example : `act-015-F1`   
```php

(new IdGenerator())->chars("act")->number("015")->chars("F1")->get()
```

## chars - IdGenerator
You can crete a section number for your id :
number => (number )
length => (length of digerts for your section id )   
side zero => (add zero diggets from left or right or both the length that equles the length parameter - length number) left:0 , right 1 ,both 2

Example : number => 10 length => 6  sideZero => ()

`act-10`  

```php
(new IdGenerator())->chars("act")->number("10")->get()
```

Example : number => 10 length => 6

`act-0000010` 

```php
(new IdGenerator())->chars("act")->number("10",6)->get()
```

Example : number => 10 length => 6

`act-1000000`

```php
(new IdGenerator())->chars("act")->number("10",6,1)->get()
```

`act-000001000000`

```php
(new IdGenerator())->chars("act")->number("10",6,2)->get()
```

## divider - IdGenerator
the diffault divider is `-`

`act_010_T1`

```php
(new IdGenerator())->chars("act")->number("10")->chars("T1")->divider("_")->get()
```
