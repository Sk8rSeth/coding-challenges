/*
Please, write your SQL query here.
*/
SELECT *, count('first_name') as 'First Names', count('last_name') as 'Last Names'
FROM customers
GROUP BY first_name, last_name;
