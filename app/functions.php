<?php
function obtenerClasePrioridad($prioridad) {
    switch ($prioridad) {
        case 'alta':
            return ' priority-alta';
        case 'media':
            return ' priority-media';
        case 'baja':
            return ' priority-baja';
        default:
            return '';
    }
}

function renderizarTarea($task) {
    $taskClasses = 'task-item';
    if ($task['completed']) {
        $taskClasses .= ' completed';
    }
    $taskClasses .= obtenerClasePrioridad($task['priority']);
    return '<li class="'.$taskClasses.'">'. htmlspecialchars($task["title"]).'</li>';
}

?>