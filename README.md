# ReactPHP Promises 

This project is superseded by the promise support in the current version of RxPHP v2.

Since the interop promise spec hasn't been adopted by any of the popular async php project, we've reverted back to defaulting to React promises in RxPHP v2.

~~Provides RxPHP 2 support for ReactPHP's [Promises](https://github.com/reactphp/promise)~~

~~RxPHP v2 will only support [async-interop promises](https://github.com/async-interop/promise) by default.  This project restores the ReactPHP Promise support found in RxPHP v1.~~

## Usage

### From Observable
```php
    
  $observable = \Rx\Observable::of(42);
  $promise = \Rx\React\Promise::fromObservable($observable);
  
  $promise->then(function ($value) {
      echo "Value {$value}\n";
  });
    
```

### To Observable
```php
    
  $promise = \Rx\React\Promise::resolved(42);
  $observable = \Rx\React\Promise::toObservable($promise);
  
  $observable->subscribe(function ($value) {
      echo "Value {$value}\n";
  });
    
```
