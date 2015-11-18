## Laravel Test on Azure

This is a test development. The main goal is to use Azure on full capacity with a Laravel 5 application

## OBJECTIVES

1) Create a Laravel 5 application and deploy to Azure through GitHub.

2) Create an SQL Database on Azure and connect to this database on Laravel 5 application.

3) Use Azure CDN for storing assets i.e. css/js files, images etc. For all CRUD operations as possible.

### PITFALLS

1) IIS Servers ignores .htaccess files. This causes your Laravel routes to fail. So you must include a web.config file to replace .htaccess. [See this link](http://blog.qbotx.com/basic-laravel-5-on-microsoft-azure-part-1/) for more explanation.


