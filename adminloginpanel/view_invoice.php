<?php
require('fpdf.php'); // Include FPDF library

include('dbconnect.php');

// Fetch order ID from URL
$order_id = $_GET['order_id'];

// Fetch order details from `order_manager`
$sql = "SELECT * FROM `order_manager` WHERE `Order_id` = '$order_id'";
$result = mysqli_query($conn, $sql);
$order = mysqli_fetch_assoc($result);

// Fetch payment ID from `payment` table
// Fetch payment ID from `payment` table with "Order_" prefix
$payment_sql = "SELECT reference_id FROM `payment` WHERE `order_id` = 'Order_$order_id'";
$payment_result = mysqli_query($conn, $payment_sql);
$payment = mysqli_fetch_assoc($payment_result);
$payment_id = $payment ? $payment['reference_id'] : "N/A"; // Default to "N/A" if no payment ID is found


// Fetch order items from `user_orders`
$item_sql = "SELECT * FROM `user_orders` WHERE `order_id` = '$order_id'";
$item_result = mysqli_query($conn, $item_sql);

// Create a new PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set title
$pdf->SetFillColor(173, 216, 230); // Light blue color (RGB: 173, 216, 230)
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, 'Tax Invoice', 1, 1, 'C', true);

$pdf->SetTopMargin(20); // Set the top margin to 20mm
$pdf->SetAutoPageBreak(true, 20); // Optional: set bottom margin to 20mm

// Set the Y position after the top margin
$pdf->SetY(30); // Adjust starting Y position if needed

$pdf->SetX(10);
$pdf->Cell(60, 10, 'Sold By:', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(100, 10, 'Grocery Shoppy Retail Services Private Limited', 0, 1);
$pdf->Cell(100, 10, 'Northern Buildings, Outer Ring Road, Ahmedabad, 382120, Gujarat, India', 0, 1);
$pdf->Cell(100, 10, 'Contact Us: +91 9898787876', 0, 1);
$pdf->Cell(100, 10, 'Email: groceryshoppy8989@gmail.com', 0, 1);
$pdf->Ln(10);

// Add horizontal black line
$pdf->SetDrawColor(0, 0, 0); // Set line color to black
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY()); // Draw line from (x1, y1) to (x2, y2)

// Bill To section
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(60, 10, 'Bill To:', 0, 1);
$pdf->SetFont('Arial', '', 12);

// Display Full Name
$pdf->SetX(10);
$pdf->Cell(60, 10, 'Full Name: ' . $order['Full_Name'], 0, 1);

// Display Invoice Number
$pdf->SetX(10);
$pdf->Cell(60, 10, 'Invoice Number: ' . $order['invoice_number'], 0, 1);

// Display Phone Number
$pdf->SetX(10);
$pdf->Cell(60, 10, 'Phone: ' . $order['Phone_No'], 0, 1);

// Display Address
$pdf->SetX(10);
$pdf->Cell(60, 10, 'Address: ' . $order['Address'], 0, 1);

// Display Payment ID
$pdf->SetX(10);
$pdf->Cell(60, 10, 'Payment ID: ' . $payment_id, 0, 1); // Added Payment ID here

// Item Table Heading
$pdf->Ln(10); // Add a line break
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(80, 10, 'Item Name', 1);
$pdf->Cell(40, 10, 'Quantity', 1);
$pdf->Cell(40, 10, 'Price', 1);
$pdf->Cell(30, 10, 'Total', 1);
$pdf->Ln();

// Fetch and display order items
$pdf->SetFont('Arial', '', 12);
$total_amount = 0;
while ($item = mysqli_fetch_assoc($item_result)) {
    $pdf->Cell(80, 10, $item['Item_Name'], 1);
    $pdf->Cell(40, 10, $item['Quantity'], 1);
    $pdf->Cell(40, 10, 'Rs. ' . number_format($item['Price'], 2), 1);
    $item_total = $item['Quantity'] * $item['Price'];
    $pdf->Cell(30, 10, 'Rs. ' . number_format($item_total, 2), 1);
    $pdf->Ln();
    $total_amount += $item_total; // Calculate total amount
}

// Display total amount
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(160, 10, 'Total Amount', 1);
$pdf->Cell(30, 10, 'Rs. ' . number_format($total_amount, 2), 1);

// Add signature row
$pdf->Ln(10); // Add a line break
$pdf->Cell(190, 20, 'Authorized Signature:', 1, 1, 'C'); // Signature cell is larger

// Include the signature image
$image_path = 'signature.png'; // Path to your image file
$pdf->Image($image_path, 160, $pdf->GetY() - 15, 30); // X position, Y position, Width (adjust as necessary)

// Add Thank You message
$pdf->Ln(10); // Add a line break
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 10, 'Thank You for Your Purchase!', 0, 1, 'C'); // Centered Thank You message

// Output the PDF
$pdf->Output('I', 'Invoice_' . $order_id . '.pdf');

// Close the database connection    
mysqli_close($conn);
?>
