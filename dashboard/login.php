<?php
session_start();
include("z_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $hashed_password = md5($password);

    $sql = "SELECT * FROM users WHERE username=? AND password=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $username, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION["user"] = $username;
        echo "<script>window.location.href='index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Invalid username or password!'); window.location.href='login.php';</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Modern App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0066ff;
            --primary-dark: #0066ff;
            --accent-color: #d6e9f7;
            --text-dark: #2d3748;
            --text-light: #718096;
            --bg-light: #f7fafc;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.12);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            overflow: hidden;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .login-container {
            display: flex;
            height: 100vh;
            position: relative;
        }

        .login-illustration {
            flex: 1;
            background: linear-gradient(135deg, var(--primary-color), #0066ff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .login-illustration::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            z-index: -1;
        }

        .login-illustration::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            z-index: -1;
        }

        .illustration-content {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .illustration-content h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: 700;
            position: relative;
            z-index: 2;
        }

        .illustration-content p {
            opacity: 0.9;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            position: relative;
            z-index: 2;
        }

        .left-img {
            width: 100%;
            height: 60vh;
            max-height: 500px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .illustration-img {
            object-fit: contain;
            width: 80%;
            height: 100%;
            max-height: 100%;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.1));
            animation: float 6s ease-in-out infinite;
            
        }

        .login-form-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: white;
            overflow: auto;
        }

        .login-form {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            background: white;
            position: relative;
            z-index: 2;
        }

        .login-form h2 {
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
            position: relative;
            text-align: center;
        }

        .login-form h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 3px;
        }

        .form-group {
            margin-bottom: 1.25rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-dark);
            font-size: 0.9rem;
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 10px 15px 10px 45px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: var(--transition);
            background-color: #f8fafc;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(126, 217, 86, 0.2);
            background-color: white;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 0.5rem;
        }

        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(126, 217, 86, 0.3);
        }

        .btn i {
            margin-right: 8px;
        }

        .error-message {
            color: #e53e3e;
            background: #fff5f5;
            padding: 0.75rem;
            border-radius: 8px;
            margin-bottom: 1.25rem;
            font-size: 0.875rem;
            text-align: center;
            border: 1px solid #fc8181;
        }

        /* Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .login-container {
                flex-direction: column;
                height: auto;
                min-height: 100vh;
            }
            
            .login-illustration {
                padding: 1.5rem 1rem;
                min-height: 40vh;
            }
            
            .illustration-content h1 {
                font-size: 1.75rem;
            }
            
            .left-img {
                height: 40vh;
                max-height: 300px;
            }
            
            .login-form-container {
                padding: 1.5rem;
            }
            
            .login-form {
                padding: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .login-form {
                padding: 1.25rem;
            }
            
            .illustration-content h1 {
                font-size: 1.5rem;
            }
            
            .login-form h2 {
                font-size: 1.25rem;
            }
            
            .left-img {
                height: 30vh;
                max-height: 250px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-illustration">
            <div class="illustration-content">
                <h1>Welcome Back!</h1>
                <p>Login to access your personalized dashboard</p>
                <div class="left-img">
                    <img src="dashboard/assets/images/aboutdoctors.jpg" alt="Login Illustration" class="illustration-img">
                </div>
            </div>
        </div>
        
        <div class="login-form-container">
            <form class="login-form" method="post">
                <h2>Sign In</h2>
                
                <?php if (isset($_GET['error'])): ?>
                    <div class="error-message">
                        <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                </div>
                
                <button type="submit" class="btn">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>