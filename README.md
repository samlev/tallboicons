# Blade Tallboicons
Basic [Bladeicon](https://github.com/blade-ui-kit/blade-icons) wrapper package to allow access to
[Tallboy](https://github.com/samlev/tallboy) icons.

For a full list of available icons see the [SVG directory](/resources/svg).

The icons in this package are a very small set of icons for use as default icons for the Tallboy package. There is
almost no reason that you would need (or want) to use this package outside of that context. In fact there's a very good
chance that you don't want to use these icons _within_ that context.

They are not very good icons.

## Installation
```bash
composer require samlev/tallboicons
```

## Usage
Icons can be used as a self-closing Blade component or with the `@svg()` helper, which will rendered an inline SVG:
```blade
<x-tallboicon-alert />
@svg('tallboicon-edit')
```
View the blade icons [usage documentation](https://github.com/blade-ui-kit/blade-icons/#usage) for more information.

## Contributing
There is almost no chance that you will need to contribute to this package, but if you do, please feel free to open a 
PR. Please don't request additional icons unless it is in aid of adding a component to the Tallboy package. Even then,
please evaluate if this package actually needs a new icon or not.

### Testing
You can test any modifications to this package with:
```bash
composer test
```
You can attempt to automatically fix any linting errors with:
```bash
composer lint:fix
```
