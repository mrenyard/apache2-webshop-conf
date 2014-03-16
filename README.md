Apache2 WebShop Configuration
=============================

Apache2 WebShop Configuration. Optimized webserver setup.
 Includes such features as:
 - Maximised Concurent Server Connections
 - Development Mode Switching
     including specialist scratch files (css/html)
     firePHP output as standard
 - Live Server Performance Advancements
 - with PhpDocumentor and PHPUnit

Part of: WebShop TM Pro (Beta v0.1)
===================================

Feature List
------------

Maximised Concurent Server&nbsp;Connections
-------------------------------------------

All browsers set a maximun concurent connections limit (at varying levels),
following <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec8.html#sec8.1.4"
>Section&nbsp;8.1.4 of the HTTP/1.1&nbsp;RFC</a>. By <q cite=
"http://www.stevesouders.com/blog/2008/03/20/roundup-on-parallel-connections/#more-9"
>using multiple domain names, such as [style].mydomain.com, [func].mydomain.com,
[media].mydomain.com, etc., &hellip;[it]&hellip; allows &hellip;[us]&hellip; to
achieve a multiple of the per server connection limit.</q> (<a href=
"http://www.stevesouders.com/">Steve&nbsp;Souders</a>).

This also alows us to optimize each sub-domain for its particular job and is used
extensivaly in many of the subsaquantly mentiond&nbsp;features.

Development&nbsp;Mode Switching
-------------------------------

By using a <em>dev.</em> sub-domain we can switch between differant views of
the same live website, automaticaly toggaling between debuging features and
optimized performance. Working in this way also enables us to layer improvments
onto the live site without interfering with its current state until each
change&nbsp;is&nbsp;vetted.

---Scratch List---

The Scratch List file (<em>list.scratch</em>) is provided as the
place to list all current Scratch Template and Scratch CSS files and is
the default root view when in Development Mode. This gives one easy
stating point from which developers can record, and clients view,
evolving ideas for the sites development.

---Scratch Template Files---

Scratch Template Files (files with a <em>.scratch</em> extension)
provid an effective method for testing new markup alone side all the
other website paraphenalia (i.e. its style and function), whilst being
inacccesible through the live site.

---Needs Rebuild Warning Notification---

If changes have been made that effect the live site without building

...
