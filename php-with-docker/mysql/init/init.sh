#!/bin/bash

# create database
mysql -u root -proot -e "DROP DATABASE IF EXISTS test; CREATE DATABASE test;"

# create tables
mysql -u root -proot test < "/docker-entrypoint-initdb.d/sql/create-tables.sql"
