# 重點指令摘要

## 建立資料庫
- CREATE database database_name
- USE database_name

## 建立資料表-範例
- CREATE TABLE friends
- (
-   fid int auto_increment not null primary key,
-   cname char(10) null,
-   ename varchar(30) null,
-   tel varchar(30) null
- );

## 修改資料表結構-範例
- ALTER table table_name
    ### 新增資料欄位
    - ADD email varchar(30) default 'someone@somewhere.com'
    ### 修改資料欄位屬性
    - MODIFY email varchar(40) default 'who@where.com'
    ### 修改資料欄位屬性
    - ALTER city SET DEFAULT "Taipei";
    ### 刪除資料欄位
    - DROP column email

## 新增資料到資料表-範例
- INSERT INTO Shippers
    - (ShipperID, CompanyName, Phone)
    - values (4, 'Never Lose', '(040) 0048126')

## 修改資料-範例
- UPDATE Shippers
- SET CompanyName = 'Never Lost', 
    - Phone = '(123) 1234567'
    - where ShipperID = 4

## 刪除資料-範例
- DELETE FROM Shippers
    - where ShipperID = 4

## 設定SQL模式
- SET sql_mode = 'traditional'
- SET sql_mode = ''

## 索引
- index 

## 設定字元集
- SHOW VARIABLES LIKE 'char%'
- SET NAME big5

## 查看資料庫狀態
- STATUS ；

## 踢掉其他使用者
- KILL id ;

## 顯示資料庫、資料表
- SHOW DATABASES ；

## 顯示資料表
- DESCRIBE table ;
- 或者簡寫 DESC table ;

## constraint 

## EXPORT資料庫
- cd /applications/mamp/library/bin
- ./mysqldump -u root -p root --databases northwind > /Users/cy0001210/Documents/test.txt

## 筆記
- https://hackmd.io/GwtRN12RSJKxt5qFAfmjgg?both