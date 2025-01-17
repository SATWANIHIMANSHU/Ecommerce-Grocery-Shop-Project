<?php
session_start(); // Always start the session

// Check if user is logged in
if (!isset($_SESSION['name'])) {
    // If not logged in, show alert and redirect to login page
    echo "<script>
            alert('You must be logged in to add items to the cart.');
            window.location.href='signin.php';
          </script>";
    exit; // Stop further processing
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if the 'Add_To_Cart' button was clicked
    if (isset($_POST['Add_To_Cart_Product'])) {
        
        // Check if the 'cart' session is already initialized
        if (isset($_SESSION['cart'])) {
            
            // Extract the Item_Name values from the session cart array
            $myitems = array_column($_SESSION['cart'], 'Item_Name');

            // Check if the item already exists in the cart
            if (in_array($_POST['Item_Name'], $myitems)) {
                echo "<script>
                        alert('Item Already Added');
                        window.location.href='product.php';
                      </script>";
            }
             else {
                // If the item is not in the cart, add it
                $count = count($_SESSION['cart']); // Get the current cart size
                $_SESSION['cart'][$count] = array(
                    'Item_Name' => $_POST['Item_Name'],
                    'Price' => $_POST['Price'],
                    'Quantity' => 1
                );
                echo "<script>
                        alert('Item Added');
                        window.location.href='product.php';
                      </script>";
            }
        } else {
            // If the cart session is not set, initialize it and add the first item
            $_SESSION['cart'][0] = array(
                'Item_Name' => $_POST['Item_Name'],
                'Price' => $_POST['Price'],
                'Quantity' => 1
            );
            echo "<script>
                    alert('Item Added');
                    window.location.href='product.php';
                  </script>";
        }
    }

    if (isset($_POST['Remove_Item']) && isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if (isset($value['Item_Name']) && $value['Item_Name'] === $_POST['Item_Name']) {
                // Remove the item
                unset($_SESSION['cart'][$key]);
    
                // Reindex the array to avoid gaps in keys
                $_SESSION['cart'] = array_values($_SESSION['cart']);
    
                // Show alert and redirect
                echo "<script>
                alert('Item Removed');
                window.location.href='cart.php';
                </script>";
                break; // Exit the loop after removing the item
            }
        }
    }
  
    if (isset($_POST['Mod_Quantity'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            // Check if the item name matches the posted value
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                // Update the session cart with the new quantity
                $_SESSION['cart'][$key]['Quantity'] = $_POST['Mod_Quantity'];
                break; // No need to continue once the item is found and updated
            }
        }
    
        // Redirect back to the cart page
        echo "<script>
            window.location.href = 'cart.php';
        </script>";
    }
}


?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if the 'Add_To_Cart' button was clicked
    if (isset($_POST['Add_To_Cart_Single_Product'])) {
        
        // Check if the 'cart' session is already initialized
        if (isset($_SESSION['cart'])) {
            
            // Extract the Item_Name values from the session cart array
            $myitems = array_column($_SESSION['cart'], 'Item_Name');

            // Check if the item already exists in the cart
            if (in_array($_POST['Item_Name'], $myitems)) {
                echo "<script>
                        alert('Item Already Added');
                        window.location.href='single.php';
                      </script>";
            }
             else {
                // If the item is not in the cart, add it
                $count = count($_SESSION['cart']); // Get the current cart size
                $_SESSION['cart'][$count] = array(
                    'Item_Name' => $_POST['Item_Name'],
                    'Price' => $_POST['Price'],
                    'Quantity' => 1
                );
                echo "<script>
                        alert('Item Added');
                        window.location.href='single.php';
                      </script>";
            }
        } else {
            // If the cart session is not set, initialize it and add the first item
            $_SESSION['cart'][0] = array(
                'Item_Name' => $_POST['Item_Name'],
                'Price' => $_POST['Price'],
                'Quantity' => 1
            );
            echo "<script>
                    alert('Item Added');
                    window.location.href='single.php';
                  </script>";
        }
    }

    if (isset($_POST['Remove_Item']) && isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if (isset($value['Item_Name']) && $value['Item_Name'] === $_POST['Item_Name']) {
                // Remove the item
                unset($_SESSION['cart'][$key]);
    
                // Reindex the array to avoid gaps in keys
                $_SESSION['cart'] = array_values($_SESSION['cart']);
    
                // Show alert and redirect
                echo "<script>
                alert('Item Removed');
                window.location.href='cart.php';
                </script>";
                break; // Exit the loop after removing the item
            }
        }
    }
  
    if (isset($_POST['Mod_Quantity'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            // Check if the item name matches the posted value
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                // Update the session cart with the new quantity
                $_SESSION['cart'][$key]['Quantity'] = $_POST['Mod_Quantity'];
                break; // No need to continue once the item is found and updated
            }
        }
    
        // Redirect back to the cart page
        echo "<script>
            window.location.href = 'cart.php';
        </script>";
    }
}



