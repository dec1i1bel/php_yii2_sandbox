__CURRENT WORK :: create comments block:__
- entry form in @app\views\my-entry.php. look at ActiveForm options in yii2 api docs
- page with comments from @app\views\my-entry-confirm.php. comments are taken from db

__next__
- publish result at my hosting

# php_yii2_sandbox
Tested on local XAMPP server. To make it work, please put files to the XAMPP htdocs. "http://hostname/" from links below will be path/to/directory/with/files/from/this/repository. For example, if you put the files to the local "xampp_path\htdocs\some\apps", than "http://hostname/" will meet "http://localhost/some/apps/".

### apps\
  - __\basic__
    - saying "hello: http://hostname/apps/basic/web/index.php?r=site%2Fmy-say-hello&message=Hello+World
    - simple form: http://hostname/apps/basic/web/index.php?r=site%2Fmy-entry
    - _generated with Gii_
    - editable list of items from database with pagination: http://hostname/apps/basic/web/index.php?r=country%2Findex
    - editable list of messages: http://hostname/apps/basic/web/index.php?r=messages%2Findex