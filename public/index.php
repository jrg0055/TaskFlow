<?php
    require_once __DIR__ . '/../app/functions.php';

    const SITE_NAME = "TaskFlow";
    $pageTitle = SITE_NAME . " - Página de Inicio";

    $userName = "Jorge";
    $userAge = 19;
    $isPremiumUser = true;

    $tasks = array(
        [
            "title" => "tarea 1",
            "completed" => true,
            "priority" => "alta"
        ],
        [
            "title" => "tarea 2",
            "completed" => false,
            "priority" => "media"
        ],
        [
            "title" => "tarea 3",
            "completed" => false,
            "priority" => "baja"
        ],
        [
            "title" => "tarea 4",
            "completed" => false,
            "priority" => "alta"
        ],
        [
            "title" => "tarea 5",
            "completed" => true,
            "priority" => "baja"
        ]
    );
?>

<?php
    include_once __DIR__ . '/../app/views/header.php';
?>
        <h2>Tareas pendientes</h2>
        <ul>
            <?php
                foreach ($tasks as $task) {
                    echo renderizarTarea($task);
                }
            ?>
        </ul>
<?php
    include_once __DIR__ . '/../app/views/footer.php';
?>