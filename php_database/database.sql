CREATE DATABASE phptestdb;

USE phptestdb;

CREATE TABLE Lawyer(
    LID INT PRIMARY KEY IDENTITY,
    LName VARCHAR(55) NOT NULL,
    LAddress VARCHAR(55),
    Specialty VARCHAR(55)
);

INSERT INTO Lawyer(Lname, LAddress, Specialty)
VALUES('Ahmed', 'Dokki', 'Family Issues'),
      ('Mona', 'Zamalek', 'Financial'),
      ('Mohsen', 'Dokki', 'Family Issues');