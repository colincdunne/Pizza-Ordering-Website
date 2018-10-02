# Pizza-Ordering-Website

Very simple website for ordering pizza online. Choose toppings, total changes based on what is chosen.
The form is a required field, email is error checked so that an @ symbol is present. Phone number is checked that it is the correct length and not fake.
The results are then posted using POST to a php page.
On submission of the form, the form is sent to an SQL database of order. A receipt is displayed to the user for the purchase and the total cost.
The order can also be updated using the order ID on the receipt page. Once updated, the order is changed in the database and the receipt updated and displayed with the same order ID.
