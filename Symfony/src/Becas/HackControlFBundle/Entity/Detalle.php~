<?php

namespace Becas\HackControlFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detalle
 *
 * @ORM\Table(name="detalle")
 * @ORM\Entity
 */
class Detalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="precioU", type="float")
     */
    private $precioU;
    /**
     * @ORM\ManyToOne(targetEntity="Venta", inversedBy="detalles")
     * @ORM\JoinColumn(name="venta_id", referencedColumnName="id")
     */
    private $venta;
    /**
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="detalles")
     * @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     */
    private $producto;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Detalle
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precioU
     *
     * @param string $precioU
     * @return Detalle
     */
    public function setPrecioU($precioU)
    {
        $this->precioU = $precioU;
    
        return $this;
    }

    /**
     * Get precioU
     *
     * @return string 
     */
    public function getPrecioU()
    {
        return $this->precioU;
    }

    /**
     * Set venta
     *
     * @param \Becas\HackControlFBundle\Entity\Venta $venta
     * @return Detalle
     */
    public function setVenta(\Becas\HackControlFBundle\Entity\Venta $venta = null)
    {
        $this->venta = $venta;
    
        return $this;
    }

    /**
     * Get venta
     *
     * @return \Becas\HackControlFBundle\Entity\Venta 
     */
    public function getVenta()
    {
        return $this->venta;
    }

    /**
     * Set producto
     *
     * @param \Becas\HackControlFBundle\Entity\Producto $producto
     * @return Detalle
     */
    public function setProducto(\Becas\HackControlFBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;
    
        return $this;
    }

    /**
     * Get producto
     *
     * @return \Becas\HackControlFBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }
}