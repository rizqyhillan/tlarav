<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
            background: #0f0c29;
        }

        .animated-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            animation: gradientShift 8s ease infinite;
            z-index: -1;
        }

        @keyframes gradientShift {
            0%, 100% { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
            50% { background: linear-gradient(135deg, #764ba2 0%, #f093fb 100%); }
        }

        .bubble {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-50px) translateX(30px); }
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }

        .content {
            animation: slideIn 1s ease-out forwards;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 4rem;
            color: white;
            margin-bottom: 1rem;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        p {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            animation: fadeInDelay 1.5s ease-out forwards;
            opacity: 0;
        }

        @keyframes fadeInDelay {
            to { opacity: 1; }
        }

        .btn {
            display: inline-block;
            padding: 12px 40px;
            margin: 10px;
            font-size: 1rem;
            border: 2px solid white;
            color: white;
            background: transparent;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            animation: fadeInDelay 2s ease-out forwards;
            opacity: 0;
        }

        .btn:hover {
            background: white;
            color: #667eea;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="animated-background"></div>
    
    <script>
        // Generate floating bubbles
        for (let i = 0; i < 10; i++) {
            const bubble = document.createElement('div');
            bubble.className = 'bubble';
            bubble.style.width = Math.random() * 100 + 50 + 'px';
            bubble.style.height = bubble.style.width;
            bubble.style.left = Math.random() * 100 + '%';
            bubble.style.top = Math.random() * 100 + '%';
            bubble.style.animationDelay = Math.random() * 6 + 's';
            document.querySelector('.animated-background').appendChild(bubble);
        }
    </script>

    <div class="container">
        <div class="content">
            <h1>Welcome</h1>
            <p>Build something amazing today</p>
            <button class="btn">Get Started</button>
            <button class="btn">Learn More</button>
        </div>
    </div>
</body>
</html>