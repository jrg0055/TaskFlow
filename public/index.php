<?php
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
            "completed" => true,
            "priority" => "media"
        ],
        [
            "title" => "tarea 3",
            "completed" => true,
            "priority" => "baja"
        ],
        [
            "title" => "tarea 4",
            "completed" => true,
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
                    $taskClasses = 'task-item';
                    if ($task['completed']) {
                        $taskClasses .= ' completed';
                    }
                    switch ($task['priority']) {
                        case 'alta':
                            $taskClasses .= ' priority-alta';
                            break;
                        case 'media':
                            $taskClasses .= ' priority-media';
                            break;
                        case 'baja':
                            $taskClasses .= ' priority-baja';
                            break;
                    }
                    echo '<li class="'.$taskClasses.'">'.$task["title"].'</li>';
                }
            ?>
        </ul>
<?php
    include_once __DIR__ . '/../app/views/footer.php';
?>