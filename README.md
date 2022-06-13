# wp-better-notice

Simple Syntax for creating a WordPress notice.

## Install
You'll need to use Composer autoloder.
This package use PSR-4.
```$
composer require zarei-dev/wp-better-notice
```

## Exapmels
```php
BetterNotice::Success( 'Success message' );
BetterNotice::Error( 'Error message' );
BetterNotice::Warning( 'Warning message' );
BetterNotice::Info( 'Info message' );
```
```php
if ( email_validation() ) {
  BetterNotice::Success( 'Prodile updated.' );
} else {
  BetterNotice::Error( 'You should enter a valid email' );
}
```
