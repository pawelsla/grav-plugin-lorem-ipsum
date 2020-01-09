# Grav-plugin-lorem-ipsum

**The [Grav](http://getgrav.org/) plugin Lorem ipsum** allow to generate random text using Lorem ipsum text. This is useful when you want to fill specific page with alternative text instead blank space.

# Installation
## Manual installation
You should download this zip folder of this repository, then unzip it under /your/site/grav/user/plugins and rename this folder to `lorem-ipsum`.

# How to use

You should set `proccess: twig: true` in YAML settings. Then, we can set Twig variable in the page, wherever we want to publish *Lorem Ipsum* content.
Example:
```
{% set returnLoremText = lorem %}
{{ random(returnLoremText) }}
```

`random` function allows to return output a random paragraph of *Lorem Ipsum* text. So, this content might be changed with every refresh the page.

*Setting defaults*

At first, copy `user/plugins/snappygrav/lorem-ipsum.yaml` into `user/config/plugins/lorem-ipsum.yaml` and then you can do the modifications.

Variable **enabled (Default: true)** has two values: **true** or **false** and allow to set enabled or disabled this plugin(NOTE:: If you disable this plugin you should delete `{{ random(returnLoremText) }}` line code in every Twig or Markdown files it exists ). 

Every of the variables: `lorem1`, `lorem2`, `lorem3`, `lorem4`, `lorem5` contains a string built from specific paragraph of *Lorem Ipsum*. When you'll replace with another text, replaced text will be randomized instead of *Lorem Ipsum* fragment. 

