SELECT c.name as 'Customer Name', count(o.customer_id) as 'Number of Orders', c.email as 'Email', c.location as 'Location' 
FROM customers c 
LEFT JOIN orders o
ON c.id = o.customer_id
GROUP BY c.id
ORDER BY count(o.customer_id) DESC;