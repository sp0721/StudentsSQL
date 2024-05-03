-- Create Database
CREATE DATABASE IF NOT EXISTS CSCI4410;

-- Use the created database
USE CSCI4410;

-- Create Students table
CREATE TABLE IF NOT EXISTS Students (
    ID INT PRIMARY KEY,
    Name VARCHAR(50),
    BlueCard VARCHAR(20),
    Major VARCHAR(50),
    Class_Level VARCHAR(20),
    Email VARCHAR(100),
    Gender ENUM('Male', 'Female'),
    Age INT,
    Phone VARCHAR(20)
);

-- Insert data into the table
INSERT INTO Students (ID, Name, BlueCard, Major, Class_Level, Email, Gender, Age, Phone) VALUES
(1, 'John Doe', '01234567', 'Computer Science', 'Freshman', 'DoeJohn@mtsu.edu', 'Male', 19, '123-456-7890'),
(2, 'Jane Doe', '07654321', 'Mathematics', 'Senior', 'DoeJane@mtsu.edu', 'Female', 22, NULL),
(3, 'Mary Mia', '09872345', 'Music', 'Senior', 'MaryMia@mtsu.edu', 'Female', 22, '615-123-3344'),
(4, 'Michael Jame', '07234589', 'Business', 'Junior', 'MichaelJame@mtsu.edu', 'Male', 20, '615-232-1155'),
(5, 'Daniel Jack', '04135892', 'Computer Science', 'Sophomore', 'DanielJack@mtsu.edu', 'Male', 19, '615-333-2266'),
(6, 'Lucy Kate', '72358924', 'Computer Science', 'Freshman', 'LucyKate@mtsu.edu', 'Female', 18, '976-111-4567'),
(7, 'Lauren Spade', '05896294', 'Computer Science', 'Senior', 'LaurenSpade@mtsu.edu', 'Female', 22, '756-222-1478'),
(8, 'Emma Vivian', '67451144', 'Mathematics', 'Sophomore', 'EmmaVivian@mtsu.edu', 'Female', 20, '546-333-7459'),
(9, 'Ada Lane', '66655544', 'Art', 'Junior', 'AdaLane@mtsu.edu', 'Female', 19, '765-777-2255'),
(10, 'Alan Parker', '88833322', 'Business', 'Senior', 'AlanParker@mtsu.edu', 'Male', 24, '999-222-5588');
