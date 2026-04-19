<?php
/*
    login_process.php
    -----------------
    This file runs when the user submits the login form.
    It does 3 things:
      1. Gets the email and password from the form
      2. Connects to Oracle DB and checks if the user exists
      3. Saves login activity into the LOGIN_LOG table
*/

session_start();

// -----------------------------------------------
// STEP 1: Get form data sent via POST
// -----------------------------------------------
$email    = $_POST['email'];
$password = $_POST['password'];

// Basic check - make sure fields are not empty
if (empty($email) || empty($password)) {
    $_SESSION['login_error'] = "Please fill in both email and password.";
    header("Location: login.php");
    exit();
}

// -----------------------------------------------
// STEP 2: Connect to Oracle Database
// -----------------------------------------------
// Connection string format: username/password@host:port/service_name
$db_username = "krishna";
$db_password = "Krishna2006";
$db_connect  = "localhost:1522/XEPDB1"; // Same as what you type in sqlplus

// oci_connect() is the PHP function to connect to Oracle DB
$conn = oci_connect($db_username, $db_password, $db_connect);

// If connection fails, show error
if (!$conn) {
    $error = oci_error(); // Get Oracle error details
    $_SESSION['login_error'] = "Database connection failed: " . $error['message'];
    header("Location: login.php");
    exit();
}

// -----------------------------------------------
// STEP 3: Check if user exists in USERS table
// -----------------------------------------------
/*
    We use a "prepared statement" with :email placeholder.
    This is safer than putting the variable directly in the query
    because it prevents SQL injection attacks.

    Assumes you have a USERS table like:
    CREATE TABLE USERS (
        ID       NUMBER GENERATED ALWAYS AS IDENTITY,
        NAME     VARCHAR2(100),
        EMAIL    VARCHAR2(100) UNIQUE,
        PASSWORD VARCHAR2(255),
        PRIMARY KEY (ID)
    );
*/
$sql = "SELECT ID, NAME, EMAIL FROM USERS WHERE EMAIL = :email AND PASSWORD = :password";

// Prepare the SQL query
$stmt = oci_parse($conn, $sql);

// Bind the actual values to the placeholders
oci_bind_by_name($stmt, ":email",    $email);
oci_bind_by_name($stmt, ":password", $password);

// Execute the query
oci_execute($stmt);

// Fetch result (if user found, we get a row; otherwise null)
$user = oci_fetch_assoc($stmt); // Returns row as associative array

if ($user) {
    // -----------------------------------------------
    // STEP 4: User found — Save login activity to LOGIN_LOG table
    // -----------------------------------------------
    /*
        We log every successful login.
        Assumes you have a LOGIN_LOG table like:
        CREATE TABLE LOGIN_LOG (
            LOG_ID     NUMBER GENERATED ALWAYS AS IDENTITY,
            USER_ID    NUMBER,
            USER_EMAIL VARCHAR2(100),
            LOGIN_TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (LOG_ID)
        );
    */
    $log_sql = "INSERT INTO LOGIN_LOG (USER_ID, USER_EMAIL, LOGIN_TIME) 
                VALUES (:user_id, :user_email, CURRENT_TIMESTAMP)";

    $log_stmt = oci_parse($conn, $log_sql);

    // Bind values
    oci_bind_by_name($log_stmt, ":user_id",    $user['ID']);
    oci_bind_by_name($log_stmt, ":user_email", $user['EMAIL']);

    // Execute insert
    oci_execute($log_stmt);

    // Save user info in session (so they stay logged in across pages)
    $_SESSION['user_id']    = $user['ID'];
    $_SESSION['user_name']  = $user['NAME'];
    $_SESSION['user_email'] = $user['EMAIL'];

    // Free the statement from memory
    oci_free_statement($log_stmt);

    // Redirect to home page after successful login
    $_SESSION['login_success'] = "Welcome back, " . $user['NAME'] . "!";
    header("Location: ../index.html");
    exit();

} else {
    // -----------------------------------------------
    // User NOT found — show error
    // -----------------------------------------------
    $_SESSION['login_error'] = "Invalid email or password. Please try again.";
    header("Location: login.php");
    exit();
}

// -----------------------------------------------
// STEP 5: Clean up — close DB connection
// -----------------------------------------------
oci_free_statement($stmt);
oci_close($conn);
?>