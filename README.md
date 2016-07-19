#Kirby Blog Plugin

`Kirby Blog` is a plugin for [Kirby CMS](https://getkirby.com) that provides custom content types for blog articles and archive pages. It uses the [`Kirby Page`](https://github.com/dweidner/kirby-page) plugin as a dependency which provides a common set of blueprint fields.

**NOTE:** This plugin is currently provided in a ALPHA-version as a proof of concept. The core functionality of this plugin might change until the final release.

## Requirements

- Kirby 2.3.1+
- PHP 5.5+
- [Selector](https://github.com/storypioneers/kirby-selector)
- [Kirby Page](https//github.com/dweidner/kirby-page)

## Installation

### Installation using the [Kirby CLI](https://github.com/getkirby/cli)

```sh
$ cd ~/Sites/kirby-example-project
$ kirby plugin:install storypioneers/kirby-selector
$ kirby plugin:install dweidner/kirby-page
$ kirby plugin:install dweidner/kirby-blog
```

### Manual Installation using Git

```sh
$ cd ~/Sites/kirby-example-project
$ git submodule add https://github.com/storypioneers/kirby-selector.git site/fields/selector
$ git submodule add https://github.com/dweidner/kirby-page.git site/plugins/page
$ git submodule add https://github.com/dweidner/kirby-blog.git site/plugins/blog
```

