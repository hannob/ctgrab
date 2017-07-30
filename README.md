# ctgrab

These scripts are a proof of concept of an attack monitoring hosts from Certificate Transparency
for unprotected web installers.

background
==========

(Certificate Transparency: Hacking web applications before they are installed / Golem.de)[https://www.golem.de/news/certificate-transparency-hacking-web-applications-before-they-are-installed-1707-129172.html]

(Def Con 25: Abusing Certificate Transparency Logs / talk announcement)[https://defcon.org/html/defcon-25/dc-25-speakers.html#Böck]

scripts
=======

genctloglist
------------

This checks for currently active CT logs and writes them to ctloglist.txt.
That file is required for the other scripts

findwebinstaller
----------------

This checks a host for a vulnerable web installer.

ctgrab
------

This monitors CT logs for vulnerable web installers. It writes them to subdirectories
named after the log URLs and certificate numbers. Vulnerable installers are logged
in the file named webapps in the respective subdirectory.

wordpress hijack plugin
=======================

In the subdirectory hijack there is a wordpress plugin that will upload a PHP shell
that allows executing commands and reverting a wordpress installation.

It can be called with:

https://[hostname]/wp-content/plugins/hijack/shell.php?secret=defcon2017