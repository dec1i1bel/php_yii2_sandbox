# php_yii2_sandbox
Tested on local XAMPP server. To make it work, put files to the XAMPP htdocs. "http://hostname/" from links below will be path/to/directory/with/files/from/this/repository. For example, if you put the files to the local "xampp_path\htdocs\some\apps", than "http://hostname/" will meet "http://localhost/some/apps/". Also import database from the file in this repo

## apps\
  - __\basic__
    - saying "hello: http://hostname/apps/basic/web/index.php?r=site%2Fmy-say-hello&message=Hello+World
    - simple user comment input form (text fields and photo) with redirection to output: http://hostname/apps/basic/web/index.php?r=site%2Fmy-entry
    - editable list of items from database with pagination: http://hostname/apps/basic/web/index.php?r=country%2Findex
    - editable list of messages: http://hostname/apps/basic/web/index.php?r=messages%2Findex
    - uploading file form: http://hostname/apps/basic/web/index.php?r=site%2Fupload . only .png and .jpg are allowed