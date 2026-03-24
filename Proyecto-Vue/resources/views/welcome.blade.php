<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Principal</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .dashboard-container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            width: 400px;
        }
        h1 { color: #1a202c; margin-bottom: 1.5rem; }
        .menu {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .btn {
            text-decoration: none;
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            transition: transform 0.2s, background 0.2s;
        }
        .btn-student { background-color: #4a90e2; }
        .btn-course { background-color: #48bb78; }
        .btn:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h1>🚀 Mi Panel</h1>
        <p>Selecciona a dónde quieres ir:</p>
        
        <div class="menu">
            <a href="/student" class="btn btn-student">Ir a Estudiantes</a>
            <a href="/course" class="btn btn-course">Ir a Cursos</a>
        </div>
    </div>
</body>
</html>