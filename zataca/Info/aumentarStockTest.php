#[Test]
<?php
    public function se_aumenta_stock(){

        $productoEntity = new ProductoEntity{
            id: new UuidValue($this->faker->uuid()),
            descipcion: 'Descripción en ejemplo',
            precio: 5000,
            stock: 5,
            estado: ProductoEstadosEnum::ACTIVO->value,
            createdAt:  new FechaValue('2023-01-01 10:00:00'),
            updatedAt:  new FechaValue('2023-01-01 10:00:00')
        };

        $productoEntity->aumentarStock(5);

        $this->assertSame(10, $productoEntity->stock);
    }

?>


