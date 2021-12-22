CREATE DATABASE juridico_testing;
CREATE USER 'juridico_testing'@'%' IDENTIFIED WITH mysql_native_password BY 'juridico_testing';
GRANT ALL PRIVILEGES ON juridico_testing.* TO 'juridico_testing'@'%';
