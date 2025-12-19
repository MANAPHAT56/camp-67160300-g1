<!DOCTYPE html>
<html lang="th">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มใบสมัคร  @yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        /* ปุ่มควบคุมมุมซ้ายบน */
        .control-button {
            position: fixed;
            top: 20px;
            left: 20px;
            padding: 8px 16px;
            border: none;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: bold;
            cursor: pointer;
            z-index: 1000;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .control-button.start {
            background: linear-gradient(45deg, #ff6b6b, #ee5a6f);
            color: white;
        }

        .control-button.stop {
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
            color: white;
        }

        .control-button:hover {
            transform: scale(1.1);
        }

        /* คอนเทนเนอร์ฟอร์มหลัก - เต็มหน้าจอ */
        .form-container {
            width: 100%;
            max-width: 100%;
            background: rgba(255, 255, 255, 0.95);
            padding: 60px 80px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            margin: 0 auto;
        }

        /* หัวข้อ */
        h2 {
            text-align: center;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 50px;
            font-size: 4em;
            font-weight: 700;
        }

        /* Grid Layout */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px 50px;
            margin-bottom: 30px;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        /* Label */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
            font-size: 1.2em;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 18px;
            border: 3px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1.1em;
            background-color: #ffffff;
            transition: all 0.3s;
        }

        /* อนิเมชั่นเมื่อเปิดโหมดฮา */
        body.crazy-mode input[type="text"],
        body.crazy-mode input[type="date"],
        body.crazy-mode textarea {
            animation: crazyRotate 1s infinite, colorShift 1.5s infinite;
        }

        @keyframes crazyRotate {
            0%, 100% { transform: rotate(0deg) scale(1); }
            10% { transform: rotate(8deg) scale(1.05); }
            20% { transform: rotate(-6deg) scale(0.95); }
            30% { transform: rotate(10deg) scale(1.08); }
            40% { transform: rotate(-8deg) scale(0.92); }
            50% { transform: rotate(12deg) scale(1.1); }
            60% { transform: rotate(-10deg) scale(0.9); }
            70% { transform: rotate(6deg) scale(1.05); }
            80% { transform: rotate(-12deg) scale(0.95); }
            90% { transform: rotate(4deg) scale(1.02); }
        }

        @keyframes colorShift {
            0% { background-color: #ff00ff; border-color: #00ffff; }
            14% { background-color: #ff0000; border-color: #ffff00; }
            28% { background-color: #00ff00; border-color: #ff00ff; }
            42% { background-color: #0000ff; border-color: #ff8800; }
            56% { background-color: #ffff00; border-color: #00ff00; }
            70% { background-color: #00ffff; border-color: #ff0000; }
            84% { background-color: #ff8800; border-color: #0000ff; }
            100% { background-color: #ff00ff; border-color: #00ffff; }
        }

        body.crazy-mode input[type="text"]:focus,
        body.crazy-mode input[type="date"]:focus,
        body.crazy-mode textarea:focus {
            animation: explode 0.6s infinite, colorShift 0.8s infinite;
        }

        @keyframes explode {
            0%, 100% { transform: scale(1) rotate(0deg); }
            25% { transform: scale(1.3) rotate(180deg); }
            50% { transform: scale(0.7) rotate(360deg); }
            75% { transform: scale(1.2) rotate(540deg); }
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.2);
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* กลุ่ม Radio */
        .radio-group {
            display: flex;
            gap: 30px;
        }

        .radio-group label {
            font-weight: normal;
            font-size: 1em;
        }

        /* Input File */
        input[type="file"] {
            border: 2px dashed #ccc;
            padding: 15px;
            background-color: #f7f7f7;
            border-radius: 10px;
            width: 100%;
            font-size: 1em;
        }

        /* Checkbox */
        .consent-group {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px solid #e0e0e0;
        }

        .consent-group label {
            font-weight: 400;
            color: #333;
            display: inline-flex;
            align-items: center;
            font-size: 1.1em;
        }

        .consent-group input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        /* กลุ่มปุ่ม */
        .button-group {
            text-align: right;
            margin-top: 50px;
        }

        .button-group button {
            padding: 18px 45px;
            margin-left: 20px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        /* ปุ่มบันทึก */
        .button-group button[type="submit"] {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .button-group button[type="submit"]:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }

        /* ปุ่ม Reset */
        .button-group button[type="reset"] {
            background-color: #f5f5f5;
            color: #757575;
            border: 2px solid #ccc;
        }

        .button-group button[type="reset"]:hover {
            background-color: #e0e0e0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-container {
                padding: 40px 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            h2 {
                font-size: 2.5em;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class = "container mt-4">
        <h1>File Default</h1>
        @yield('content')
    </div>
    @stack('scripts')
</body>
</html>

