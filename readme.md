# CodePen extension for Kirby 2 (fork of [Kirbytext CodePen tag](https://gist.github.com/ClementRoy/5024929) by ClementRoy)

This extension for Kirby 2 enables you to easily embed CodePen ‘Pens’ into your sites pages.

Your content can be made with Kirby and ❤ and CodePen!

```
(codepen: http://codepen.io/chriscoyier/pen/oqHlh/)
```
Kirby 2 allows Kirbytext (Kirbys custom implementation of Mark Down) to be extended with custom ‘Kirbytags’. _[More about Kirbytags](http://getkirby.com/docs/advanced/kirbytext)_.

_Sorry, not backwards compatible with Kirby 1. [Kirbytext CodePen tag](https://gist.github.com/ClementRoy/5024929) by ClementRoy is compatible._

## Installation

Place `codepen.php` in your `/site/tags/` folder, or create a ‘tags’ folder inside your site folder if one is not there.

## Usage

Now in your content text files you can now use the new codepen tag:

```
(codepen: http://codepen.io/chriscoyier/pen/oqHlh/)
```
This will embed the specified Pen using a default height and styled with the standard CodePen embed theme.

### Parameters

You can supply additional parameters in the tag to override the _height_ (500 = 500px height embed) or _type_ (html, css result displayed).

```
(codepen: http://codepen.io/chriscoyier/pen/oqHlh/ height: 250 type: html)
```
You can specify an additional class which will apply to the CodePen iframe.

```
(codepen: http://codepen.io/chriscoyier/pen/oqHlh/ class: picked-pen)
```
This should be considered for adding custom styles to specific Pens. _To apply a theme to all Pens, see next section._

### Default Theme

_**This is a more advanced option and not essential, CodePen embeds will use the default CodePen theme style by default.**_

If you are a CodePen user, pen themes enable you to [create a theme style](http://blog.codepen.io/2013/07/23/the-new-embed-builder-customize-every-aspect/) for your embedded Pens. 

_**Note**: Changing the default theme requires editing codepen.php file directly_

To change from the default CodePen theme to your personal embed theme, open `site/tags/codepen.php` and edit the `$theme = '';` value, to your theme (data-theme-id) value.

You can find your Theme ID in the standard embed code from the ‘Share’ option in any Pen. Look for the `data-theme-id`  value.

_**Note:** Amending this value will change the theme of ALL your CodePen embeds using this Kirby extension._

****

**Update** Updated to include new support for CodePen iframe classes see [Parameters](#parameters) section or read about [the class feature](http://blog.codepen.io/2014/10/31/add-class-name-embed-iframe/).