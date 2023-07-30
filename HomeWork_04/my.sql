-- create
CREATE TABLE employee (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age TEXT NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO employee (name, age, address) VALUES ('Петр', '24', 'Москва');
INSERT INTO employee (name, age, address) VALUES ('Мария', '20', 'Тула');
INSERT INTO employee (name, age, address) VALUES ('Леон', '16', 'Москва');
INSERT INTO employee (name, age, address) VALUES ('Дмитрий', '19', 'Санкт-Петербург');
INSERT INTO employee (name, age, address) VALUES ('Джон', '30', 'Санкт-Петербург');
INSERT INTO employee (name, age, address) VALUES ('Виктория', '30', 'Москва');
INSERT INTO employee (name, age, address) VALUES ('Полина', '20', 'Владивосток');
INSERT INTO employee (name, age, address) VALUES ('Дина', '18', 'Москва');
INSERT INTO employee (name, age, address) VALUES ('Павел', '20', 'Москва');

-- fetch 
SELECT name FROM EMPLOYEE WHERE address = 'Москва' AND age >= 18 AND age < 30;