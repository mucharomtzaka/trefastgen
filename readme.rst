========================== 
Apa itu Trefastgen ?
Trefastgen merupakan libraries php yang digunakan untuk membuat  CRUD generator sederhana. aplikasi ini dikembangkan dengan menggunakan bootstrap dan Codeigniter Versi 3* serta work flow HMVC.
=========== Trefastgen Versi.1.0=======
#pembuatan Core libraries Modgen generator

===.htaccess ====
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
