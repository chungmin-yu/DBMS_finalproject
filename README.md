# DBMS_final_project
* Advanced 功能 (insert, update, delete功能)

  * username=root
  * password=dbms2021
##

## 使用環境: Ubuntu 20.04 mysql8.0.23 PHP7.4.3

```
sudo apt-get update
```
###### 安裝Mysql
```
sudo apt-get install mysql-server
sudo mysql -u root -p
```
###### 檢查版本
```
mysql>SELECT VERSION();
```
###### 更改root密碼為password(php connect mysql需要)
```
mysql>ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';
mysql> FLUSH PRIVILEGES;
```
###### 修改local_infle(解決匯入sql時的錯誤)
```
mysql>SET global local_infile=true;
mysql>SHOW global variables LIKE 'local_infile';
mysql>QUIT
sudo mysql --local_infile=1 -u root
```
###### 建立 database
```
mysql>CREATE DATABASE PROJECT;
mysql>USE PROJECT;
mysql>SOURCE PROJECT.sql
mysql>QUIT
```
###### 安裝apache
```
sudo apt install apache2
```
###### 檢查防火牆是否允許 Apache 存取
```
sudo ufw app list
```
```
Output:
Available applications:
  Apache
  Apache Full
  Apache Secure
  OpenSSH
```
```
sudo apt install php libapache2-mod-php php-mysql
sudo vim /etc/apache2/mods-enabled/dir.conf
```
###### 修改順序為
```
<IfModule mod_dir.c>
    DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
</IfModule>
```
###### 安裝額外PHP常用套件
```
sudo apt install php-cli php-curl php-mbstring php-gd php-json php-xml php-pear php7.4-common php7.4-dba php7.4-mysql php-apcu php-bcmath php-bz2 php-date php-fpm php-snmp php-intl php-date php-imap
```
###### 重啟apache
```
sudo systemctl restart apache2
```
###### 下載檔案
```
git clone https://github.com/LockingChiao/DBMS_final_project
cd /var/www/html
mkdir <dirname>
```
###### 回到clone位置
```
cp -rf finalproject/* /var/www/html/<dirname>/
```
###### 打開網頁
```
輸入127.0.0.1/<dirname>/index.html便可執行了
```

安裝LAMP參考
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04
