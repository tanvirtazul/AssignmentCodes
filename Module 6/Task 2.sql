SELECT p.name as 'Product Name', o.quantity as 'Quantity', (o.quantity*p.price) as 'Total Amount'
FROM order_items o 
LEFT JOIN products p
ON o.product_id = p.id
ORDER BY o.order_id ASC;