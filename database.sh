read -p "Enter the username you want to create: " username
read -p "Enter the password for $username: " password
read -p "Enter the database: " dbname
read -p "Insert Table name : " tablename
echo "In the next step enter the mysql root password"
sleep 1
mysql -u root -p <<EOF
create database $dbname;
CREATE USER '$username'@'localhost' IDENTIFIED BY '$password';
GRANT ALL PRIVILEGES ON $dbname.* TO '$username'@'localhost';
use $dbname;
create table $tablename(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, boxtype varchar(20), boxname varchar(20), value varchar(20));
EOF
echo "Thank you $username, you have created $dbname database with  table: $tablename "
