# Replace

Simple string replacements.


## Installation

Place `pi.replace.php` in `_add-ons/replace/`.


## Usage

Single replacements:

```
{{ replace find="Jason" replace="Jack" }}
  Hello there Jason
{{ /replace }}

=> Hello there Jack
```


Multiple replacements:

```
{{ replace find="Hello|Jason" replace="Hi|Jack" }}

=> Hi there Jack
```
