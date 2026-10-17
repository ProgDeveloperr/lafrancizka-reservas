<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    public function definition(): array
    {
        $productos = [
            ['nombre' => 'Bruschettas clásicas', 'categoria' => 'Entrada', 'min' => 5500, 'max' => 7500],
            ['nombre' => 'Provoleta grillada', 'categoria' => 'Entrada', 'min' => 6500, 'max' => 8500],
            ['nombre' => 'Empanadas de carne', 'categoria' => 'Entrada', 'min' => 3500, 'max' => 5000],
            ['nombre' => 'Tabla de fiambres', 'categoria' => 'Entrada', 'min' => 9000, 'max' => 13000],

            ['nombre' => 'Milanesa napolitana', 'categoria' => 'Principal', 'min' => 12000, 'max' => 16000],
            ['nombre' => 'Ravioles de ricota', 'categoria' => 'Principal', 'min' => 11000, 'max' => 15000],
            ['nombre' => 'Bife de chorizo', 'categoria' => 'Principal', 'min' => 16000, 'max' => 22000],
            ['nombre' => 'Risotto de hongos', 'categoria' => 'Principal', 'min' => 13000, 'max' => 17000],
            ['nombre' => 'Pollo grillado', 'categoria' => 'Principal', 'min' => 11500, 'max' => 15000],
            ['nombre' => 'Sorrentinos de jamón y queso', 'categoria' => 'Principal', 'min' => 12000, 'max' => 16000],

            ['nombre' => 'Flan casero', 'categoria' => 'Postre', 'min' => 4500, 'max' => 6000],
            ['nombre' => 'Tiramisú', 'categoria' => 'Postre', 'min' => 5500, 'max' => 7500],
            ['nombre' => 'Brownie con helado', 'categoria' => 'Postre', 'min' => 6000, 'max' => 8000],
            ['nombre' => 'Cheesecake de frutos rojos', 'categoria' => 'Postre', 'min' => 6000, 'max' => 8500],

            ['nombre' => 'Agua mineral', 'categoria' => 'Bebida', 'min' => 2500, 'max' => 3500],
            ['nombre' => 'Gaseosa', 'categoria' => 'Bebida', 'min' => 3000, 'max' => 4000],
            ['nombre' => 'Limonada', 'categoria' => 'Bebida', 'min' => 4000, 'max' => 5500],
            ['nombre' => 'Jugo de naranja', 'categoria' => 'Bebida', 'min' => 4000, 'max' => 5500],
            ['nombre' => 'Café', 'categoria' => 'Bebida', 'min' => 2500, 'max' => 3500],
            ['nombre' => 'Café con leche', 'categoria' => 'Bebida', 'min' => 3000, 'max' => 4500],
        ];

        $producto = fake()->unique()->randomElement($productos);

        return [
            'nombre' => $producto['nombre'],
            'descripcion' => fake()->randomElement([
    'Preparado con ingredientes frescos y seleccionados.',
    'Una opción clásica de la casa, ideal para disfrutar en cualquier momento.',
    'Elaborado al momento con productos de primera calidad.',
    'Una propuesta tradicional con el toque especial de nuestra cocina.',
    'Ideal para compartir y acompañar con una bebida.',
    'Una de las opciones más elegidas por nuestros clientes.',
    'Preparación casera con sabores simples y equilibrados.',
    'Un plato pensado para quienes disfrutan de los sabores clásicos.',
]),
            'precio' => fake()->randomFloat(
                2,
                $producto['min'],
                $producto['max']
            ),
            'categoria' => $producto['categoria'],
        ];
    }
}