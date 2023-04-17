## This stuff can you found in typo3starter_package

## Environment
* Webserver nginx/1.20.0
* TYPO3 10.4.20
* PHP 7.4.16
* MySQL MySQL 5.5.5-10.3.28-MariaDB-1:10.3.28+maria~focal-log 

## Setup Infos
* kein jQuery
## Instance Defaults 
* Sass/Css mit Bootstrap 5.01
* Layouttemplates - !! - Es müssen jeweils kleine Änderungen vorgenommen werden. - !!
    - Flyoutmenu Mobile Overlap
    - Off Canvas - nicht mit Bootstrap 5 Canvas!
    - Parallax
    - Sticky Footer
* Backend Layouts 
    - Startpage - Main 
    - Landingpage - Main // mit Ankernavigation
    - Fullscreen - Main 
    - 2 Spalten - Links/Main 
    - 2 Spalten - Main/Rechts 
    - 3 Spalten - Links/Main/Rechts 
    - Parallax
* Container -> ersetzt Gridelements 
    - 3 Optionen -> 2 Spalten 
    - 5 Optionen -> 3 Spalten 
    - 1 Option -> 4 Spalten
* Content Elements mit fluid_styled_content  -> die css sind im Themepackage Sass includiert nicht als Typoscripttemplate!
* CkEditor einfach konfiguriert
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
* Navigationen mit Fluid u. Processors - nur simple Implementierungen // Processor, Fluid, Scss + Vanilla/ECMA Javascript
    - Flyout / Responsive
    - Mega / Responsive
    - OffCanvas Navigation / Responsive
    - Overlap Menu // Nur Mobile muss mit Flyout od. Mega gekoppelt werden.
    - Submenu
    - Servicemenu -> z.B Kontakt, Sitemap, Home usw.
    - Footermenu
    - Languagemenu mit Textlabels
    - Languagemenu mit TYPO3 Core Icons
    - Breadcrumb - kann für einzelne Seite deaktiviert werden
    - Socialmedianavigation/Mask - kann mit Icons oder BT Icon Font verwendet werden
* Responsive Images mit Picture Tag/Crop Funktion und lazyloading mit https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js
* Default Form Modul // Setup mit HTML5 Validation default und Bootstrap Flying Labels
* Cards/Mask - BT 5 + Images Crop Funktion
* Flipcards/Mask
* Accordion/Mask - BT 5
* Tabs/Mask - BT 5
* Slider/Mask - BT 5
* Youtubevideo/Mask - BT 5
* Iconteaser/Mask - BT 5 // 2 Versionen Fonticons od. Images
* Logocarousel/Mask - Vanilla JS https://splidejs.com/
* Cardscarousel/Mask - Vanilla JS https://splidejs.com/
* Thumbnailcarousel/Mask - Vanilla JS https://splidejs.com/
* Lightbox - GLightbox mit ES6 - https://github.com/biati-digital/glightbox
* FeLogin / Templates mit fluid_styled_content
* Suche - Suchbox - List - Pagination 
* News - List - Detail - Pagination + Images Crop Funktion
* Redirects
* Address/Mask - BT 5
* Cookie Consent implementiert nicht configuriert // dp_cookieconsent -> kein jquery
* PageTs kann über Resources hinzugefügt werden.
* Flexform Processor liegt unter Classes/DataProcessing -> in TYPO3 11 per default included
* Luxletter 
    - Personalisierung über fe_user
    - Newsletter Preview Local
    - Newsletter kann einfach im Backend zusammengebaut werden (PID = 66) 
    - Abmelden link
    - Versand über Scheduler / kann auch mit Cronjob angestoßen werden
    - Versand getestet mit MailHog
    - PROBLEME gibt es mit den Grafiken (Socialmediaicon - Images über Contentelemente) falls eine EXT. für Responsive Images Installiert ist.
    - Mehrere E-Mail Clients wurden noch nicht getestet. 
 
# Systemlinks mit ddev
* Local-System: http://typo3setup-bt.ddev.site/

