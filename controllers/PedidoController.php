<?php
class PedidoController {
    private $pedidoModel;

    public function __construct(PedidoModel $pedidoModel) {
        $this->pedidoModel = $pedidoModel;
    }

    public function mostrarFormulario() {
        $clientes = $this->pedidoModel->obtenerClientes();
        include('views/formulario_pedido.php');
    }

    public function procesarPedido($datosPedido) {
        $this->pedidoModel->insertarPedido(
            $datosPedido['nombre_id'],
            $datosPedido['descripcion'],
            $datosPedido['cantidad'],
            $datosPedido['precio_unitario'],
            $datosPedido['fecha_pedido']
        );
        echo "Pedido procesado correctamente.";
    }
}
?>