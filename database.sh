read -p "Enter the username: " username
read -p "Enter the database: " database
read -p "Insert Table name : " tablename
mysql -u $username -p $database<<EOF 
create table $tablename(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, boxtype varchar(20), boxname varchar(20), value varchar(20));
EOF
echo "Thank you $username, you have created tables: $tablename "
