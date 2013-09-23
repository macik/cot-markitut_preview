MarkItUp Custom preview
======================

Extension for Cotonti CMF. Adds addition button for preview in `markItUp` editor.

Description
-----------

Adds addition button for turning in preview window in `markItUp` editor.

Features
--------

* Adds addition `preview` button for markItup editor
* Enables auto refresh for `preview` window


Requirements
------------

Current version requires Cotonti Siena

### Compatibility

Works in Siena v0.9.14 (can work in previous versions but not tested).


### How extension works

Hides standard `preview` button and show custom one by special tag.


Install
-------

* Unpack, copy files to root folder of your site.
* Install via Admin → Extensions menu (`Administration panel → Extensions`)
* Checks setting in config (`Administration panel → Extensions → markitut_preview → Configuration`).

### Comments

To use addition button add tags
`PAGEEDIT_PREVIEW_BUTTON` or `PAGEADD_PREVIEW_BUTTON` in templates `page.edit.tpl` or `page.add.tpl`
respectively.

Licence
-------

Distributed under BSD license.


Author
------

[Andrey Matsovkin](https://github.com/macik/)

References
----------

* [Cotonti.com](http://Cotonti.com/) -- Home of Cotonti CMF
* [markitut_preview on GitHub](https://github.com/macik/cot-markitut_preview) -- Latest version of markitut_preview on GitHub