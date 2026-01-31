<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Business Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f9ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: #333;
        }
        
        .login-container {
            width: 100%;
            max-width: 420px;
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 150, 0.08);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 150, 0.12);
        }
        
        .login-header {
            background: linear-gradient(135deg, #6a8cff 0%, #4a6cf7 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .login-header h1 {
            font-weight: 600;
            font-size: 28px;
            margin-bottom: 8px;
        }
        
        .login-header p {
            opacity: 0.9;
            font-weight: 300;
        }
        
        .login-form {
            padding: 35px;
        }
        
        .input-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
            font-size: 15px;
        }
        
        .input-group input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 1px solid #e1e5f1;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #fafcff;
            color: #333;
        }
        
        .input-group input:focus {
            outline: none;
            border-color: #6a8cff;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(106, 140, 255, 0.1);
        }
        
        .input-group i {
            position: absolute;
            left: 15px;
            top: 43px;
            color: #8a9dff;
            font-size: 18px;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            font-size: 14px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
        }
        
        .remember-me input {
            margin-right: 8px;
        }
        
        .forgot-password {
            color: #6a8cff;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .forgot-password:hover {
            color: #4a6cf7;
            text-decoration: underline;
        }
        
        .login-button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #6a8cff 0%, #4a6cf7 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(106, 140, 255, 0.3);
        }
        
        .login-button:hover {
            background: linear-gradient(135deg, #5a7cff 0%, #3a5cf7 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(106, 140, 255, 0.4);
        }
        
        .login-button:active {
            transform: translateY(0);
        }
        
        .signup-link {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 15px;
        }
        
        .signup-link a {
            color: #6a8cff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        
        .signup-link a:hover {
            color: #4a6cf7;
            text-decoration: underline;
        }
        
        /* Responsive Design */
        @media (max-width: 480px) {
            .login-container {
                max-width: 100%;
            }
            
            .login-form {
                padding: 25px;
            }
            
            .login-header {
                padding: 25px 20px;
            }
            
            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .forgot-password {
                margin-top: 10px;
            }
        }
        
        /* Animation for the form */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .login-form {
            animation: fadeIn 0.5s ease-out;
        }

        .error-box {
    background: #ffe5e5;
    color: #c0392b;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
    text-align: center;
    
    }

    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Welcome Back</h1>
            <p>Sign in to your account to continue</p>
        </div>
        
        <form class="login-form" method="POST" action="{{ route('admin.login') }}">
            @csrf
@if ($errors->any())
    <div class="error-box">
        {{ $errors->first() }}
    </div>
@endif

            <div class="input-group">
                <label for="email">Email or Username</label>
                <i class="fas fa-user"></i>
                <input type="text" id="email" name="email"  placeholder="Enter your email or username" required>
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <a href="#" class="forgot-password">Forgot password?</a>
            </div>
            
            <button type="submit" class="login-button">Login</button>
            
            <div class="signup-link">
                Don't have an account? <a href="#">Sign up now</a>
            </div>
        </form>
    </div>

    <script>
        // Basic form submission handling
        // document.querySelector('.login-form').addEventListener('submit', function(e) {
        //     e.preventDefault();
            
        //     const email = document.getElementById('email').value;
        //     const password = document.getElementById('password').value;
            
        //     // Simple validation
        //     if(email.trim() === '' || password.trim() === '') {
        //         alert('Please fill in all fields.');
        //         return;
        //     }
            
        //     // In a real application, you would send this data to a server
        //     console.log('Login attempt with:', { email, password });
            
        //     // Show a success message (in a real app, this would be after server validation)
        //     const loginButton = document.querySelector('.login-button');
        //     const originalText = loginButton.textContent;
            
        //     loginButton.textContent = 'Logging in...';
        //     loginButton.disabled = true;
            
        //     setTimeout(() => {
        //         loginButton.textContent = 'Login Successful!';
        //         loginButton.style.background = 'linear-gradient(135deg, #4CAF50 0%, #45a049 100%)';
                
        //         // Reset after 2 seconds
        //         setTimeout(() => {
        //             loginButton.textContent = originalText;
        //             loginButton.disabled = false;
        //             loginButton.style.background = 'linear-gradient(135deg, #6a8cff 0%, #4a6cf7 100%)';
                    
        //             // Clear form
        //             document.getElementById('email').value = '';
        //             document.getElementById('password').value = '';
        //         }, 2000);
        //     }, 1500);
        // });
        
        // Add focus effects to inputs
        const inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.querySelector('i').style.color = '#4a6cf7';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.querySelector('i').style.color = '#8a9dff';
            });
        });
    </script>
</body>
</html>