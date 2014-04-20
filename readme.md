# Dock
**Simple extendable Less framework with Bootstrap roots**

### Why

**Bootstrap is for Apps and not Websites.**

A common flaw with Frameworks is that they include the core source and people will ether make edits to it, or wont want to make modifications since they would complicate the upgrade process.

Updating the variables file is a great idea, until you update to the latest version and have to manually diff the two.


### Structure

The basic Dock folder structure looks like this.

* /extend
* /extend/style.less
* /extend/{ project files }
* /src
* **style.less**

You should always generate css from the files in the root folder.  In this eample we would compile **style.less**.

The `/src` folder contains the Dock source files and should not need to be modified. 

The `/extend` folder will contain all of the custom code for your project, as well as the `/extend/extend.less` file. Think of this as Object Oriented Less.

`/src/variable.less` contains the default values used in the framework, as long as you copy the exact same variable name to the `extend/extend.less` file you can effect the compiled code without creating inheritance.



### Why extending is better?

It prevents code duplication or inheritance overhead.

If Dock defaults a link to Blue, without using the Extending values, you might do something like this.

```
// dock.less
a:link {
	color: blue;
}

// style.less
a:link {
	color: green;
}

// Net result is a green link.
```

But if we use the `/extend/extend.less` and overwirte the default link color you would see generated css like this.


```
// dock.less
a:link {
	color: green;
}

// Net result is a green link.
```

### Setup

The idea here is that you are in control, so at a mimimum you need to import a few files.

The root `style.less` file would look something like this:

```
// Core Framework
@import "src/dock.less";

// Extended
@import "extend/mixins.less";
@import "extend/responsive.less";
@import "extend/ie.less";
@import "extend/style.less";
```


Thats it!


## Extras
Along with being a flexible micro framework, It also makes for a perfect Front end starting point when developing small sites or even CMS themes.

### Grunt:
http://gruntjs.com

* `sudo npm install -g grunt-cli`
* `npm install`
* `grunt watch`

### Bower:
http://bower.io/

* `bower install`

### Acknowledgments

This included a watered down version of Bootstrap 3.1 http://getbootstrap.com, Some Mixins from http://getpreboot.com and 
