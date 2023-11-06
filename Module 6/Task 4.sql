SELECT c.name as 'Customer Name', sum(o.total_amount) as 'Total Purchase Amount'
FROM customers c
LEFT JOIN orders o 
ON c.id = o.customer_id
GROUP BY c.name 
ORDER BY sum(o.total_amount) DESC
LIMIT 5;