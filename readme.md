# Dock
**Simple extendable Less framework with Bootstrap roots**

### Why

**Bootstrap is for Apps and not Websites.**

A common flaw with Frameworks is that they include the core source and people don't want to make modifications to it since they would complicate the upgrade process.

Updating the variables file is a great idea, until you update to the latest version and have to manually diff the two.


### Structure

The basic less structure looks like this.

* /extend
* /extend/extend
* /extend/style.less
* /extend/{ project files }
* /src
* **responsive.less**	
* **style.less**

You should always generate css from the files in the root folder.

The `/src` folder contains Docks source files and should not need to be edited. 

The `/extend` folder contains all of the custom code for your project, as well as the `extend.less` file. Think of this as Object Oriented Less.

`variable.less` contains the default values, as long as you copy the exact same variable name to the `extend.less` file you can effect the core source.



### Why you should extend

This prevents code duplication for cascading effects.

Unless you edit the source directly you would see something like this in the generated css.

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

By using `extend.less` and overwirting the default link color you would see generated css like this.


```
// dock.less
a:link {
	color: green;
}

// Net result is a green link.
```

### Setup

Some people will generate a single file containing the style and media queries. You are also free to generate these separately as well.


The root `style.less` file would look something like this:

```
// Core Framework
@import "src/dock";

// Extended
@import "extend/ie";
@import "extend/style";
```

If you like keeping your responsive code in a file of its own then make `responsive.less`

```
@import "src/variables";
@import "extend/extend";
@import "src/grid";
@import "src/mixins";
@import "src/responsive";

@import "extend/responsive";
```

Thats it!


The files in your `/extend` directory will be where you store the project files.

I chose to use `/extend/style.less`


### Install:

* `sudo npm install -g grunt-cli`
* `npm install`
* `grunt watch`


### Acknowledgments

This included a watered down version of Bootstrap 2.3.2 http://getbootstrap.com, Some Mixins from http://getpreboot.com and 