## ToDoes/Probleme
* Maskelemnte in Suche mit aufnehmen
* Nicht mit 
* TX FORMS muss überarbeitet werden !!!!! Dringend - Yaml stimmt so nicht mehr
* Sollten verschiedene Layouts in einer Instance verwendet werden müssten die Navigations Sass einzeln compiliert werden.
* LL Files BE überarbeiten + Locallang Builder richtig konfigurieren.
* Constants überarbeiten - evt. in die config.yaml verschieben
* Benutzer und Gruppen anlegen
* Seitenvorlagen in EXT. Mask per Pagets. deaktivieren?
* Lightbox mit reinem Css ersetzen
* SVG Pfad zu sprite von fluid zu Typoscript auslagern??
* CkEditor - ul ol Styling - Iconstyling müsste noch implementiert werden
* Cards - Komplettverlinkung braucht ein <a> Tag - wird ohne Btn nicht erzeugt.
* Cards müsstens eigens erstellt werden um dann unterschiedlich z.B in Bootstrap Card Groups oder in einem 
  Cardscarousel angezeigt bzw. mehrfach verwendet werden kann.
* Youtubevideos - Einbindung DSGVO
* Tabs/Pills - in tab-pane paddings + margins optimieren
* Evaluieren wie Form + Login innerhalb von Tabs + Accordion funktionieren // Accordion + Tabs werden bei Fehler geschlossen
* Tut für Formulare
* Tut für die Verwendung des CkEditors 
* ke_search Language immer noch xml nicht xlf 
* pwa_manifest mit https durch testen, Serviceworker wird noch nicht gefunden.
* EXT: c1_adaptive_images testen.
## Default Extensions
* Container 1.3 //TYPO3 v11 
* Mask (individuelle CE) 7.0.16 / TYPO3 v11
* News 8.6
* Ke_Search 3.8
* SMS Responsive Images 2.0 / TYPO3 v11
* Cookie Consent 11.0 // dp_cookieconsent 11.0 / TYPO3 v11
* Widgets for Dashborad 1.2.0 / TYPO3 v11
* TYPO3 Console 6.4 / TYPO3 v11 -> wird über composer installiert -> "helhum/typo3-console": "^6.4.0",
* datamints Locallang Builder 1.0.13 / -> nur installiert
* luxletter 4.1
* pwa_manifest 1.0 // noch nicht ganz ausgetestet da https local mit certificate noch fehlt

## Noch fehlende Extensions TYPO3 10.4
* femanager // PHP 7.3 ???

## Features/Infos - Nice to have
* Lokale Entwicklungsumgebung mit ddev
    - https://typo3.com/blog/tutorial-get-a-local-typo3-v10-installation-with-no-effort?utm_campaign=TYPO3%20CMS%20X&utm_medium=TYPO3%20Blog&utm_source=Blog%20post%20-%20Tutorial%3A%20Get%20a%20Local%20TYPO3%20v10%20Installation%20With%20No%20Effort%21
* BREAKING CHANGE Neue Pagination für EXT ke_search, news -> https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/Pagination/Index.html
    - https://github.com/georgringer/numbered_pagination -> neue Extension für Pagination
* TYPO3 10.4 Siteexample -> https://github.com/o-ba/typo3v10_example_sitepackage/
* Webpack examples
    - https://github.com/sabbelasichon/typo3_encore
    - https://github.com/sabbelasichon/typo3_encore_presentation/tree/mtug-presentation-june-2020
    - https://github.com/plan2net/webp
* Fontloader?
* TYPO3 Demopage Code -> gitlab
    - https://gitlab.typo3.org/services/demo.typo3.org/site
* webp - https://www.dpool.com/blog/index.php/2020/07/10/typo3-in-15-minuten-webp-faehig-machen/


## Input/Infos
* https://github.com/paravista/custom_content_element
* update 8.7 -> 10.4 
    - http://www.mtug.de/fileadmin/files/2020/mtug_2020-07-07_TYPO3-Upgrade.pdf
* Migration Gridelements to Container da gibt es eine Ext: gridtocontainer bis TYPO3 10.4