<?php
require_once 'models/DB.php';

class PedidoModel {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function obtenerClientes() {
        $conn = $this->db->getConn();

        // Lógica para obtener clientes desde la base de datos
        $query = "SELECT * FROM clientes";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertarPedido($clienteId, $descripcion, $cantidad, $precioUnitario, $fechaPedido) {
        $conn = $this->db->getConn();
        $query = "INSERT INTO pedidos (clie nte_id, descripcion, cantidad, precio_unitario, fecha_pedido) 
                  VALUES (:clienteId, :descripcion, :cantidad, :precioUnitario, :fechaPedido)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':clienteId', $clienteId);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->bindParam(':precioUnitario', $precioUnitario);
        $stmt->bindParam(':fechaPedido', $fechaPedido);
    
        return $stmt->execute();
    }
    
}
?>