
1) INSTALLATION WEB-SERVER

1.1)    PHP-fähigen Web-Server installieren. Apache-Derivate, wie XAMPP oder LAMPP bieten sich an.
1.2)    Konfiguration der Apache-Servers. 
        -   Für HTTP-Traffic des Apache-Servers wird der Port 9000 verwendet.
        -   Für HTTPS-Traffic des Apache-Servers wird der Port 4430 verwendet. 
        -   HTTPS wird derzeit noch nicht verwendet. Die Konfiguration des HTTPS-Ports soll eventuellen 
            Port-Kollisionen vorbeugen.
1.3) MySQL-Datenbank    --- TODO


------------------------------------------------------------------------------------------------

2) WICHTIGE HINWEISE

2.1)    Differenzierung zwischen DEV- und PROD-System. 
        -   Bei einem PROD-Systwem handelt es sich um das System des jeweiligen Benutzers, das 
            alltäglich verwendet wird.
        -   Für die Produktivsysteme soll sichergestellt werden, dass Updates ausgerollt werden 
            und dass mindestens die Produktivsysteme der jeweiligen Benutzer denselben 
            Versionsstand aufweisen.
        -   