?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if the 'Add_To_Cart' button was clicked
    if (isset($_POST['Add_To_Cart_Households_Product'])) {
        
        // Check if the 'cart' session is already initialized
        if (isset($_SESSION['cart'])) {
            
            // Extract the Item_Name values from the session cart array
            $myitems = array_column($_SESSION['cart'], 'Item_Name');

            // Check if the item already exists in the cart
            if (in_array($_POST['Item_Name'], $myitems)) {
                echo "<script>
                        alert('Item Already Added');
                        window.location.href='product2.php';
                      </script>";
            }
             else {
                // If the item is not in the cart, add it
                $count = count($_SESSION['cart']); // Get the current cart size
                $_SESSION['cart'][$count] = array(
                    'Item_Name' => $_POST['Item_Name'],
                    'Price' => $_POST['Price'],
                    'Quantity' => 1
                );
                echo "<script>
                        alert('Item Added');
                        window.location.href='product2.php';
                      </script>";
            }
        } else {
            // If the cart session is not set, initialize it and add the first item
            $_SESSION['cart'][0] = array(
                'Item_Name' => $_POST['Item_Name'],
                'Price' => $_POST['Price'],
                'Quantity' => 1
            );
            echo "<script>
                    alert('Item Added');
                    window.location.href='product2.php';
                  </script>";
        }
    }

    if (isset($_POST['Remove_Item']) && isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if (isset($value['Item_Name']) && $value['Item_Name'] === $_POST['Item_Name']) {
                // Remove the item
                unset($_SESSION['cart'][$key]);
    
                // Reindex the array to avoid gaps in keys
                $_SESSION['cart'] = array_values($_SESSION['cart']);
    
                // Show alert and redirect
                echo "<script>
                alert('Item Removed');
                window.location.href='cart.php';
                </script>";
                break; // Exit the loop after removing the item
            }
        }
    }
  
    if (isset($_POST['Mod_Quantity'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            // Check if the item name matches the posted value
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                // Update the session cart with the new quantity
                $_SESSION['cart'][$key]['Quantity'] = $_POST['Mod_Quantity'];
                break; // No need to continue once the item is found and updated
            }
        }
    
        // Redirect back to the cart page
        echo "<script>
            window.location.href = 'cart.php';
        </script>";
    }
}



?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if the 'Add_To_Cart' button was clicked
    if (isset($_POST['Add_To_Cart_Single_Households_Product'])) {
        
        // Check if the 'cart' session is already initialized
        if (isset($_SESSION['cart'])) {
            
            // Extract the Item_Name values from the session cart array
            $myitems = array_column($_SESSION['cart'], 'Item_Name');

            // Check if the item already exists in the cart
            if (in_array($_POST['Item_Name'], $myitems)) {
                echo "<script>
                        alert('Item Already Added');
                        window.location.href='single2.php';
                      </script>";
            }
             else {
                // If the item is not in the cart, add it
                $count = count($_SESSION['cart']); // Get the current cart size
                $_SESSION['cart'][$count] = array(
                    'Item_Name' => $_POST['Item_Name'],
                    'Price' => $_POST['Price'],
                    'Quantity' => 1
                );
                echo "<script>
                        alert('Item Added');
                        window.location.href='single2.php';
                      </script>";
            }
        } else {
            // If the cart session is not set, initialize it and add the first item
            $_SESSION['cart'][0] = array(
                'Item_Name' => $_POST['Item_Name'],
                'Price' => $_POST['Price'],
                'Quantity' => 1
            );
            echo "<script>
                    alert('Item Added');
                    window.location.href='single2.php';
                  </script>";
        }
    }

    if (isset($_POST['Remove_Item']) && isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if (isset($value['Item_Name']) && $value['Item_Name'] === $_POST['Item_Name']) {
                // Remove the item
                unset($_SESSION['cart'][$key]);
    
                // Reindex the array to avoid gaps in keys
                $_SESSION['cart'] = array_values($_SESSION['cart']);
    
                // Show alert and redirect
                echo "<script>
                alert('Item Removed');
                window.location.href='cart.php';
                </script>";
                break; // Exit the loop after removing the item
            }
        }
    }
  
    if (isset($_POST['Mod_Quantity'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            // Check if the item name matches the posted value
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                // Update the session cart with the new quantity
                $_SESSION['cart'][$key]['Quantity'] = $_POST['Mod_Quantity'];
                break; // No need to continue once the item is found and updated
            }
        }
    
        // Redirect back to the cart page
        echo "<script>
            window.location.href = 'cart.php';
        </script>";
    }
}


if (isset($_POST['logout_btn'])) {
    session_destroy(); // Destroy the session
    echo "<script>
                alert('You had been logout');
                window.location.href = 'index.php';
                </script>";
    // Redirect to login page
    exit;
}


?>