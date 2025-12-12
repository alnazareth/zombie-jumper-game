<!DOCTYPE html>
<html>
<head>
    <title>Juego Zombie Jumper - Demo Git Flow</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #1a1a2e;
            color: white;
            padding: 50px;
        }
        .container {
            background-color: #16213e;
            padding: 30px;
            border-radius: 10px;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 0 20px rgba(0,255,255,0.3);
        }
        h1 {
            color: #00ffff;
            text-shadow: 0 0 10px #00ffff;
        }
        .game-info {
            background-color: #0f3460;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .branch {
            display: inline-block;
            padding: 5px 15px;
            margin: 5px;
            border-radius: 5px;
            font-weight: bold;
        }
        .dev { background-color: #3498db; }
        .beta { background-color: #f39c12; }
        .main { background-color: #2ecc71; }
        .feature {
            background-color: #9b59b6;
            padding: 8px;
            margin: 5px;
            border-radius: 4px;
        }
        footer {
            margin-top: 30px;
            color: #95a5a6;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎮 Zombie Jumper Game</h1>
        <h2>Demo de Git Flow: dev → beta → main</h2>
        
        <div class="game-info">
            <h3>📋 Estado del Juego:</h3>
            <p>Versión: <strong>1.0.0</strong></p>
            <p>Última actualización: <strong><?php echo date('d/m/Y H:i:s'); ?></strong></p>
            
            <h3>🌿 Ramas Activas:</h3>
            <span class="branch dev">dev</span>
            <span class="branch beta">beta</span>
            <span class="branch main">main</span>
        </div>
        
        <div class="game-info">
            <h3>🚀 Características Implementadas:</h3>
            <div class="feature">✅ Personaje principal con sprite</div>
            <div class="feature">✅ Movimiento con TAP/click</div>
            <div class="feature">✅ Sistema de gravedad básico</div>
            <div class="feature">🔄 Zombies como obstáculos</div>
            <div class="feature">🔧 Detección de colisiones</div>
            <div class="feature">📊 Sistema de puntuación</div>
        </div>
        
        <div class="game-info">
            <h3>🎯 Próximas Mejoras:</h3>
            <ul style="text-align: left; display: inline-block;">
                <li>Sonidos de salto y colisión</li>
                <li>Animación de personaje</li>
                <li>Dificultad progresiva</li>
                <li>Pantalla de Game Over</li>
            </ul>
        </div>
        
        <div style="margin-top: 30px;">
            <h3>🎮 Cómo Jugar:</h3>
            <p>Haz clic/TAP para saltar y evitar los zombies</p>
            <p>¡Cada zombie evitado = +10 puntos!</p>
            <button style="padding: 10px 20px; background: #00ffff; border: none; 
                          border-radius: 5px; font-weight: bold; cursor: pointer;">
                🎯 Jugar Ahora (Simulación)
            </button>
        </div>
    </div>
    
    <footer>
        <p>Git Flow Demo | Práctica de desarrollo de juegos con Flame Engine</p>
        <p>Ram actual: <strong>dev</strong> | Próximo merge a beta: cuando el salto funcione perfectamente</p>
    </footer>
</body>
</html>