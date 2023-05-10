## Simple TYPO3 12 Setup with Bootstrap 5.3

* as Playground 

## Environment
* Webserver nginx/1.22.0
* TYPO3 12.4.1
* PHP 8.1.11
* MySQL 10.4.26-MariaDB-1:10.4.26+maria~ubu2004-log 

## Setup Infos
* kein jQuery

## Instance Defaults 
* Sass/Css mit Bootstrap 5.3
    - Sticky Footer Bootstraptemplate
* Backend Layouts 
    - Startpage - Main 
    - Landingpage - Main // mit Ankernavigation 
    - 2 Spalten - Links/Main 
* Container -> ersetzt Gridelements 
    - 3 Optionen -> 2 Spalten 
    - 5 Optionen -> 3 Spalten 
    - 1 Option -> 4 Spalten
* Content Elements mit fluid_styled_content  -> die css sind im Themepackage Sass includiert nicht als Typoscripttemplate!
* CkEditor5 einfach konfiguriert 
    - Blockstyles
    - ul ol with owen styles
    - Bootstrap Tabellen
    - Links/Buttons -> mit Icons ect.
    - unterschiedliche Fontsizes möglich
* Speaking Urls // Pages/News/Pagebrowser
* ToTop Button Global auf jeder Seite
* Bootstrap Icons - Sprite / svg oder per font
* XML Sitemap für Pages + News
* Newsverlinkung mit Pagebrowser möglich
* Navigationen mit Fluid u. Processors - nur simple Implementierungen // Processor, Fluid, Scss + Vanilla/ECMA  Javascript
    - Flyout / Responsive
    - Mega / Responsive
    - OffCanvas Navigation / Responsive
    - Overlap Menu // Nur Mobile muss mit Flyout od. Mega gekoppelt werden.
    - Submenu
    - Servicemenu -> z.B Kontakt, Sitemap, Home usw.
    - Footermenu
    - Breadcrumb - kann für einzelne Seite deaktiviert werden
    - Socialmedianavigation/Mask - kann mit Icons oder BT Icon Font verwendet werden
* Responsive Images mit Picture Tag + Crop Funktion + Lazyloading mit https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js
* Default Form Modul // Setup mit HTML5 Validation default und Bootstrap Flying Labels
* Cards/Mask - BT 5 + Images Crop Funktion
* Accordion/Mask - BT 5
* Tabs/Mask - BT 5
* Slider/Mask - BT 5
* Iconteaser/Mask - BT 5 // 2 Versionen Fonticons od. Images
* Address/Mask - BT 5
* Socialmedia/Mask - BT 5
* Lightbox - GLightbox mit ES6 - https://github.com/biati-digital/glightbox
* FeLogin / Templates mit fluid_styled_content
* Suche (ke_search) - Suchbox - List - Pagination 
* News - List - Detail - Pagination + Images Crop Funktion
* Redirects
* PageTs kann über Resources hinzugefügt werden.
 
# Systemlinks mit ddev
* Local-System: http://typo3-12.ddev.site/

## ToDoes/Probleme/Missing
* Benutzer und Gruppen anlegen
* Lightbox mit reinem Css ersetzen
* SVG Pfad zu sprite von fluid zu Typoscript auslagern??
* Youtubevideos - Einbindung DSGVO

## Default Extensions
* Container 2.1  
* Mask (individuelle CE) 8.1.1
* News 11.0
* Ke_Search dev-master
* c1-adaptive-images 21.0
* webp 5.0.1
* TYPO3 Console 8.0 / TYPO3 v12 -> wird über composer installiert -> "helhum/typo3-console": "^8.0",

## Noch fehlende Extensions TYPO3 12.4
* femanager // TYPO3 11.5
* dp_cookieconsent -> derzeit noch TYPO3 11.5 // Fluidtemplates bereits vorhanden

## Input/Infos Links
* https://github.com/paravista/custom_content_element
* update 8.7 -> 10.4 
    - http://www.mtug.de/fileadmin/files/2020/mtug_2020-07-07_TYPO3-Upgrade.pdf
* Migration Gridelements to Container da gibt es eine Ext: gridtocontainer bis TYPO3 10.4
* Lokale Entwicklungsumgebung mit ddev
    - https://typo3.com/blog/tutorial-get-a-local-typo3-v10-installation-with-no-effort?utm_campaign=TYPO3%20CMS%20X&utm_medium=TYPO3%20Blog&utm_source=Blog%20post%20-%20Tutorial%3A%20Get%20a%20Local%20TYPO3%20v10%20Installation%20With%20No%20Effort%21
* TYPO3 10.4 Siteexample -> https://github.com/o-ba/typo3v10_example_sitepackage/
* TYPO3 Demopage Code -> gitlab
    - https://gitlab.typo3.org/services/demo.typo3.org/site
* webp - https://www.dpool.com/blog/index.php/2020/07/10/typo3-in-15-minuten-webp-faehig-machen/
