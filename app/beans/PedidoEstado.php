<?php

/**
 * Representa el estado de un pedido.
 */
class PedidoEstado implements JsonSerializable
{

    private int $id;
    private string $estado;

    public function __construct(int $id, string $estado)
    {
        $this->id = $id;
        $this->estado = $estado;
    }

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function jsonSerialize() : mixed
    {
        $ret = array();
        $ret["id"] = $this->id;
        $ret["estado"] = $this->estado;
        return $ret;
    }
}