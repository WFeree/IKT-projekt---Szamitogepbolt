A XAMPP-od mindeképp legyen PHP 8.1 vagy afölött!!
1. adatbázis:
------------
create database pcparts default character set utf8 collate utf8_hungarian_ci;
use pcparts;
create table components(
	id bigint primary key,
    name varchar(255) unique,
    details text,
    category ENUM('Motherboard','CPU','Memory','GPU','Drive','Display','Mouse','Keyboard'),
    price float(8,2),
    rating float(2,2)
);
-------------
2.
xampp control panel -> apache -> config -> php.ini -> keresd meg a sort, ahol ";extension=intl" van írva és töröld a sor elejéről a ";"-t

3. vhost
keresd meg a xampp/apache/conf/extra/httpd-vhosts.conf file-t és másold bele, hogy:
-----------
<VirtualHost *:80>
	ServerName loc.com
    	DocumentRoot "C:/Users/gal.attila.peter/Desktop/pcparts/project-root/public"
	<Directory C:/Users/gal.attila.peter/Desktop/pcparts/project-root/public>
		AllowOverride All
		Require all granted
	</Directory>
</VirtualHost>
-------------
itt cseréld ki az útvonalakat a project-root-on belüli public folderre, ami a te gépeden van!

4. hosts
mentj fájlkezelővel a C:\Windows\system32\drivers\etc mappába. itt jobb klikk a hosts fájlra, majd tulajdonságok->biztonság->szerkesztés->hozzáadás->add magad hozzá és engedélyezz minden jogosultságot.
nyisd meg a fájlt és írd a végére, hogy
127.0.0.1 (ide tab) loc.com

indítsd újra az apache-t
ha nem működik és nem éred el a böngészőben http://loc.com címen, írj rám