<?php
    class Proceso
    {
        private $db; // Representa la conexión a la base de datos

        public function __construct($db)
        {
            $this->db = $db; // Constructor que recibe la conexión a la base de datos
        }

        public function modificarlugar(){
            
            $lugarEncontrado = $lugar->buscarLugarPorIP($ip);

            // Verifica si se encontró un lugar con la IP proporcionada
            if ($lugarEncontrado) {
                // Muestra los detalles del lugar encontrado si se halla en la base de datos
                echo '<h2>Resultado de la búsqueda</h2>';
                echo '<p>IP: ' . $lugarEncontrado['ip'] . '</p>';
                echo '<p>Nombre del Lugar: ' . $lugarEncontrado['lugar'] . '</p>';
                echo '<p>Descripción: ' . $lugarEncontrado['descripcion'] . '</p>';
                // Genera un enlace para borrar el lugar utilizando eliminarlugar.php con la IP correspondiente
                echo '<a href="procesomodificarlugar.php?ip=' . $lugarEncontrado['ip'] . '">Modificar Lugar</a>';
            } else {
                // Si no se encuentra un lugar con la IP proporcionada, muestra un mensaje de error
                echo 'No se encontró un Lugar con la IP proporcionada.';
            }

        }

        public function borrarlugar($ip){

            $lugarEncontrado = $lugar->buscarLugarPorIP($ip);

            // Verifica si se encontró un lugar con la IP proporcionada
            if ($lugarEncontrado) {
                // Muestra los detalles del lugar encontrado si se halla en la base de datos
                echo '<h2>Resultado de la búsqueda</h2>';
                echo '<p>IP: ' . $lugarEncontrado['ip'] . '</p>';
                echo '<p>Nombre del Lugar: ' . $lugarEncontrado['lugar'] . '</p>';
                echo '<p>Descripción: ' . $lugarEncontrado['descripcion'] . '</p>';
                // Genera un enlace para borrar el lugar utilizando eliminarlugar.php con la IP correspondiente
                echo '<a href="procesoborrarlugar.php?ip=' . $lugarEncontrado['ip'] . '">Borrar Lugar</a>';
            } else {
                // Si no se encuentra un lugar con la IP proporcionada, muestra un mensaje de error
                echo 'No se encontró un Lugar con la IP proporcionada.';
            }

        }
    }
    
?>