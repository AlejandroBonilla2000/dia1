<?php
require_once 'models/PedidoModel.php';
require_once 'controllers/PedidoController.php';

$pedidoModel = new PedidoModel();
$pedidoController = new PedidoController($pedidoModel);

$action = isset($_GET['action']) ? $_GET['action'] : 'mostrarFormulario';

switch ($action ) {
    case 'mostrarFormulario':
        $pedidoController->mostrarFormulario();
        break;

    case 'procesarPedido':
        $pedidoController->procesarPedido($_POST);
        break;

    default:
       
        break;
}
?>