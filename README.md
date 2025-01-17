# Grocery Shop Project

An advanced and feature-packed eCommerce grocery shop website designed to provide a seamless shopping experience, 
featuring an integrated admin panel for efficient management of products, categories, and orders.
After downloading, rename the folder to **web** for deployment.

## Features

### User Features
- **Browse Products:** View grocery items categorized for convenience.
- **Shopping Cart:** Add items to the cart and manage quantities.
- **Checkout:** Place orders with integrated payment options.
- **Order History:** View past orders with details.

### Admin Features
- **Product Management:** Add, edit, or delete products and categories.
- **Order Management:** Monitor order statuses.
- **View Reviews, Forms, and Payments:** Admin can review user feedback, submitted forms, and payment transactions.

### Additional Features
- **Cashfree API Integration:** Secure payment gateway for processing transactions.
- **Invoice Generation:** Automatically generate and download invoices using FPDF.
- **User Authentication:** Secure login system with session management.
- **Responsive Design:** Mobile-friendly layout using Bootstrap.

## Technologies Used

### Frontend
- HTML
- CSS
- JavaScript
- Bootstrap

### Backend
- PHP
- MySQL

### Libraries and APIs
- [Cashfree Payment Gateway](https://www.cashfree.com/): For secure online payments.
- [FPDF](http://www.fpdf.org/): For generating invoices in PDF format.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/Grocery-Shop-Project.git
   ```

2. Navigate to the project directory:
   ```bash
   cd Grocery-Shop-Project
   ```
3. Rename Folder
   -After downloading, rename the folder to **web**
   
4. Import the database:
   - Open **phpMyAdmin**.
   - Create a new database named (`adminpanel`).
   - Import the provided SQL file (`adminpanel.sql`) which is under the database folder.

4. Update configuration:
   - Add your Cashfree API credentials in the relevant files.

5. Access the website at `http://localhost/web`.

## Usage

### Admin Panel
- URL: `http://localhost/web/adminloginpanel`
- Default Credentials:
  - Username: `Himanshu`
  - Password: `12345`

### User Section
- Register or log in to start shopping.
- Add products to the cart, proceed to checkout, and make payments securely using Cashfree.
- Download invoices for placed orders.

## Screenshots



## Contributing

Contributions are welcome! Please fork the repository and create a pull request with your changes.


