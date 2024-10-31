=== Comments-RBA ===
Contributors: Paolo Bergantino, Devin Castro
Donate link: /
Tags: comments
Requires at least: 2.0.2
Tested up to: 2.5
Stable tag: trunk

This plugin gives wordpress the ability to strip comment text of breaks, p's, nl's, and white spaces before and after comment text before being written to the database.

== Description ==

This plugin removes html line breaks, nl's, p's, and whitespace before and after comment text. It's primary purpose is to stop those annoying spammers that like spacing their comments to get noticed.



Example:


<br/><br/><br/><br/>

Some text.

<br/><br/><br/><br/>



Will be filtered and returned like this:



Some text
