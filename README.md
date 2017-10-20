# MarkupAutoStylesheets

Gather stylesheets and automatically add CSS links to the HTML document just after the page render. Three positions are available: before, after and the default position inbetween.
Define ids to overwrite already defined stylesheet urls with the same id.

### Methods

`::add($url, $id, $options)`

Add / append stylesheet to default 'middle' position.

`::addBefore($url, $id, $options)`

Add / append stylesheet to 'before' position.

`::addAfter($url, $id, $options)`

Add / append stylesheet to 'before' position.

`::getMergedArray(boolean $retainAutoMarkup)`

get the array of all stylesheets combined. By default it will deactivate automatic markup generation.
Set `$retainAutoMarkup` to true to retain automatic markup generation.

### Todo

- support Stylus <3
- make protected stylesheets work
- prependBefore(), prepend(), prependAfter(), append() alias
- support LESS like AIOM
